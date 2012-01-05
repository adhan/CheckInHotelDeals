<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';




/*
 * start routing for admin area
 */
$route['[A,a]dmin'] 			 =  'admin/home';
$route['[A,a]dmin/logout'] 		 = 	'admin/sessions/logout';
$route['[A,a]dmin/login'] 		 = 	'admin/sessions/login';
$route['[A,a]dmin/login/(:any)'] = 	'admin/sessions/login/$1';

/*
 * routing for location
 */
$route['[C,c]ountry/(:num)']	= 'country/view/$1';				//by country id
$route['[C,c]ountry/(:any)']	= 'country/view_by_name/$1';		//by country name

$route['[C,c]ity/(:num)']		= 'city/view/$1';					//by city id
$route['[C,c]ity/(:any)']		= 'city/view_by_name/$1';			//by city name

$route['[H,h]otel/(:num)']		= 'hotel/view/$1';					//by hotel id
$route['[H,h]otel/(:any)']		= 'hotel/view_by_name/$1';			//by hotel name



/* End of file routes.php */
/* Location: ./application/config/routes.php */