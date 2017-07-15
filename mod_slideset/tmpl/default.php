<?php
/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2017 JoomJunk. All Rights Reserved
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC')  or die('Restricted access');

?>
<div data-uk-slideset="{
	default: <?php echo $items; ?>,
	animation: '<?php echo $animation; ?>',
	duration: <?php echo $duration; ?>,
	small: <?php echo $small; ?>,
	medium: <?php echo $medium; ?>,
	large: <?php echo $large; ?>,
	xlarge: <?php echo $xlarge; ?>,
	autoplay: <?php echo $autoplayVal; ?>,
	autoplayInterval: <?php echo $autoplayInt; ?>,
	pauseOnHover: <?php echo $pauseVal; ?>
	}">

	<div class="uk-slidenav-position uk-margin">
		<ul class="uk-slideset uk-grid uk-flex-center">
			<?php
			$i = 0;

			foreach ($group as $index => $value)
			{	
				$i++;
				
				if ($value[0] == 'http://placehold.it/270x150')
				{
					$path = '';
				}

				echo '<li><img src="' . $path . $value[0] . '" alt="' . $value[1] . '"></li>';
			}
			?>
		</ul>

		<?php if ($nav == 'slidenav' || $nav == 'both') : ?>
			<a href="" class="uk-slidenav <?php echo $slidenav_class; ?> uk-slidenav-previous" data-uk-slideset-item="previous"></a>
			<a href="" class="uk-slidenav <?php echo $slidenav_class; ?> uk-slidenav-next" data-uk-slideset-item="next"></a>
		<?php endif; ?>
	</div>

	<?php if ($nav == 'dotnav' || $nav == 'both') : ?>
		<ul class="uk-slideset-nav uk-dotnav <?php echo $dotnav_class; ?> uk-flex-center"></ul>
	<?php endif; ?>
</div>
