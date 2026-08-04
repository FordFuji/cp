<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend/path/index';
$route['backend'] = 'login/backend/index';
/*$route['login'] = 'login/backend/index';
$route['([a-zA-Zก-ฮ0-9-]+)/(\d+)'] = function($product_name_en, $product_id)
{
    return 'frontend/path/product_detail/'.$product_id.'/';
};
$route['collection/([a-zA-Zก-ฮ0-9-]+)/(\d+)'] = function($collection_name_en, $collection_id)
{
    return 'frontend/path/product/collection/'.$collection_id.'/';
};
$route['product/([a-zA-Zก-ฮ0-9-]+)/(\d+)'] = function($collection_name_en, $category_id)
{
    return 'frontend/path/product/category/'.$category_id.'/';
};*/
$route['index'] = 'frontend/path/index';
$route['about_us'] = 'frontend/path/about_us';
$route['alumni_check'] = 'frontend/path/alumni_check';
$route['alumni_hub'] = 'frontend/path/alumni_hub';
$route['contact_us'] = 'frontend/path/contact_us';
$route['detail/(:num)'] = 'frontend/path/detail/$1';

$route['profile_update_detail/(:num)'] = 'frontend/path/profile_update_detail/$1';

$route['events'] = 'frontend/path/events';

$route['events_profile_update'] = 'frontend/path/events_profile_update';

$route['scholarship_change_password'] = 'frontend/path/scholarship_change_password';
$route['scholarship_document_download'] = 'frontend/path/scholarship_document_download';
$route['scholarship_form_download'] = 'frontend/path/scholarship_form_download';
$route['scholarship_making_plan'] = 'frontend/path/scholarship_making_plan';
$route['scholarship_my_course'] = 'frontend/path/scholarship_my_course';
$route['scholarship_my_development_plan'] = 'frontend/path/scholarship_my_development_plan';
$route['scholarship_my_english_update'] = 'frontend/path/scholarship_my_english_update';
$route['scholarship_my_idp'] = 'frontend/path/scholarship_my_idp';
$route['scholarship_my_message_detail/(:num)'] = 'frontend/path/scholarship_my_message_detail/$1';
$route['scholarship_my_message'] = 'frontend/path/scholarship_my_message';
$route['scholarship_my_page_diary'] = 'frontend/path/scholarship_my_page_diary';
$route['scholarship_my_page_folio'] = 'frontend/path/scholarship_my_page_folio';
$route['scholarship_my_profile'] = 'frontend/path/scholarship_my_profile';
$route['scholarship_my_project'] = 'frontend/path/scholarship_my_project';
$route['scholarship_my_study'] = 'frontend/path/scholarship_my_study';
$route['scholarship_my_training'] = 'frontend/path/scholarship_my_training';
$route['scholarship_planning'] = 'frontend/path/scholarship_planning';
$route['scholarship_q_a'] = 'frontend/path/scholarship_q_a';
$route['souvenir_shop'] = 'frontend/path/souvenir_shop';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
