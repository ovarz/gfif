function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-popup-button');
	$('.open-sticky[aria-popup-button=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup-button=' + get_id +']').removeClass('show-sticky');
    $('.rancak-popup[aria-popup-box=' + get_id +']').slideToggle('fast');
    $('.rancak-popup').not('[aria-popup-box=' + get_id +']').slideUp('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
    ClosePopup();
  });
}



function change_lang(){
  $('.choice-lang').click(function(){
    var get_lang = $(this).attr('aria-lang');
	$('body').removeClass();
	$('body').addClass('lang-' + get_lang);
	return false;
  });	
}



function custom_password(){
  $('.form-password .form-icon').click(function(){
    if($(this).is('.show-password')){
     $(this).removeClass('show-password').addClass('hide-password');
     $(this).parent().find(".form-field").attr("type","password");
    }else{
     $(this).removeClass('hide-password').addClass('show-password');
     $(this).parent().find(".form-field").attr("type","text");
    }
  });
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
    if(scroll_position >= 4){
      $('header').addClass("header-afterscroll");		
    }
    else{
      $('header').removeClass("header-afterscroll");
    }
  }); 
}



var parallaxSection = document.querySelector(".section-cover .section-bg");
function updateParallax() {
  if (parallaxSection) {
    var scrolled = window.pageYOffset;
    parallaxSection.style.backgroundPositionY = (scrolled * 0.4) + "px";
  }
}
updateParallax();
window.addEventListener("scroll", updateParallax);
var readMoreBtn = document.querySelector('button[title="Read More"]');
var targetSection = document.querySelector('.rancak-section-info');
if (readMoreBtn && targetSection) {
  readMoreBtn.addEventListener('click', function(e) {
    e.preventDefault();
    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
}



$(document).ready(function(){
  "use strict";
  open_sticky();
  change_lang();
  custom_password();
  all_scroll();
});