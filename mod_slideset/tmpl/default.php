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
	
	<div class="uk-slidenav-position uk-margin">
		<ul class="uk-slideset uk-grid uk-flex-center">
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
			<li><img src="http://placehold.it/270x130"></li>
		</ul>
		
		<?php if ($nav == 'slidenav' || $nav == 'both') : ?>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
		<?php endif; ?>
		
	</div>
	
	<?php if ($nav == 'dotnav' || $nav == 'both') : ?>
		<ul class="uk-slideset-nav uk-dotnav uk-flex-center"></ul>
	<?php endif; ?>
	
</div>