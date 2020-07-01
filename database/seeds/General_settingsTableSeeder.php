<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class General_settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 DB::table('general_settings')->insert([

        		 'id'=>1,
        	  'site_name'=>'Donate',
        	  'site_des'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
        	  'site_keyword'=>'lorem,ipsum,lorem,ipsum',
        	  'blog_adv'=>'<img src=\"http://localhost/donateme/local/images/advertisement.jpg\" class=\"img-responsive\" alt=\"\">',
        	  'site_address'=>'1657 Riverside Drive Redding, Headquarters 1120 N Street Sacramento. London',
        	  'email'=>'test@gmail.com',
        	  'phone'=>'98765432104',
        	  'fb_link'=>'http://www.facebook.com', 
        	  'twitter_link'=>'http://www.twitter.com',
        	  'gplus_link'=>'http://www.google.com',
        	  'pin_link'=> 'http://www.pinterest.com',
        	  'insta_link'=>'http://www.instagram.com',
        	  'footer_copyright'=>'© 2018. All Rights Reserved. Designed by Arnold',
        	  'bg_post_per_page'=>15, 
        	  'gal_img_per_page'=> 20, 
        	  'cat_per_page'=> 20, 
        	  'cam_per_page'=>20,
        	  'currency'=> 'USD',
        	  'logo'=>'logo/1543316234.png',
        	  'favicon'=>'favicon/1543316326.png',
        	  'home_ban'=>'home_banner/1544618403.jpg',
        	  'lt_dn_bg_img'=>'latest_donation_image/lt_don_back.jpg',
        	  'home_ban_head'=>'DONATE',
        	  'home_ban_sub_head'=>'Together we can make a difference',
        	  'home_ban_btn_text'=>'Donate Now',
        	  'home_ban_btn_url'=>'all-campaigns',
        	  'pg_load_ani'=>'1',
        	  'ani_gif_img'=>'animated_gif_image/1543316326.gif',
        	  'ggl_map_api_key'=>'AIzaSyDDsvwtCM8LTvi1Zm-XydV-iutWZzAJVDI',
        	  'site_url'=>'http://localhost/donate',
        	  'dis_home_box'=>1,
        	  'site_pri_col'=> '#F45302',  
        	  'auto_app_cam'=> 0,
        	  'min_amount_cam'=> 100, 
        	  'max_amount_cam'=>1000,
        	  'min_amount_dn'=> 5, 
        	  'max_amount_dn'=>10000,
        	  'dis_gl_amount'=> 1,
        	  'dis_ggl_trans'=>1,

            
        ]);
      
    }
}
