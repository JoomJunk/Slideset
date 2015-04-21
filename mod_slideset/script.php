<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Slideset installation script class.
 *
 * @since  1.0.0
 */
class Mod_SlidesetInstallerScript
{
	/**
	 * Function called before module installation/update/removal procedure commences
	 *
	 * @param   string                   $type    The type of change (install, update or discover_install
	 *                                            , not uninstall)
	 * @param   JInstallerAdapterModule  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since  1.0.0
	 */
	public function preflight($type, $parent)
	{
		$jVersion             = new JVersion;
		$minimumJoomlaVersion = '3.4.0';
		
		if (!$jVersion->isCompatible($minimumJoomlaVersion))
		{
			echo JText::sprintf('MOD_SLIDESET_JOOMLA_NOT_COMPATIBLE', $minimumJoomlaVersion);

			return false;
		}
	}

	/**
	 * Function called on install of module
	 *
	 * @param   JInstallerAdapterModule  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since  1.0.0
	 */
	public function install($parent)
	{
		if (JFolder::create(JPATH_ROOT . '/images/slideset'))
		{
			echo JText::_('MOD_SLIDESET_COULD_NOT_CREATE_IMAGES_DIR');
		}
	}
}
