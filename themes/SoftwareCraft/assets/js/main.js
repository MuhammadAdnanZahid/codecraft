 var templateUrl = "<?php get_template_directory_uri(); ?>";

 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

$(document).ready(function($) {

	"use strict";

	$(window).stellar({
    responsive: false,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });

	// Scrollax
  $.Scrollax();


	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
	    responsive:{
	      0:{
	        items:1,
	        nav:false
	      },
	      600:{
	        items:1,
	        nav:false
	      },
	      1000:{
	        items:1,
	        nav:false
	      }
	    }
	   });
	};
	carousel();

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var burgerMenu = function() {

		$('.js-colorlib-nav-toggle').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			if( $('html').hasClass('menu-show') ) {
				$('html').removeClass('menu-show');
				$('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
			} else {
				$('html').addClass('menu-show');
				setTimeout(function(){
					$('#colorlib-main-nav > .js-colorlib-nav-toggle').addClass('show');
				}, 900);
			}
		})
	};
	burgerMenu();
	
	var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// magnific popup

// 		$(function() {
//     $('div.gimage-popup').magnificPopup({delegate: 'a', type: 'image' });
// });

	$('div.gimage-popup').magnificPopup({
    type: 'image',
    delegate: 'a',
    closeOnContentClick: true,
    closeBtnInside: true,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 100 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

   
   $('#appointment_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});
	$('#appointment_time').timepicker();

	var pageProgress = function() {
		$(window).scroll(function() {
	    var wintop = $(window).scrollTop(), docheight = $('.page').height(), winheight = $(window).height();
	    // console.log(wintop);
	    var totalScroll = (wintop/(docheight-winheight))*100;
	    // console.log("total scroll" + totalScroll);
	    $(".KW_progressBar").css("width",totalScroll+"%");
	  });

	};
	pageProgress();

	$('.home-carousel').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  autoplay:false,
  dots:false,
   navText:["<div class='nav-btn prev-slide' style='top:220px !important; left:60px;'><img src='"+tempdir+"/assets/homepage/left-arrow.png'  height=30></div>","<div class='nav-btn next-slide'  style='top:220px !important; left:60px;'><img src='"+tempdir+"/assets/homepage/right-arrow.png'  height=30></div>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:3
    }
  }
});

$('.brand-carousel').owlCarousel({
  loop:true,
  margin:10,
 autoplayTimeout: 1000,
  nav:true,
  autoplay:true,
  dots:false,
   navText:["<div class='nav-btn prev-slide'><img src='"+tempdir+"/assets/homepage/left-arrow.png'  height=30></div>","<div class='nav-btn next-slide'><img src='"+tempdir+"/assets/homepage/right-arrow.png'  height=30></div>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:4
    }
  }
});

