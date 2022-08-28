(function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(500).fadeOut(500);
		}
	}
	
	
	//Update Header Style + Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var topHeader = $('.header-top').innerHeight();
			var windowpos = $(window).scrollTop();
			if (windowpos >= topHeader) {
				$('.main-header').addClass('fixed-header');
				$('.scroll-to-top').fadeIn(300);
			} else {
				$('.main-header').removeClass('fixed-header');
				$('.scroll-to-top').fadeOut(300);
			}
		}
	}
	
	
	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
	}
	
	// twitter feed widget 
	function twitterFeedWidget() {
	  if ($('.twitter').length) {	  	
	  	var twitterWrapper = $('.twitter');	  		
	  	var twitterCount = twitterWrapper.data('twitter-query-count');
	  	var twitterName = twitterWrapper.data('twitter-name');
	  	var slideCondition = twitterWrapper.data('enable-slide');
	  	var slideCount = twitterWrapper.data('slide-count');
	    $.ajax({
			method: "POST",
			url: "inc/twitter/tweet-api.php",
			data: {
				count: twitterCount,
				name: twitterName,
				slide_condition: slideCondition,
				slide_count: slideCount
			}
		})
		.done(function(msg) {
			twitterWrapper.append(function () {
				return msg;
			});
		});
	  };
	}
	
	
	//Main Slider
	if($('.main-slider .tp-banner').length){

		jQuery('.main-slider .tp-banner').show().revolution({
		  delay:10000,
		  startwidth:1200,
		  startheight:780,
		  hideThumbs:600,
	
		  thumbWidth:80,
		  thumbHeight:50,
		  thumbAmount:5,
	
		  navigationType:"bullet",
		  navigationArrows:"0",
		  navigationStyle:"preview4",
	
		  touchenabled:"on",
		  onHoverStop:"off",
	
		  swipe_velocity: 0.7,
		  swipe_min_touches: 1,
		  swipe_max_touches: 1,
		  drag_block_vertical: false,
	
		  parallax:"mouse",
		  parallaxBgFreeze:"on",
		  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
	
		  keyboardNavigation:"off",
	
		  navigationHAlign:"center",
		  navigationVAlign:"bottom",
		  navigationHOffset:0,
		  navigationVOffset:20,
	
		  soloArrowLeftHalign:"left",
		  soloArrowLeftValign:"center",
		  soloArrowLeftHOffset:20,
		  soloArrowLeftVOffset:0,
	
		  soloArrowRightHalign:"right",
		  soloArrowRightValign:"center",
		  soloArrowRightHOffset:20,
		  soloArrowRightVOffset:0,
	
		  shadow:0,
		  fullWidth:"on",
		  fullScreen:"off",
	
		  spinner:"spinner4",
	
		  stopLoop:"off",
		  stopAfterLoops:-1,
		  stopAtSlide:-1,
	
		  shuffle:"off",
	
		  autoHeight:"off",
		  forceFullWidth:"on",
	
		  hideThumbsOnMobile:"on",
		  hideNavDelayOnMobile:1500,
		  hideBulletsOnMobile:"on",
		  hideArrowsOnMobile:"on",
		  hideThumbsUnderResolution:0,
	
		  hideSliderAtLimit:0,
		  hideCaptionAtLimit:0,
		  hideAllCaptionAtLilmit:0,
		  startWithSlide:0,
		  videoJsPath:"",
		  fullScreenOffsetContainer: ""
	  });
		
	}

	
	// Fact Counter
	function factCounter() {
		if($('.fact-counter').length){
			$('.fact-counter .column.animated').each(function() {
		
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);
					
				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}
				
			});
		}
	}

	//Jquery Knob animation fot Pie Charts 
	if($('.dial').length){
		$('.dial').appear(function(){
          var elm = $(this);
          var color = elm.attr('data-fgColor');  
          var perc = elm.attr('value');  
 
          elm.knob({ 
               'value': 0, 
                'min':0,
                'max':100,
                'skin':'tron',
                'readOnly':true,
                'thickness':0.15,
				'dynamicDraw': true,
				'displayInput':false
          });

          $({value: 0}).animate({ value: perc }, {
			  duration: 1000,
              easing: 'swing',
              progress: function () { elm.val(Math.ceil(this.value)).trigger('change');
              }
          });

          //circular progress bar color
          $(this).append(function() {
              elm.parent().parent().find('.circular-bar-content').css('color',color);
              elm.parent().parent().find('.circular-bar-content label').text(perc+'%');
          });

          },{accY: 20});
    }
	
	//Progress Bar
	if($('.progress-levels .progress-box .bar-fill').length){
		$(".progress-box .bar-fill").each(function() {
			var progressWidth = $(this).attr('data-percent');
			$(this).css('width',progressWidth+'%');
			$(this).parents('.bar').children('.percent').html(progressWidth+'%');
		});
	}
	
	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('href'));
			$('.tabs-box .tab-btn').removeClass('active');
			$(this).addClass('active');
			$('.tabs-box .tab').fadeOut(0);
			$('.tabs-box .tab').removeClass('active-tab');
			$(target).fadeIn(300);
			$(target).addClass('active-tab');
		});
		
	}

	//Accordions
	if($('.accordion-box').length){
		$('.accordion-box .acc-btn').on('click', function() {
		if($(this).hasClass('active')!==true){
				$('.accordion-box .acc-btn').removeClass('active');
			}
			
		if ($(this).next('.acc-content').is(':visible')){
				$(this).removeClass('active');
				$(this).next('.acc-content').slideUp(500);
			}
		else{
				$(this).addClass('active');
				$('.accordion-box .acc-content').slideUp(500);
				$(this).next('.acc-content').slideDown(500);	
			}
		});
	}

	//  Common CssJs
	$('[data-bg-color]').each(function() {
        $(this).css("cssText", "background: " + $(this).data("bg-color") + " !important;");
    });
    $('[data-bg-img]').each(function() {
        $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
    });
    $('[data-text-color]').each(function() {
        $(this).css('color', $(this).data("text-color"));
    });
    $('[data-font-size]').each(function() {
        $(this).css('font-size', $(this).data("font-size"));
    });
    $('[data-height]').each(function() {
        $(this).css('height', $(this).data("height"));
    });
    $('[data-border]').each(function() {
        $(this).css('border', $(this).data("border"));
    });
    $('[data-margin-top]').each(function() {
        $(this).css('margin-top', $(this).data("margin-top"));
    });
    $('[data-margin-left]').each(function() {
        $(this).css('margin-left', $(this).data("margin-left"));
    });
    $('[data-margin-bottom]').each(function() {
        $(this).css('margin-bottom', $(this).data("margin-bottom"));
    });
	
	
	//Testimonials Slider
	if ($('.testimonial-slider .slider').length) {
		$('.testimonial-slider .slider').bxSlider({
			adaptiveHeight: true,
			auto:true,
			controls: false,
			pause: 5000,
			speed: 500,
			pager: true,
			mode:'fade'
		});	
	}

	//Event Calendar
	function calendarEvent() {
	    if (typeof calendarEvents !== "undefined" ) {
	        $('#full-event-calendar').fullCalendar({
	            header: {
	                left: 'prev,next today',
	                center: 'title',
	                right: 'agendaDay,agendaWeek,month'
	            },
	            defaultDate: '2015-01-01',
	            selectable: true,
	            selectHelper: true,
	            select: function(start, end) {
	                var title = prompt('Event Title:');
	                var eventData;
	                if (title) {
	                    eventData = {
	                        title: title,
	                        start: start,
	                        end: end
	                    };
	                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
	                }
	                $('#calendar').fullCalendar('unselect');
	            },
	            editable: true,
	            eventLimit: true, // allow "more" link when too many events
	            events: calendarEvents
	        });
	    }
	}

	// Date Select
	function dateSelect() {
		if($(".datepicker").length) {
			$( ".datepicker" ).datepicker();
		};
	}

	// Time Picker
	function timeSelect() {
		if ($(".timepicker").length) {
			$(".timepicker").timepicker();
		}
	}

	// Time Picker
	function bgParallax() {
		if ($(".bg-parallax").length) {
		    $('#nav').localScroll(800);
		    $('.bg-parallax').parallax("50%", 0.5);
		}
	}

	//Update Default Banner to Fullscreen
	function fullScreenBanner() {
		if($('.window-size').length){
			var HeaderHeight = $('.main-header').height() - 25;
			var defBannerHeight = $('.window-size .auto-container').innerHeight();
			var windowHeight = $(window).height() - $('.header-top').height() - HeaderHeight;
			if (windowHeight >= defBannerHeight) {
				$('.window-size').css({'height':windowHeight,'min-height':windowHeight});
				$('.window-size .auto-container').css({'position':'absolute','height':windowHeight,'min-height':windowHeight,});
			} else {
				$('.window-size').css({'height':'auto','min-height':windowHeight});
				$('.window-size .auto-container').css({'min-height':windowHeight,'height':windowHeight});
			}
		}
	}
	
	
	//Sponsors Slider
	if ($('.sponsors-section .slider').length) {
		$('.sponsors-section .slider').owlCarousel({
			loop:true,
			margin:20,
			nav:false,
			autoplay: 5000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:5
				},
				1100:{
					items:6
				}
			}
		});    		
	}

	//Sponsors Slider
	if ($('.clients-carousel').length) {
	    $(".clients-carousel").owlCarousel({
	        rtl: false,
	        autoplay: true,
	        autoplayTimeout: 2000,
	        loop: true,
	        items: 1,
	        dots: true,
	        nav: false,
	        navText: [
	            '<i class="pe-7s-angle-left"></i>',
	            '<i class="pe-7s-angle-right"></i>'
	        ]
	    });	
	}
	
	if ($('.testimonial-carousel-inf').length) {
		    $('.testimonial-carousel-inf').each(function() {
			    var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
			    var data_nav_ex = ( $(this).data("nav") === undefined ) ? false: $(this).data("nav");
			    $(this).owlCarousel({
			        rtl: false,
			        autoplay: true,
			        autoplayTimeout: 4000,
			        loop: true,
			        margin: 15,
			        dots: false,
			        nav: true,
			        navText: [
			            '<i class="fa fa-angle-left"></i>',
			            '<i class="fa fa-angle-right"></i>'
			        ],
			        responsive: {
			            0: {
			                items: 1,
			                center: false
			            },
			            600: {
			                items: 1,
			                center: false
			            },
			            750: {
			                items: 1,
			                center: false
			            },
			            960: {
			                items: 1
			            },
			            1170: {
			                items: 1
			            },
			            1300: {
			                items: 1
			            }
			        }
			    });
			});   
	}

	//  owlCarosule 
	if ($('.owl-carousel-1col').length) {
	    $('.owl-carousel-1col').each(function() {
	        var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
	        var data_nav_ex = ( $(this).data("nav") === undefined ) ? false: $(this).data("nav");
	        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
	        $(this).owlCarousel({
	            rtl: false,
	            autoplay: true,
	            autoplayTimeout: data_duration,
	            loop: true,
	            items: 1,
	            dots: data_dots_ex,
	            nav: data_nav_ex,
	            navText: [
	                '<i class="fa fa-angle-left"></i>',
	                '<i class="fa fa-angle-right"></i>'
	            ]
	        });
	    });       
	}

	if ($('.owl-carousel-1col').length) {
	    $('.owl-carousel-1col').each(function() {
	        var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
	        var data_nav_ex = ( $(this).data("nav") === undefined ) ? false: $(this).data("nav");
	        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
	        $(this).owlCarousel({
	            rtl: false,
	            autoplay: true,
	            autoplayTimeout: data_duration,
	            loop: true,
	            items: 1,
	            dots: data_dots_ex,
	            nav: data_nav_ex,
	            navText: [
	                '<i class="fa fa-angle-left"></i>',
	                '<i class="fa fa-angle-right"></i>'
	            ]
	        });
	    });       
	}


	if ($('.owl-carousel-2col').length) {
	    $('.owl-carousel-2col').each(function() {
	        var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
	        var data_nav_ex = ( $(this).data("nav")=== undefined ) ? false: $(this).data("nav");
	        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
	        $(this).owlCarousel({
	            rtl: true,
	            autoplay: true,
	            autoplayTimeout: data_duration,
	            loop: true,
	            items: 2,
	            margin: 15,
	            dots: data_dots_ex,
	            nav: data_nav_ex,
	            navText: [
	                '<i class="fa fa-angle-left"></i>',
	                '<i class="fa fa-angle-right"></i>'
	            ],
	            responsive: {
	                0: {
	                    items: 1,
	                    center: false
	                },
	                600: {
	                    items: 1,
	                    center: false
	                },
	                750: {
	                    items: 2,
	                    center: false
	                },
	                960: {
	                    items: 2
	                },
	                1170: {
	                    items: 2
	                },
	                1300: {
	                    items: 2
	                }
	            }
	        });
	    });     
	}

	if ($('.owl-carousel-3col').length) {
	    $('.owl-carousel-3col').each(function() {
	        var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
	        var data_nav_ex = ( $(this).data("nav")=== undefined ) ? false: $(this).data("nav");
	        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
	        $(this).owlCarousel({
	            rtl: false,
	            autoplay: true,
	            autoplayTimeout: data_duration,
	            loop: true,
	            items: 3,
	            margin: 15,
	            dots: data_dots_ex,
	            nav: data_nav_ex,
	            navText: [
	                '<i class="fa fa-angle-left"></i>',
	                '<i class="fa fa-angle-right"></i>'
	            ],
	            responsive: {
	                0: {
	                    items: 1,
	                    center: false
	                },
	                600: {
	                    items: 1,
	                    center: false
	                },
	                750: {
	                    items: 2,
	                    center: false
	                },
	                960: {
	                    items: 2
	                },
	                1170: {
	                    items: 3
	                },
	                1300: {
	                    items: 3
	                }
	            }
	        });
	    });  
	}

	if ($('.owl-carousel-4col').length) {
	    $('.owl-carousel-4col').each(function() {
	        var data_dots_ex = ( $(this).data("dots") === undefined ) ? false: $(this).data("dots");
	        var data_nav_ex = ( $(this).data("nav")=== undefined ) ? false: $(this).data("nav");
	        var data_duration = ( $(this).data("duration") === undefined ) ? 4000: $(this).data("duration");
	        $(this).owlCarousel({
	            rtl: false,
	            autoplay: false,
	            autoplayTimeout: data_duration,
	            loop: true,
	            items: 4,
	            margin: 15,
	            dots: data_dots_ex,
	            nav: data_nav_ex,
	            navText: [
	                '<i class="fa fa-angle-left"></i>',
	                '<i class="fa fa-angle-right"></i>'
	            ],
	            responsive: {
	                0: {
	                    items: 1,
	                    center: false
	                },
	                600: {
	                    items: 1,
	                    center: false
	                },
	                750: {
	                    items: 2,
	                    center: false
	                },
	                960: {
	                    items: 3
	                },
	                1170: {
	                    items: 4
	                },
	                1300: {
	                    items: 4
	                }
	            }
	        });
	    });  
	}
	
	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox();
	}
	
	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	
	// Google Map Settings
	if($('#map-location').length){
		var map;
		 map = new GMaps({
			el: '#map-location',
			zoom: 14,
			scrollwheel:false,
			//Set Latitude and Longitude Here
			lat: -37.817085,
			lng: 144.955631
		  });
		  
		  //Add map Marker
		  map.addMarker({
			lat: -37.817085,
			lng: 144.955631,
			infoWindow: {
			  content: '<p style="text-align:center;"><strong>Envato</strong><br>Melbourne VIC 3000, Australia</p>'
			}
		 
		});
	}
	
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var HeaderHeight = $('.header-lower').height();
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top - HeaderHeight
			 }, 1000);
	
		});
	}
	
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

    function customTabProductPageTab () {
        if ($('.product-details-tab-title').length) {
            var tabWrap = $('.product-details-tab-content');
            var tabClicker = $('.product-details-tab-title ul li');
            
            tabWrap.children('div').hide();
            tabWrap.children('div').eq(0).show();
            tabClicker.on('click', function() {
                var tabName = $(this).data('tab-name');
                tabClicker.removeClass('active');
                $(this).addClass('active');
                var id = '#'+ tabName;
                tabWrap.children('div').not(id).hide();
                tabWrap.children('div'+id).fadeIn('500');
                return false;
            });        
        }
    }

/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).on('ready', function() {
		headerStyle();
		fullScreenBanner();
		customTabProductPageTab();
		calendarEvent();
		dateSelect();
		timeSelect();
		bgParallax();
	});

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
		factCounter();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		fullScreenBanner();
		twitterFeedWidget()
	});
	

/* ==========================================================================
   When Window is resizing, do
   ========================================================================== */
	
	$(window).on('resize', function() {
		fullScreenBanner();
	});
	

})(window.jQuery);