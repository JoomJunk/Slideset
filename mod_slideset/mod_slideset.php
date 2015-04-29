<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC') or die('Restricted access');


// Get the helper file
require_once dirname(__FILE__) . '/helper.php';

$helper = new ModSlidesetHelper;

// Load CSS
JHtml::_('stylesheet', JUri::root() . 'media/mod_slideset/css/uikit.min.css');


// Load JS
JHtml::_('jquery.framework');
JHtml::_('script', JUri::root() . 'media/mod_slideset/js/uikit.min.js');
JHtml::_('script', JUri::root() . 'media/mod_slideset/js/slideset.min.js');


// Get params
$images 		= $params->get('slideset');
$items 			= $params->get('items', 3);
$animation 		= $params->get('animation', 'scale');
$duration 		= $params->get('duration', 200);
$nav 			= $params->get('nav', 'both');
$navcolour 		= $params->get('navcolour', 'default');
$small			= $params->get('small', 'null');
$medium			= $params->get('medium', 'null');
$large			= $params->get('large', 'null');
$xlarge			= $params->get('xlarge', 'null');
$autoplay		= $params->get('autoplay', 0);
$autoplayInt	= $params->get('autoplayInt', 7000);
$pause			= $params->get('pause', 0);


// Set set values depending on variables
if ($autoplay == 1)
{
	$autoplayVal = true;
}
else
{
	$autoplayVal = 0;
}

if ($pause == 1)
{
	$pauseVal = true;
}
else
{
	$pauseVal = 0;
}


// Switch between the dark and light navigation
switch ($navcolour)
{
	case 'contrast':
		$slidenav_class = 'uk-slidenav-contrast';
		$dotnav_class 	= 'uk-dotnav-contrast';
		break;
	default:
		$slidenav_class = 'uk-slidenav-default';
		$dotnav_class 	= 'uk-dotnav-default';
		break;
}


$path 	= JUri::root() . 'images/slideset/';
$group 	= $helper->group_by_key( json_decode($images, true) );


require JModuleHelper::getLayoutPath('mod_slideset');
