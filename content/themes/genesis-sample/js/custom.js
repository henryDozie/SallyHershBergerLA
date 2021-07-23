  
jQuery(document).ready(function(){
  jQuery('p:empty').detach();
})

var mySwiper = new Swiper ('.swiper-container-artists', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  spaceBetween: 0,
  centeredSlides: true,
  threshold: 50,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 480px
    1080: {
      slidesPerView: 2,
      spaceBetween: 65,
      centeredSlides: false,
    },

  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },  
})


jQuery(function($) {
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 0) {
        $(".site-header").addClass("scrolled");
    }
});
});

jQuery(function($) {
    var scroll = $(window).scrollTop();
     //>=, not <=
    if (scroll >= 0) {
        $(".site-header").css('background-color', '#1a1a1a');
    }
})

jQuery(function($) {
$(window).scroll(function() {    
        var top_offset = $(window).scrollTop();
        if (top_offset == 0) {
            $('.scrolled').removeClass('scrolled');
        }
});
});

jQuery('#responsive-menu-button').click(function(){
  if(!jQuery('#responsive-menu-button').hasClass('is-active')){
    jQuery('.site-header').addClass('scrolled');
  }
  else{
    jQuery('.site-header').removeClass('scrolled');
  }
})