/**
* @package    JJ_Slideset
* @author     JoomJunk <admin@joomjunk.co.uk>
* @copyright  Copyright (C) 2011 - 2014 JoomJunk. All Rights Reserved
* @license    GPL v3 http://www.gnu.org/licenses/gpl-3.0.html
**/

jQuery(document).ready(function($){

	function slider(){
		var sliderWrapper = $('.slider .wrapper');
		var sliderImage = $('.slider .wrapper img');
		var sliderHeight = $('.slider').height();	

		sliderImage.animate({
			width: 0,
			height: 0
		}, 700, function(){
	
			sliderWrapper.first().insertAfter( sliderWrapper.last() );
			sliderImage.animate({
				height: 210,
				width: 190
			}); 				
			
		}); 
		
		
		
		
		
		
		
		
		
		
		/**
		
		var sliderWrapper = $('.slider .wrapper');
		var sliderHeight = $('.slider').height();
	
		sliderWrapper.animate({
			bottom: sliderHeight
		}, 700, function(){
	
			sliderWrapper.first().insertAfter( sliderWrapper.last() );			
			sliderWrapper.css({bottom: 0});	
			
		});
		
		**/
	}
	
	setInterval(function() { slider(); }, 4000);	
});