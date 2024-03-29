<?php
/**
 * @copyright	@copyright	Copyright (c) 2014 TS Form. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';


$class_sfx = htmlspecialchars($params->get('class_sfx'));

$list = modtsformHelper::getList( $params );
require(JModuleHelper::getLayoutPath('mod_tsform', $params->get('layout', 'default')));