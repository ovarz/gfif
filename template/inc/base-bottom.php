<div class="rancak-popup" aria-popup-box="PopupDonate">
  <div class="rancak-popup-container content-center">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-box">
      
      <button title="Close" class="rancak-popup-close content-center">
        <?php require ($_SERVER['GFI'].'template/img/icon/close-popup.svg')?>
      </button>
      
      <div class="rancak-popup-content popup-donate">
        <div class="donate-qr">
          <div class="donate-qr-frame img-frame thumb-loading">
            <img alt="Donate QRIS" title="Donate QRIS" class="lazyload" data-original="template/img/qris.jpg">
          </div>
        </div>
        <div class="donate-content">
          <div class="donate-title text-title">Your generosity gives these children the opportunity to pursue their dreams.</div>
          <div class="donate-info">
            <p>By supporting their education and personal growth, you're helping open doors to new possibilities and giving them the confidence to build a brighter future. Your kindness creates opportunities that can have a lasting impact on their lives.</p>
            <p>
              For more information, please contact: 
              <a title="CS <?php echo $sitename; ?>" class="donate-cs" href="https://api.whatsapp.com/send/?phone=6281118898205" target="_blank">62 811 1889 8205</a>
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="template/css/hold.css?<?php echo $anticache;?>" media="print" onload="this.media='all'"/>
  <link rel="stylesheet" type="text/css" href="template/css/aos.css" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="template/js/lazysizes.min.js"></script>
<script defer rancak-hold="template/js/rancak.js?<?php echo $anticache;?>"></script>
<script>
  setTimeout(function() {
    window.scrollTo(0, 0);
  }, 100);
</script>
<script src="template/js/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>