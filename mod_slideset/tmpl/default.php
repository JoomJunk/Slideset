<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2014 JoomJunk. All Rights Reserved
* @license    GPL v3 http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC')  or die('Restricted access');

JHtml::_('stylesheet', 'mod_slideset/mod_slideset.css', array(), true);

$script = '';

JFactory::getDocument()->addScriptDeclaration($script);

?>

<div class="slider">
	<div class="wrapper">
	
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/social-slider-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/shoutbox-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/sponsors-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/css3-generator-white.png" alt="" /></div>
		
	</div>
	
	<div class="wrapper">
	
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/fake-online-users-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/social-images-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/module-gen-white.png" alt="" /></div>
		<div class="image"><img src="<?php echo JUri::root(); ?>images/yootheme/demo/slideset/accordion-white.png" alt="" /></div>
		
	</div>

</div>