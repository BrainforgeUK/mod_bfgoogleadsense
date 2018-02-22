<?php
/**
 * @version   0.0.1
 * @package    Joomla.Site
 * @subpackage  mod_bfgoogleadsense
 * @copyright  Copyright (C) 2013 Jonathan Brain. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');// no direct access

echo '<div id="modbfgooglesense-' . $module->id . '" class="modbfgooglesense">';
echo trim($params->get('adsense_code'));
echo '</div>';
?>