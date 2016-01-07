<?php

use App\Models\Font;

class FontsSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        $this->createFonts();
    }

    private function createFonts() {
       $fonts = [
            [   
                'folder' => 'roboto',
                'name' => 'Roboto',
                'css_stack' => "'Roboto', Arial, Helvetica, sans-serif",
                'google_font' => 'Roboto:400,700,900,100',
                'normal' => 'Roboto-Regular.ttf',
                'bold' => 'Roboto-Medium.ttf',
                'italics' => 'Roboto-Italic.ttf',
                'bolditalics' => 'Roboto-Italic.ttf',
                'sort_order' => 100
            ],
            [   
                'folder' => 'abril_fatface',
                'name' => 'Abril Fatface',
                'css_stack' => "'Abril Fatface', Georgia, serif",
                'google_font' => 'Abril+Fatface',
                'normal' => 'AbrilFatface-Regular.ttf',
                'bold' => 'AbrilFatface-Regular.ttf',
                'italics' => 'AbrilFatface-Regular.ttf',
                'bolditalics' => 'AbrilFatface-Regular.ttf',
                'sort_order' => 200
            ],
            [   
                'folder' => 'arvo',
                'name' => 'Arvo',
                'css_stack' => "'Arvo', Georgia, serif",
                'google_font' => 'Arvo:400,700',
                'normal' => 'Arvo-Regular.ttf',
                'bold' => 'Arvo-Bold.ttf',
                'italics' => 'Arvo-Italic.ttf',
                'bolditalics' => 'Arvo-Italic.ttf',
                'sort_order' => 300
            ],
            [   
                'folder' => 'josefin_sans',
                'name' => 'Josefin Sans',
                'css_stack' => "'Josefin Sans', Arial, Helvetica, sans-serif",
                'google_font' => 'Josefin Sans:400,700,900,100',
                'normal' => 'JosefinSans-Regular.ttf',
                'bold' => 'JosefinSans-Bold.ttf',
                'italics' => 'JosefinSans-Italic.ttf',
                'bolditalics' => 'JosefinSans-Italic.ttf',
                'sort_order' => 400

            ],
            [   
                'folder' => 'josefin_sans_light',
                'css_stack' => "'Josefin Sans', Arial, Helvetica, sans-serif",
                'name' => 'Josefin Sans Light',
                'css_weight' => 300,
                'google_font' => 'Josefin+Sans:300,700,900,100',
                'normal' => 'JosefinSans-Light.ttf',
                'bold' => 'JosefinSans-SemiBold.ttf',
                'italics' => 'JosefinSans-LightItalic.ttf',
                'bolditalics' => 'JosefinSans-LightItalic.ttf',
                'sort_order' => 600
            ],
            [   
                'folder' => 'josefin_slab',
                'name' => 'Josefin Slab',
                'css_stack' => "'Josefin Slab', Arial, Helvetica, sans-serif",
                'google_font' => 'Josefin Sans:400,700,900,100',
                'normal' => 'JosefinSlab-Regular.ttf',
                'bold' => 'JosefinSlab-Bold.ttf',
                'italics' => 'JosefinSlab-Italic.ttf',
                'bolditalics' => 'JosefinSlab-Italic.ttf',
                'sort_order' => 700
            ],
            [   
                'folder' => 'josefin_slab_light',
                'name' => 'Josefin Slab Light',
                'css_stack' => "'Josefin Slab', Georgia, serif",
                'css_weight' => 300,
                'google_font' => 'Josefin+Sans:400,700,900,100',
                'normal' => 'JosefinSlab-Light.ttf',
                'bold' => 'JosefinSlab-SemiBold.ttf',
                'italics' => 'JosefinSlab-LightItalic.ttf',
                'bolditalics' => 'JosefinSlab-LightItalic.ttf',
                'sort_order' => 800
            ],
            [   
                'folder' => 'open_sans',
                'name' => 'Open Sans',
                'css_stack' => "'Open Sans', Arial, Helvetica, sans-serif",
                'google_font' => 'Open+Sans:400,700,900,100',
                'normal' => 'OpenSans-Regular.ttf',
                'bold' => 'OpenSans-Semibold.ttf',
                'italics' => 'OpenSans-Italic.ttf',
                'bolditalics' => 'OpenSans-Italic.ttf',
                'sort_order' => 900

            ],
            [   
                'folder' => 'open_sans_light',
                'name' => 'Open Sans Light',
                'css_stack' => "'Open Sans', Arial, Helvetica, sans-serif",
                'css_weight' => 300,
                'google_font' => 'Open+Sans:300,700,900,100',
                'normal' => 'OpenSans-Light.ttf',
                'bold' => 'OpenSans-Regular.ttf',
                'italics' => 'OpenSans-LightItalic.ttf',
                'bolditalics' => 'OpenSans-LightItalic.ttf',
                'sort_order' => 1000,
            ],
            [   
                'folder' => 'pt_sans',
                'name' => 'PT Sans',
                'css_stack' => "'PT Sans', Arial, Helvetica, sans-serif",
                'google_font' => 'PT+Sans:400,700,900,100',
                'normal' => 'PTSans-Regular.ttf',
                'bold' => 'PTSans-Bold.ttf',
                'italics' => 'PTSans-Italic.ttf',
                'bolditalics' => 'PTSans-Italic.ttf',
                'sort_order' => 1100,
            ],
            [   
                'folder' => 'pt_serif',
                'name' => 'PT Serif',
                'css_stack' => "'PT Serif', Georgia, serif",
                'google_font' => 'PT+Serif:400,700,900,100',
                'normal' => 'PTSerif-Regular.ttf',
                'bold' => 'PTSerif-Bold.ttf',
                'italics' => 'PTSerif-Italic.ttf',
                'bolditalics' => 'PTSerif-Italic.ttf',
                'sort_order' => 1200
            ],
            [   
                'folder' => 'raleway',
                'name' => 'Raleway',
                'css_stack' => "'Raleway', Arial, Helvetica, sans-serif",
                'google_font' => 'Raleway:400,700,900,100',
                'normal' => 'Raleway-Regular.ttf',
                'bold' => 'Raleway-Medium.ttf',
                'italics' => 'Raleway-Italic.ttf',
                'bolditalics' => 'Raleway-Italic.ttf',
                'sort_order' => 1300
            ],
            [   
                'folder' => 'raleway_light',
                'name' => 'Raleway Light',
                'css_stack' => "'Raleway', Arial, Helvetica, sans-serif",
                'css_weight' => 300,
                'google_font' => 'Raleway:300,700,900,100',
                'normal' => 'Raleway-Light.ttf',
                'bold' => 'Raleway-Medium.ttf',
                'italics' => 'Raleway-LightItalic.ttf',
                'bolditalics' => 'Raleway-LightItalic.ttf',
                'sort_order' => 1400
            ],
            [   
                'folder' => 'titillium',
                'name' => 'Titillium',
                'css_stack' => "'Titillium Web', Arial, Helvetica, sans-serif",
                'google_font' => 'Titillium+Web:400,700,900,100',
                'normal' => 'TitilliumWeb-Regular.ttf',
                'bold' => 'TitilliumWeb-Bold.ttf',
                'italics' => 'TitilliumWeb-Italic.ttf',
                'bolditalics' => 'TitilliumWeb-Italic.ttf',
                'sort_order' => 1500
            ],
            [   
                'folder' => 'titillium_light',
                'name' => 'Titillium Light',
                'css_stack' => "'Titillium Web', Arial, Helvetica, sans-serif",
                'css_weight' => 300,
                'google_font' => 'Titillium+Web:300,700,900,100',
                'normal' => 'TitilliumWeb-Light.ttf',
                'bold' => 'TitilliumWeb-SemiBold.ttf',
                'italics' => 'TitilliumWeb-LightItalic.ttf',
                'bolditalics' => 'TitilliumWeb-LightItalic.ttf',
                'sort_order' => 1600,
            ],
            [   
                'folder' => 'ubuntu',
                'name' => 'Ubuntu',
                'css_stack' => "'Ubuntu', Arial, Helvetica, sans-serif",
                'google_font' => 'Ubuntu:400,700,900,100',
                'normal' => 'Ubuntu-Regular.ttf',
                'bold' => 'Ubuntu-Bold.ttf',
                'italics' => 'Ubuntu-Italic.ttf',
                'bolditalics' => 'Ubuntu-Italic.ttf',
                'sort_order' => 1700,
            ],
            [   
                'folder' => 'ubuntu_light',
                'name' => 'Ubuntu Light',
                'css_stack' => "'Ubuntu', Arial, Helvetica, sans-serif",
                'css_weight' => 300,
                'google_font' => 'Ubuntu:200,700,900,100',
                'normal' => 'Ubuntu-Light.ttf',
                'bold' => 'Ubuntu-Medium.ttf',
                'italics' => 'Ubuntu-LightItalic.ttf',
                'bolditalics' => 'Ubuntu-LightItalic.ttf',
                'sort_order' => 1800,
            ],
        ];

        foreach ($fonts as $font) {
            if (!DB::table('fonts')->where('name', '=', $font['name'])->get()) {
                Font::create($font);
            }
        }
    }
}