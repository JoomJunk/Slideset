<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC') or die('Restricted access');


// Load CSS
JHtml::_('stylesheet', JUri::root() . 'media/mod_slideset/css/uikit.min.css');


// Load JS
JHtml::_('jquery.framework');
JHtml::_('script', JUri::root() . 'media/mod_slideset/js/uikit.min.js');
JHtml::_('script', JUri::root() . 'media/mod_slideset/js/slideset.min.js');


// Get params
$items 		= $params->get('items', 3);
$animation 	= $params->get('animation', 'scale');
$duration 	= $params->get('duration', 200);
$nav 		= $params->get('nav', 'both');


require JModuleHelper::getLayoutPath('mod_slideset');
