<?php

use Illuminate\Database\Seeder;

class Color_settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color_settings')->insert([

        	'id'=>1,
        	 'body_font'=> 'Montserrat',
        	 'font_size'=> '16', 
        	 'heading1'=>'Montserrat',
        	 'head_font1'=> '42',
        	 'heading2'=> 'Montserrat',
        	 'head_font2'=> '28', 
        	 'heading3'=>'Montserrat',
        	 'head_font3'=> '24', 
        	 'heading4'=>'Montserrat', 
        	 'head_font4'=>'18', 
        	 'heading5'=>'Montserrat',
        	 'head_font5'=> '14', 
        	 'heading6'=>'Montserrat', 
        	 'head_font6'=>12,
        	 'paragraph'=> 0,
        	 'para_font_size'=> 14,
        	 'list_font'=> 0, 
        	 'list_font_size'=>'14', 
        	 'theme_color'=>'#2DB3BB', 
        	 'button_color'=>'#FF533D',
        	 'link_color'=> '#FFFFFF'
        	
            
        ]);
    }
}
