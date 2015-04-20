<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC')  or die('Restricted access');

?>

<div data-uk-slideset="{default: <?php echo $items; ?>, animation: '<?php echo $animation; ?>', duration: <?php echo $duration; ?>}">
	
	<div class="uk-margin">
		<ul class="uk-slideset uk-grid uk-flex-center">
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
		</ul>
	</div>
	
	<ul class="uk-slideset-nav uk-dotnav uk-flex-center">
		<li data-uk-slideset-item="0"><a href="">&nbsp;</a></li>
		<li data-uk-slideset-item="1"><a href="">&nbsp;</a></li>
	</ul>
	
</div>