/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Init Search
3. Init Menu
4. Init SVG
5. Initialize Milestones
6. Init Testimonials Slider
5. Init Accordions


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var menuActive = false;
	var ctrl = new ScrollMagic.Controller();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initSearch();
	initMenu();
	initSvg();
	initMilestones();
	initTestSlider();
	initAccordions();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if(window.innerWidth < 992)
		{
			if($(window).scrollTop() > 100)
			{
				header.addClass('scrolled');
			}
			else
			{
				header.removeClass('scrolled');
			}
		}
		else
		{
			if($(window).scrollTop() > 100)
			{
				header.addClass('scrolled');
			}
			else
			{
				header.removeClass('scrolled');
			}
		}
		if(window.innerWidth > 767 && menuActive)
		{
			closeMenu();
		}
	}

	/* 

	3. Init Search

	*/

	function initSearch()
	{
		if($('.main_menu_search_button').length)
		{
			var search = $('.main_menu_search_button');
			var searchInput = $('.main_menu_search_content');
			search.on('click', function()
			{
				searchInput.toggleClass('active');
			});
		}
	}

	/* 

	4. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			var hamb = $('.burger');

			hamb.on('click', function()
			{
				if(menuActive)
				{
					closeMenu();
				}
				else
				{
					openMenu();
				}
			});
		}
	}

	function closeMenu()
	{
		var menu = $('.menu');
		menu.removeClass('active');
		menuActive = false;
		menu.css('max-height', "0px");
	}

	function openMenu()
	{
		var menu = $('.menu');
		menu.addClass('active');
		menuActive = true;
		menu.css('max-height', menu.prop('scrollHeight') + "px");
	}

	/* 

	6. Init SVG

	*/

	function initSvg()
	{
		jQuery('img.svg').each(function()
		{
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data)
			{
				// Get the SVG tag, ignore the rest
				var $svg = jQuery(data).find('svg');

				// Add replaced image's ID to the new SVG
				if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Replace image with new SVG
				$img.replaceWith($svg);
			}, 'xml');
		});
	}

	/* 

	6. Initialize Milestones

	*/

	function initMilestones()
	{
		if($('.milestone_counter').length)
		{
			var milestoneItems = $('.milestone_counter');

	    	milestoneItems.each(function(i)
	    	{
	    		var ele = $(this);
	    		var endValue = ele.data('end-value');
	    		var eleValue = ele.text();

	    		/* Use data-sign-before and data-sign-after to add signs
	    		infront or behind the counter number */
	    		var signBefore = "";
	    		var signAfter = "";

	    		if(ele.attr('data-sign-before'))
	    		{
	    			signBefore = ele.attr('data-sign-before');
	    		}

	    		if(ele.attr('data-sign-after'))
	    		{
	    			signAfter = ele.attr('data-sign-after');
	    		}

	    		var milestoneScene = new ScrollMagic.Scene({
		    		triggerElement: this,
		    		triggerHook: 'onEnter',
		    		reverse:false
		    	})
		    	.on('start', function()
		    	{
		    		var counter = {value:eleValue};
		    		var counterTween = TweenMax.to(counter, 4,
		    		{
		    			value: endValue,
		    			roundProps:"value", 
						ease: Circ.easeOut, 
						onUpdate:function()
						{
							document.getElementsByClassName('milestone_counter')[i].innerHTML = signBefore + counter.value + signAfter;
						}
		    		});
		    	})
			    .addTo(ctrl);
	    	});
		}
	}

	/* 

	6. Init Testimonials Slider

	*/

	function initTestSlider()
	{
		if($('.test_slider').length)
		{
			var testSlider = $('.test_slider');

			testSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:false,
				smartSpeed:1200,
				dots:true,
				nav:false
			});
		}
	}

	/* 

	5. Init Accordions

	*/

	function initAccordions()
	{
		if($('.accordion').length)
		{
			var accs = $('.accordion');

			accs.each(function()
			{
				var acc = $(this);

				if(acc.hasClass('active'))
				{
					var panel = $(acc.next());
					var panelH = panel.prop('scrollHeight') + "px";
					
					if(panel.css('max-height') == "0px")
					{
						panel.css('max-height', panel.prop('scrollHeight') + "px");
					}
					else
					{
						panel.css('max-height', "0px");
					} 
				}

				acc.on('click', function()
				{
					if(acc.hasClass('active'))
					{
						acc.removeClass('active');
						var panel = $(acc.next());
						var panelH = panel.prop('scrollHeight') + "px";
						
						if(panel.css('max-height') == "0px")
						{
							panel.css('max-height', panel.prop('scrollHeight') + "px");
						}
						else
						{
							panel.css('max-height', "0px");
						} 
					}
					else
					{
						acc.addClass('active');
						var panel = $(acc.next());
						var panelH = panel.prop('scrollHeight') + "px";
						
						if(panel.css('max-height') == "0px")
						{
							panel.css('max-height', panel.prop('scrollHeight') + "px");
						}
						else
						{
							panel.css('max-height', "0px");
						} 
					}
				});
			});
		}
	}
});