$('.visioncaro').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  autoplay:false,
  dots:false,
   navText:["<div class='nav-btn prev-slide' style='top:220px !important; '><img src='"+tempdir+"/assets/homepage/left-arrow.png'  height=30></div>","<div class='nav-btn next-slide' style='top:220px !important;'><img src='"+tempdir+"/assets/homepage/right-arrow.png'  height=30></div>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});

$('.projectcaro').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  autoplay:false,
  dots:false,
   navText:["<div class='nav-btn prev-slide' style='top:250px !important; left:60px; '><img src='"+tempdir+"/assets/homepage/left-arrow.png'  height=30></div>","<div class='nav-btn next-slide' style='top:250px !important; left:60px;'><img src='"+tempdir+"/assets/homepage/right-arrow.png'  height=30></div>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});

$('.careercaro').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  autoplay:false,
  dots:false,
   navText:["<div class='nav-btn prev-slide'><img src='"+tempdir+"/assets/homepage/left-arrow.png'  height=30></div>","<div class='nav-btn next-slide'><img src='"+tempdir+"/assets/homepage/right-arrow.png'  height=30></div>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});





$(function(){
    
    var pagePositon = 0,
        sectionsSeclector = '.secscroll',
        $scrollItems = $(sectionsSeclector),
        offsetTolorence = 100,
        pageMaxPosition = $scrollItems.length - 1;
    
    //Map the sections:
    $scrollItems.each(function(index,ele) { $(ele).attr("debog",index).data("pos",index); });

    // Bind to scroll
    $(window).bind('scroll',upPos);
    
    //Move on click:
    $('#arrownext a').click(function(e){
        if ($(this).hasClass('next') && pagePositon+1 <= pageMaxPosition) {
            pagePositon++;
            $('html, body').stop().animate({ 
                  scrollTop: $scrollItems.eq(pagePositon).offset().top
            }, 200);
        }
    });

    //Move on click:
    $('#arrowprev a').click(function(e){
        if ($(this).hasClass('prev') && pagePositon-1 >= 0) {
            pagePositon--;
            $('html, body').stop().animate({ 
                  scrollTop: $scrollItems.eq(pagePositon).offset().top
              }, 200);
            return false;
        }
    });

    
    //Update position func:
    function upPos(){
       var fromTop = $(this).scrollTop();
       var $cur = null;
        $scrollItems.each(function(index,ele){
            if ($(ele).offset().top < fromTop + offsetTolorence) $cur = $(ele);
        });
       if ($cur != null && pagePositon != $cur.data('pos')) {
           pagePositon = $cur.data('pos');
       }                   
    }
    
});



});


// ACCORDION JS IN CAREER

function openCity(evt, cityName) {
	$(".tabcontent").hide();
    $(".tabcontent:first").show();
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


// Full Page Scrollify
// var scrollOffset = -5;
// $('#page').fullpage({
//     sectionSelector: '.secscroll',
//     scrollingSpeed: 1000,
//     controlArrows: true,
//     scrollBar: false,
//     offsetSections: scrollOffset,
//     // more options here
// });


// Scrollify attribute function for disable it on mobile

// afterResize: function() {
//              if( $(window).width() < 767) {
//               $.scrollify.disable()
//              }else{
              
//                $.scrollify.enable()
//              }
//              },

var scrollOffset = -5;
        $(function() {
          $.scrollify({
            section : ".secscroll",
            offset: scrollOffset,
            easing: "easeOutExpo",
			 target:"html,body",
			  overflowScroll:true,
			  interstitialSection: "footer",
            scrollSpeed: 800,
            scrollbars: true,
            setHeights: false,
            updateHash: false,
            touchScroll: false,
            

          });
        });

        $(window).resize(function() {
        var width = $(this).width();
        if(width < 1024) {
          $.scrollify.disable();
        } else {
          $.scrollify.enable();
        }
      });

      $(window).trigger('resize');


      // SEO ACCORDION

      const accordionTriggers = document.querySelectorAll('.accordion__item--trigger');

accordionTriggers.forEach((trigger) => {
  trigger.addEventListener('click', expandAccordion);
});

function expandAccordion(event) {
    const { target: targetElement } = event;
    const isPanelExpanded = targetElement.getAttribute('aria-expanded');
    
    collapseAllAccordions();
    
    if (isPanelExpanded === "false") {
        targetElement.setAttribute('aria-expanded', true);
    } else {
        targetElement.setAttribute('aria-expanded', false);
    }
}

function collapseAllAccordions() {
    accordionTriggers.forEach((trigger) => {
        trigger.setAttribute('aria-expanded', false);
    });
}


// Get A Quote

function openQuote() {
  document.getElementById("quote-Overlay").style.display = "block";
}

function closeQuote() {
  document.getElementById("quote-Overlay").style.display = "none";
}


// Schedule Meeting

function openMeeting() {
  document.getElementById("meeting-Overlay").style.display = "block";
}

function closeMeeting() {
  document.getElementById("meeting-Overlay").style.display = "none";
}

// Get Hire

function openApply() {
  document.getElementById("apply-Overlay").style.display = "block";
}

function closeApply() {
  document.getElementById("apply-Overlay").style.display = "none";
}

// Form Submission Response

function openResponse() {
  document.getElementById("quote-overlay").style.display = "block";
}

function closeResponse() {
  document.getElementById("quote-overlay").style.display = "none";
}


$(function(){
   //Hide all the sub menus
   $('.sub-menu').hide();
  $('li.menu-item-has-children').hover(function(){
   $('li.menu-item-has-children').children("ul.sub-menu").css({"display":"none"});
    return;
   });

   $("li:has(ul)").click(function(){
      //Find the child ul and slideToggle
      $(this).children("ul").slideToggle('fast');
      $(this).toggleClass("down");
   });
});

// ---------------- DM menu item with dely ------------------

// $('#menu-item-13413').click(function(){
//   setTimeout(function(){
//        window.location.href='https://software-craft.com/digital-marketing-services/';
//   },5000);
// });




 /*SVG IMAGE LOAD PROBLEM*/
   
//     $( window ).load(function() {
//   $('img').show();
// });


// (function()
// {
//   if( window.localStorage )
//   {
//     if( !localStorage.getItem('firstLoad') )
//     {
//       localStorage['firstLoad'] = true;
//       window.location.reload();
//     }  
//     else
//       localStorage.removeItem('firstLoad');
//   }
// })();