// /* Menu Mobile */
// $(function() {
//   $('nav#menu').mmenu({
//     extensions  : [ 'effect-slide-menu', 'pageshadow' ],
//     searchfield : false,
//     counters  : false,
//     navbar    : {
//       title   : 'Danh mục menu'
//     },
//     navbars   : [
//       {
//         position  : 'top',
//         content   : [ 'searchfield' ]
//       }, {
//         position  : 'top',
//         content   : [
//           'prev',
//           'title',
//           'close'
//         ]
//       }, {
//         position  : 'bottom',
//         content   : [ 
//         ]
//       }
//     ]
//   });
// });
// /* End Menu Mobile */
if($(".banner_home").length!=0){
	$('.banner_home').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
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
	})
}
if($(".sliderInfo").length!=0){
	$('.sliderInfo').owlCarousel({
	    center: true,
	    items:2,
	    nav:true,
	    navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
	    dots: false,
	    loop:true,
	    margin:50,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:3
	        }
	    }
	})
}
if($(".slider_doitac").length!=0){
	$('.slider_doitac').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
	    dots: false,
	    autoplay: true,
	    autoplayTimeout: 4000,
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
	})
}
if($(".count").length!=0){
var section = document.querySelector('.numbers');
var hasEntered = false;

window.addEventListener('scroll', (e) => {
	var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

	if (shouldAnimate && !hasEntered) {
  	hasEntered = true;
    
    $('.count').each(function () {
    	$(this).prop('Counter',0).animate({
        Counter: $(this).text()
    	}, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
   		});
    });

  }
});



}
$( "#button_show" ).click(function() {
$( "#item_hidden" ).toggle();
});

// $(".nav_custContent").hover(function() {
// 	$(this).addClass("active");
// }, function() {
// 	$(this).removeClass("active");
// });	

// $('.nav_custContent').on('mouseover', '> li', function(e) {
//     $(this).addClass("active");
// }).on('mouseout', '> li', function (e) {
//     $(this).removeClass("active");
// });

$('ul.nav li.dropdown').hover(function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });

