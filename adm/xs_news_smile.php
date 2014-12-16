<?php
/**
*
* @package InfinityCoreCMS
* @version $Id$
* @copyright (c) 2014 InfinityCoreCMS
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @InfinityCoreCMS is based on phpBB
* @copyright (c) 2014 phpBB Group
* UseLess
*
*/

define('IN_INFINITYCORECMS', true);

// start script
if (!defined('IP_ROOT_PATH')) define('IP_ROOT_PATH', './../');
if (!defined('PHP_EXT')) define('PHP_EXT', substr(strrchr(__FILE__, '.'), 1));
$no_page_header = true;
require('pagestart.' . PHP_EXT);
include_once(IP_ROOT_PATH . 'includes/bbcode.' . PHP_EXT);
include_once(IP_ROOT_PATH . 'includes/functions_post.' . PHP_EXT);

if (!defined('XS_TPL_PATH'))
{
	define('XS_TPL_PATH', '../../templates/common/xs_mod/tpl_news/');
}

$mode = request_var('mode', '');

if ($mode == 'smilies')
{
	generate_smilies('window');
	exit;
}

?>