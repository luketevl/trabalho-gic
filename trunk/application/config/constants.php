<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');



/*		Constantes para PERMISSAO */

define('PERMISSAO_CRIAR',		'C');
define('PERMISSAO_APROVAR',		'A');
define('PERMISSAO_ALTERAR',		'E');
define('PERMISSAO_APAGAR',		'T');

/*		Constantes para MENU */
define('MENU_PERFIS',		'F');
define('MENU_USUARIOS',		'U');
define('MENU_POSTS',		'P');


/*	Constantes para o facebook */
define('FB_APP_ID',	'325552027571289');
define('FB_SITELOGIN',	'index.php/intranet/login/facebook');
define('FB_APP_SECRET',	'9e36c1f5179ec980ec77484d06faaf9f');
define('FB_SCOPE',	'email,user_website,user_location,user_birthday,user_photos');



/* Constantes de STATUS */
define('ABERTO'		,'N');
define('APROVADO'	,'A');
define('REJEITADO'	,'R');
define('PUBLICADO'	,'P');
define('ADM'		,'1');
define('COMUM'			,'2');


/* End of file constants.php */
/* Location: ./application/config/constants.php */