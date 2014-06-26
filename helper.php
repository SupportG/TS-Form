<?php
/**
 * @copyright	Copyright (c) 2014 TS Form. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * TS Form - tsform Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	TSForm.tsform
 */
class modtsformHelper {
    //Репозитории 
    public static function getList(&$params)
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('title');
        $query->from('#__content');
        $query->where('state = 1');
        $query->order('RAND()');
        $db->setQuery($query, 0, 5);
         
        $list = $db->loadObjectList();
 
        return $list;
    }
	
}