<?php
/**
 * @version   0.0.1
 * @package		Joomla.Site
 * @subpackage	mod_bf_google_adsense
 * @copyright	Copyright (C) 2013 Jonathan Brain. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');// no direct access

$user = JFactory::getUser();
if (empty($user->id) || $params->get('showloggedin')) {

  $php_condition = trim($params->get('php_condition'), " ;\t\n\r\0\x0B");
  if (!empty($php_condition)) {
    if (!eval('return ' . $php_condition . ';')) {
      return;
    }
  }

  $layout = $params->get('layout', 'default');
  $ip_block_list = trim( $params->get('ip_block_list'));
  foreach (preg_split( '/[,\s]+/', $ip_block_list) as $value)	{
    if (empty($value)) continue;
    if (preg_match('/^' . $value . '$/', $_SERVER["REMOTE_ADDR"])) {
      $layout .= '-alternate';
      break;
    }
  }
  
  $wrapper_options	= trim( $params->get( 'wrapper_options' ) );
  require JModuleHelper::getLayoutPath('mod_bf_google_adsense', $layout);
}
?>