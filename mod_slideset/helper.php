<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

defined('_JEXEC') or die('Restricted access');

/**
 * Slideset helper connector class.
 *
 * @since  1.0.0
 */
class ModSlidesetHelper
{
	/**
	 * Method sort group the form field values by key
	 *
	 * @return   array  The image keys
	 *
	 * @since    1.0.0
	 */
	public function group_by_key($array) 
	{
		$result = array();
		
		foreach ($array as $sub) 
		{
			foreach ($sub as $k => $v) 
			{
				$result[$k][] = $v;
			}
		}
		return $result;
	}

}