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
var readMoreBtn = document.querySelector('.cover-action button');
var targetSection = document.querySelector('.section-about');
if (readMoreBtn && targetSection) {
  readMoreBtn.addEventListener('click', function(e) {
    e.preventDefault();
    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
}



function countup_stats() {
  var $statsSection = $('.section-stats');
  if ($statsSection.length === 0) return;

  var hasAnimated = false;

  $('.stats-number span').each(function() {
    var targetValue = $(this).text();
    $(this).attr('data-target', targetValue);
    $(this).text('0');
  });

  var observer = new IntersectionObserver(function(entries) {
    // Mengecek apakah elemen sudah masuk ke dalam area observer
    if (entries[0].isIntersecting && !hasAnimated) {
      hasAnimated = true; // Mencegah animasi berjalan berkali-kali
      
      // Langkah 5: Jalankan animasi Count Up
      $('.stats-number span').each(function() {
        var $this = $(this);
        var target = $this.attr('data-target');
        
        $({ Counter: 0 }).animate({ Counter: target }, {
          duration: 2000, // Durasi animasi dalam milidetik (misal: 2000 = 2 detik)
          easing: 'swing',
          step: function(now) {
            $this.text(Math.ceil(now));
          }
        });
      });
    }
  }, {
    rootMargin: "0px 0px -30% 0px"
  });
  observer.observe($statsSection[0]);
}



function lazyload_ocean_video() {
  var $oceanSection = $('.section-ocean');
  if ($oceanSection.length === 0) return;

  var observer = new IntersectionObserver(function(entries, observerInstance) {
    // Terpicu ketika elemen target mulai masuk ke dalam layar dari bawah
    if (entries[0].isIntersecting) {
      var videoHtml = '<video autoplay loop muted controls playsinline preload="none"><source src="template/img/ocean.mp4" type="video/mp4"></video>';
      
      // Injeksi tag HTML video secara spesifik ke .about-image-frame di dalam .section-ocean
      $oceanSection.find('.about-image-frame').html(videoHtml);
      
      // Hentikan observer agar injeksi kode tidak berulang saat di-scroll kembali
      observerInstance.unobserve($oceanSection[0]);
    }
  }, {
    rootMargin: "0px 0px 0px 0px" // Akurat memantau ketika bagian atas div menyentuh batas bawah layar
  });

  observer.observe($oceanSection[0]);
}



$(document).ready(function(){
  "use strict";
  open_sticky();
  change_lang();
  custom_password();
  all_scroll();
  countup_stats();
  lazyload_ocean_video();
});