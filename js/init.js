/*$(window).scroll(function () {
   if($(window).width() > 768)
   {
	  if ( $(this).scrollTop() > 0 && !$('header').hasClass('open') ) {
		$('header').addClass('open');
		$('header').slideDown();
	   } else if ( $(this).scrollTop() <= 0 ) {
		$('header').removeClass('open');
		$('header').slideUp();
	  }
   }
   else
   {
		$('header').addClass('open');
		$('header').slideDown();
   }
});
var animationspeed = 800;*/
/*
$('.anchor').click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
});
*/

$(function(){
	if(browser.isSafari())
		$("body").addClass("safari");

  $('.coverscroll').visualNav({
    link: 'a',
    targetAttr: 'href',
    selectedAppliedTo: 'a',
    selectedClass: 'active',
		contentClass: 'section',
		animationTime: 800
  });
	//$('.coverscroll a').smoothScroll()
/*
	if(!isMobile.any())
	{
		$('article.fadein').css("opacity", ".001").css("margin-top", "40px");
		$('article.fadein').waypoint({
			offset: '30%',
			handler: function(direction) {
				console.log('handling')
				var endopacity = 1;
				if(jQuery(this).hasClass("lazy"))
					endopacity = 0.3;
				jQuery(this).closest('article').delay(0).animate({opacity: endopacity, 'margin-top':'0px'}, animationspeed);
			}
		});
	}
*/
	var scrolltop = 0;
	$("header.global div.menu").on("click", function(){
		slideInLis($("nav"));
		$(".mobile").removeClass("fade");
		scrolltop = $(window).scrollTop();
		$("body").addClass("noscroll");
	});
	$(".mobile a").on("click", function(){
		$(".mobile").addClass("fade");
		$("body").removeClass("noscroll");
		$(window).scrollTop(scrolltop);
	});
	$(".popup .close a").on("click", function(){
		$(".popup").addClass("fade");
		$("body").removeClass("noscroll");
		$(window).scrollTop(scrolltop);
	});
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){
			$('header.global').addClass("sticky");
		}
		else{
			$('header.global').removeClass("sticky");
		}
	});

	$(".submitbutton").on("click", function() {
		var name = $(".name").val();
		var email = $(".email").val();
		var message = $(".message").val();
		if(name != "NAME" && email != "EMAIL" && message != "MESSAGE")
		{
      $.post( 'http://vikingstrategicmetals.com/v1/send-email.php', $('.contactform').serialize())
        .done(function( data ) {
          alert( "Data Loaded: " + data );
        });
		}
	});



	$(document).on('click', '.ripple', function(e) {
  var $rippleElement = $('<a class="ripple-effect" />'),
    $buttonElement = $(this),
    btnOffset = $buttonElement.offset(),
    xPos = e.pageX - btnOffset.left,
    yPos = e.pageY - btnOffset.top,
    size = parseInt(Math.min($buttonElement.height(), $buttonElement.width()) * 0.5),
    animateSize = parseInt(Math.max($buttonElement.width(), $buttonElement.height()) * Math.PI);

  $rippleElement
    .css({
      top: yPos,
      left: xPos,
      width: size,
      height: size,

      backgroundColor: $buttonElement.data("ripple-color")
    })
    .appendTo($buttonElement)
    .animate({
      width: animateSize,
      height: animateSize,
      opacity: 0
    }, 700, function() {
      $(this).remove();
    });
});


});

var isMobile = {
	Android: function() {
		return navigator.userAgent.indexOf('Android') > 0;
	},
	BlackBerry: function() {
		return navigator.userAgent.indexOf('BlackBerry') > 0;
	},
	iOS: function() {
		return navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('iPod') > 0;
	},
	Opera: function() {
		return navigator.userAgent.indexOf('Opera Mini') > 0;
	},
	Windows: function() {
		return navigator.userAgent.indexOf('IEMobile') > 0;
	},
	any: function() {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

var browser = {
	isChrome: function() {
		return /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
	},
	isSafari: function() {
		return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
	}
};


$(document).ready(function() {
	/* Every time the window is scrolled ... */
	$(window).scroll( function(){
	    /* Check the location of each desired element */
	    $('.fademe').each( function(i){
	        var bottom_of_object = $(this).offset().top + 50;// $(this).outerHeight() * .25;
	        var bottom_of_window = $(window).scrollTop() + $(window).height();

	        /* If the object is completely visible in the window, fade it it */
	        if( bottom_of_window > bottom_of_object ){
	            $(this).animate({'opacity':'1'},300);
	        }
 			});
	});
});


function slideInLis(parent)
{
	var delaytime = 0;
	if(!$(parent).hasClass("animatingLis"))
	{
      $(parent).addClass("animatingLis");
      $("li", parent).hide();
      $("li", parent).hide().each(function(index,obj){
        var self = $(this);
        setTimeout ( function(){ $(self).show().addClass("slideInLeft animated");}, delaytime);
        delaytime += 50;
      });

      setTimeout(function(){
	      $("li", parent).show();
	      $(".animated").removeClass("animated slideInLeft ");
	      $(parent).removeClass("animatingLis")
      },1500);
	}
}
