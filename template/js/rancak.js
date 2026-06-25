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
    if (entries[0].isIntersecting && !hasAnimated) {
      hasAnimated = true;
      $('.stats-number span').each(function() {
        var $this = $(this);
        var target = $this.attr('data-target');
        
        $({ Counter: 0 }).animate({ Counter: target }, {
          duration: 2000,
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



function lazyload_video() {
  var $videoElements = $('[aria-video]');
  if ($videoElements.length === 0) return;

  var observer = new IntersectionObserver(function(entries, observerInstance) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var $target = $(entry.target);
        var videoName = $target.attr('aria-video');
        if (videoName) {
          var videoHtml = '<video autoplay loop muted controls playsinline preload="none"><source src="template/img/' + videoName + '.mp4" type="video/mp4"></video>';
          $target.html(videoHtml);
        }
        observerInstance.unobserve(entry.target);
      }
    });
  }, {
    rootMargin: "0px 0px 0px 0px"
  });

  $videoElements.each(function() {
    observer.observe(this);
  });
}



function dynamic_gallery_popup(){
  $('.open-gallery-popup').click(function(e){
    e.preventDefault();
    
    var get_id = $(this).attr('aria-popup-button');
    var get_title = $(this).attr('title');

    var htmlString = `
      <div class="rancak-popup dynamic-popup" aria-popup-box="${get_id}" style="display:none;">
        <div class="rancak-popup-container content-center">
          <div class="rancak-popup-overlay"></div>
          <div class="rancak-popup-box">
            
            <button title="Close" class="rancak-popup-close content-center">
              <img src="template/img/icon/close-popup.svg" alt="Close">
            </button>
            
            <div class="rancak-popup-content">
              <div class="gallery-box img-frame thumb-loading">
                <img title="${get_title}" class="lazyload" data-original="template/img/gallery/${get_id}.jpg">
              </div>
            </div>
            
          </div>
        </div>
      </div>
    `;

    $('body').append(htmlString);
    $('.dynamic-popup .rancak-popup-close, .dynamic-popup .rancak-popup-overlay').click(function(){
      ClosePopup();
    });
    $('.dynamic-popup[aria-popup-box=' + get_id +']').slideToggle('fast');
  });
}



$(document).ready(function(){
  "use strict";
  open_sticky();
  change_lang();
  custom_password();
  all_scroll();
  countup_stats();
  lazyload_video();
  dynamic_gallery_popup();
});