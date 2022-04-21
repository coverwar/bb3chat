<?php

/**
*
* @package BB3Chat
* @copyright (c) 2015 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BB3CHAT' => 'Chat',
	'BB3CHAT_WINDOW' => 'In the pop-up window',
));
