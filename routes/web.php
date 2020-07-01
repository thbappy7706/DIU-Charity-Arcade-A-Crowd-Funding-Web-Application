<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('/','HomeController@show_welcome_page');
Route::get('/about','HomeController@show_about_page');
Route::get('/contact_us','HomeController@show_contact_us_page');
Route::post('/save_contact_message','HomeController@save_contact_message');
Route::get('/give_scholarship','HomeController@show_give_scholarship_page');
Route::get('/gallery','HomeController@show_gallery_page');
Route::get('/all_campaigns','HomeController@show_campaigns');
Route::get('/all_bloodonors','HomeController@show_bloodonors');
Route::get('/all_ambulances','HomeController@show_ambulances');
Route::get('/campaign_by_category/{id}','HomeController@show_campaign_by_category');
Route::get('/campaign_details/{id}','HomeController@show_campaign_details');
Route::get('/all_categories','HomeController@show_categories');
Route::get('/all_blogs','HomeController@show_blogs');
Route::get('/blog_details/{id}','HomeController@show_blog_details');
Route::post('/save_comment/{id}','HomeController@save_comment');
Route::post('/update_profile/{id}','HomeController@update_profile');
Route::get('/my_comments','HomeController@show_my_comments');
Route::post('/all_bloodonors', 'HomeController@search_bloodonor')->name('search.bloodonors');


//Corona route
Route::get('/coronabd', function (){
   return view('corona');

});



//new front insert route
Route::get('/become_volunteer','FrontController@vl');
Route::post('/add_vdata','FrontController@vlin');

Route::get('/become_blood_donor','FrontController@bl');
Route::post('/add_bldata','FrontController@blin');






Route::get('/delete_my_comment/{id}','HomeController@delete_comment')->name('delete.comment');
Route::get('/my_donations','HomeController@show_my_donations');
Route::get('/my_campaigns','HomeController@show_my_campaigns');
Route::get('/create_campaign','HomeController@create_campaign');
Route::get('/edit_campaign/{id}','HomeController@edit_campaign');
Route::post('/update_campaign/{id}','HomeController@update_campaign');
Route::post('/save_campaign','HomeController@save_campaign');
Route::get('/create_donation/{id}','HomeController@create_donation');
Route::get('/donation_status','HomeController@donation_status');
Route::get('/donation_failed','HomeController@donation_failed');
Route::get('/my_withdrawals','HomeController@show_my_withdrawals');
Route::post('/charge','HomeController@generate_token');



Auth::routes(['verify' => true]);


Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{

	Route::get('admins','AdminController@index');



	Route::get('all_user', 'AdminController@all_user')->name('users');
	//for datatable ajax data
	Route::get('users','AdminController@all_user')->name('get.users');




	Route::get('/users/create','AdminController@create_user');
	Route::post('/users','AdminController@save_user');
	Route::get('/users/{id}/edit','AdminController@edit_user');
	Route::post('/update_user/{id}','AdminController@update_user');
	Route::get('/delete_user/{id}','AdminController@delete_user')->name('delete.user');
	Route::get('/approve_volunteer/{id}','AdminController@approve_volunteer');
	Route::resource('categories','CategoryController');
	Route::resource('general_settings','GeneralSettingController');
	Route::resource('payment_settings','PaymentSettingController');
	Route::resource('media_settings','MediaSettingController');
	Route::resource('campaigns','CampaignController');
	Route::resource('bloodonors','BloodonorController');
	Route::resource('ambulances','AmbulanceController');
	Route::get('/approve_bloodonor/{id}','BloodonorController@approve_bloodonor');
	Route::get('/approve_ambulance/{id}','AmbulanceController@approve_ambulance');
	Route::resource('ambulances','AmbulanceController');
	Route::resource('pages','PageController');
	Route::resource('blogs','BlogController');
	Route::get('blog_comments/{id}','BlogController@show_blog_comments');
	Route::get('active_com/{id}','BlogController@active_com');
	Route::get('deactive_com/{id}','BlogController@deactive_com');
	Route::get('/delete_comment/{id}','BlogController@delete_comment');
	Route::resource('donations','DonationController');
	Route::resource('testimonials','TestimonialController');
	Route::get('/com_don/{id}','DonationController@com_donation');
	Route::get('/approve_cam/{id}','CampaignController@approve_cam');
	Route::get('/finalize_cam/{id}','CampaignController@finalize_cam');
	Route::resource('galleries','GalleryController');
	Route::resource('withdrawals','WithdrawalController');
	Route::get('/com_payment/{id}','WithdrawalController@com_payment');

	Route::post('/users/create', 'AdminController@check')->name('email_available.check');


});
