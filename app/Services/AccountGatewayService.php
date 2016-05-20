<?php namespace App\Services;

use URL;
use App\Models\Gateway;
use App\Models\AccountGateway;
use App\Services\BaseService;
use App\Ninja\Repositories\AccountGatewayRepository;

class AccountGatewayService extends BaseService
{
    protected $accountGatewayRepo;
    protected $datatableService;

    public function __construct(AccountGatewayRepository $accountGatewayRepo, DatatableService $datatableService)
    {
        $this->accountGatewayRepo = $accountGatewayRepo;
        $this->datatableService = $datatableService;
    }

    protected function getRepo()
    {
        return $this->accountGatewayRepo;
    }

    /*
    public function save()
    {
        return null;
    }
    */

    public function getDatatable($accountId)
    {
        $query = $this->accountGatewayRepo->find($accountId);

        return $this->createDatatable(ENTITY_ACCOUNT_GATEWAY, $query, false);
    }

    protected function getDatatableColumns($entityType, $hideClient)
    {
        return [
            [
                'name',
                function ($model) {
                    if ($model->deleted_at) {
                        return $model->name;
                    } elseif ($model->gateway_id != GATEWAY_WEPAY) {
                        return link_to("gateways/{$model->public_id}/edit", $model->name)->toHtml();
                    } else {
                        $accountGateway = AccountGateway::find($model->id);
                        $config = $accountGateway->getConfig();
                        $endpoint = WEPAY_ENVIRONMENT == WEPAY_STAGE ? 'https://stage.wepay.com/' : 'https://www.wepay.com/';
                        $wepayAccountId = $config->accountId;
                        $wepayState = isset($config->state)?$config->state:null;
                        $linkText = $model->name;
                        $url = $endpoint.'account/'.$wepayAccountId;
                        $wepay = \Utils::setupWepay($accountGateway);
                        $html = link_to($url, $linkText, array('target'=>'_blank'))->toHtml();

                        try {
                            if ($wepayState == 'action_required') {
                                $updateUri = $wepay->request('/account/get_update_uri', array(
                                    'account_id' => $wepayAccountId,
                                    'redirect_uri' => URL::to('gateways'),
                                ));

                                $linkText .= ' <span style="color:#d9534f">('.trans('texts.action_required').')</span>';
                                $url = $updateUri->uri;
                                $html = "<a href=\"{$url}\">{$linkText}</a>";
                                $model->setupUrl = $url;
                            } elseif ($wepayState == 'pending') {
                                $linkText .= ' ('.trans('texts.resend_confirmation_email').')';
                                $model->resendConfirmationUrl = $url = URL::to("gateways/{$accountGateway->public_id}/resend_confirmation");
                                $html = link_to($url, $linkText)->toHtml();
                            }
                        } catch(\WePayException $ex){}

                        return $html;
                    }
                }
            ],
            [
                'payment_type',
                function ($model) {
                    return Gateway::getPrettyPaymentType($model->gateway_id);
                }
            ],
        ];
    }

    protected function getDatatableActions($entityType)
    {
        return [
            [
                uctrans('texts.resend_confirmation_email'),
                function ($model) {
                    return $model->resendConfirmationUrl;
                },
                function($model) {
                    return !$model->deleted_at && $model->gateway_id == GATEWAY_WEPAY && !empty($model->resendConfirmationUrl);
                }
            ], [
                uctrans('texts.finish_setup'),
                function ($model) {
                    return $model->setupUrl;
                },
                function($model) {
                    return !$model->deleted_at && $model->gateway_id == GATEWAY_WEPAY && !empty($model->setupUrl);
                }
            ] , [
                uctrans('texts.edit_gateway'),
                function ($model) {
                    return URL::to("gateways/{$model->public_id}/edit");
                },
                function($model) {
                    return !$model->deleted_at;
                }
            ], [
                uctrans('texts.manage_wepay_account'),
                function ($model) {
                    $accountGateway = AccountGateway::find($model->id);
                    $endpoint = WEPAY_ENVIRONMENT == WEPAY_STAGE ? 'https://stage.wepay.com/' : 'https://www.wepay.com/';
                    return array(
                        'url' => $endpoint.'account/'.$accountGateway->getConfig()->accountId,
                        'attributes' => 'target="_blank"'
                    );
                },
                function($model) {
                    return !$model->deleted_at && $model->gateway_id == GATEWAY_WEPAY;
                }
            ]
        ];
    }

}