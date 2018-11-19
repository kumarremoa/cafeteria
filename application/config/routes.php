<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

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
$route['default_controller'] = 'welcome';
$route['admin']='admin/login';
$route['login-admin']='admin/login/admin_login';
$route['google-login']='auth';
$route['registration']='pages/registration';
$route['help']='pages/help';
$route['logout']='login/logout';
$route['plans/(:any)/(:any)/(:any)']='plan/plans/$1/$2/$3';
$route['plan-extra/(:any)']='pages/plan_extra/$1';
$route['service-request']='pages/service';
$route['pricing']='pages/pricing';
$route['term-condition']='pages/term';
$route['user-login']='login/user_login';
$route['signup']='login/save';
$route['ownership-transfer']='pages/ownership';
$route['subscription-plan']='pages/subscription';
$route['sponcer-bucket']="pages/sponge_bucket";
$route['cart-list']="cart/cart_list";
$route['cart-distroy']="cart/cart_distroy";

/*Dashboard*/
$route['forget-password']='admin/login/forgetpassword';
/*manager*/
$route['manager']='manager';
/*kitchen*/
$route['kitchen']='kitchen';
/*close*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
