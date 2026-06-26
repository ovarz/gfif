<?php 
  $menu='Home';
  $site_title='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['GFI'].'template/inc/meta.php')?>
<?php require ($_SERVER['GFI'].'template/inc/header.php')?>
<div class="rancak-foundation">
  
  
  
  
  
<section class="section-default section-cover content-center">
  <div class="section-bg img-frame"></div>
  <div class="section-overlay"></div>
  <div class="section-gradient"></div>
  <div class="section-container">

    <div class="cover-content">
      <div class="cover-subtitle">Welcome to</div>
      <h1 data-aos="fade-up" data-aos-delay="50" class="text-title section-title cover-title"><?php echo $sitename; ?></h1>
      <h2 data-aos="fade-up" data-aos-delay="50" class="cover-subtitle">Developing Future Generations Through Football</h2>
      <div data-aos="fade-up" data-aos-delay="50" class="cover-action">
        <button class="btn">Read More</button>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-about content-center">
  <div class="section-container">

    <div class="about-frame">
      <div class="about-image content-center">
        <div data-aos="fade-up" data-aos-delay="50" class="about-image-frame img-frame thumb-loading">
          <img alt="About <?php echo $sitename; ?>" title="About <?php echo $sitename; ?>" class="lazyload" data-original="template/img/about.jpg">
        </div>
      </div>
      <div class="about-content">
        <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title about-title">About Us</h2>
        <h3 data-aos="fade-up" data-aos-delay="50" class="about-subtitle">
          <span>Football is More Than a Game</span> - It Builds Character, Creates Opportunities, and Changes Lives.
        </h3>
        <p data-aos="fade-up" data-aos-delay="50">The Grassroots Football Foundation was established in 2023 with a vision to use football as a powerful tool for youth development, education, and social impact.</p>
        <p data-aos="fade-up" data-aos-delay="50">We are committed to developing young players through structured football education, professional coaching, mentorship, and equal opportunities for children from all backgrounds. Our goal is to create a sustainable football ecosystem where every young talent has the opportunity to learn, grow, and pursue their dreams while developing both their football abilities and personal values.</p>
        <p data-aos="fade-up" data-aos-delay="50">We believe football is more than a game; it is a powerful platform to inspire growth, build character, and create positive impact. Through football, we empower children to discover their potential, develop responsibility and leadership, and become confident individuals who contribute to stronger communities and future generations.</p>
        <p data-aos="fade-up" data-aos-delay="50">Together, we build not only better players, but also stronger individuals and a brighter future through the power of football.</p>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-stats content-center">
  <div class="section-bg img-frame"></div>
  <div class="section-container">
    <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title stats-title">Engagement</h2>
    <h3 data-aos="fade-up" data-aos-delay="50" class="stats-subtitle">Established with a vision to use football as a powerful platform to create positive social impact, develop young individuals, and provide opportunities for children through the values and experiences of the sport.</h3>
    <div class="stats-detail">
      <?php 
        $stat_array = array();
        $stat_array[]=array(
          'stat_number'=>'20',
          'stat_label'=>'Branch',
        );
        $stat_array[]=array(
          'stat_number'=>'600',
          'stat_label'=>'Engagement Kids',
        );
        $stat_array[]=array(
          'stat_number'=>'10',
          'stat_label'=>'Partners',
        );
        foreach($stat_array as $stat_list){
      ?>
        <div class="stats-box">
          <div class="stats-number">+<span><?php echo($stat_list['stat_number'])?></span></div>
          <div class="stats-label"><?php echo($stat_list['stat_label'])?></div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
  
  
  
  
  
<section class="section-default section-impact content-center">
  <div class="section-container">

    <div class="about-frame">
      <div class="about-image content-center">
        <div class="about-image-frame img-frame thumb-loading">
          <img alt="Impact <?php echo $sitename; ?>" title="Impact <?php echo $sitename; ?>" class="lazyload" data-original="template/img/impact.jpg">
        </div>
      </div>
      <div class="about-content">
        <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title about-title">Football For Social Impact</h2>
        <h3 data-aos="fade-up" data-aos-delay="50" class="about-subtitle">
          Grassroots Football Foundation x Borussia M’gladbach Academy Indonesia x ISCO.
        </h3>
        <p data-aos="fade-up" data-aos-delay="50">Since 2024, Grassroots Football Foundation and Borussia M’gladbach Academy Indonesia, has partnered with ISCO to create a meaningful football development program focused on education, inclusion, and social impact.</p>
        <p data-aos="fade-up" data-aos-delay="50">Through this collaboration, we use football as a bridge to empower children, create hope, and develop future generations. Children from street communities were given the opportunity to experience football not only as a sport, but as a platform for learning, personal growth, and positive development.</p>
        <p data-aos="fade-up" data-aos-delay="50">Our program serve football coaching methods inspired by Borussia Academy’s development approach, participants had the opportunity to train, play, and grow together while discovering their potential both on and off the pitch. Combining football activities with educational support, mentorship, and character building, allowing children to develop confidence, teamwork, discipline, and a sense of belonging in a supportive environment.</p>
        <p data-aos="fade-up" data-aos-delay="50">The Foundation believes that football has the power to create opportunities, connect communities, and inspire young people to build a better future.</p>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-gallery content-center">
  <div class="section-container">

    <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title gallery-title">Gallery</h2>
    <div class="gallery-container">
      <div class="gallery-video">
        <div data-aos="fade-up" data-aos-delay="50" class="gallery-box video-frame thumb-loading" aria-video="gallery"></div>
      </div>
      <div class="gallery-image">
        <?php 
          $image_array = array();
          $image_array[]=array(
            'image_title'=>'Photo 1',
            'image_label'=>'1',
          );
          $image_array[]=array(
            'image_title'=>'Photo 2',
            'image_label'=>'2',
          );
          $image_array[]=array(
            'image_title'=>'Photo 3',
            'image_label'=>'3',
          );
          $image_array[]=array(
            'image_title'=>'Photo 4',
            'image_label'=>'4',
          );
          foreach($image_array as $image_list){
        ?>
          <button data-aos="fade-up" data-aos-delay="50" title="<?php echo($image_list['image_title'])?>" class="gallery-box img-frame thumb-loading open-gallery-popup" 
          aria-popup-button="<?php echo($image_list['image_label'])?>">
            <img alt="Photo <?php echo($image_list['image_title'])?>" title="Photo <?php echo($image_list['image_title'])?>" class="lazyload" 
            data-original="template/img/gallery/<?php echo($image_list['image_label'])?>.jpg">
          </button>
        <?php } ?>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
<section class="section-default section-ocean content-center">
  <div class="section-container">

    <div class="about-frame">
      <div class="about-image content-center">
        <div data-aos="fade-up" data-aos-delay="50" class="about-image-frame video-frame thumb-loading" aria-video="ocean"></div>
      </div>
      <div class="about-content">
        <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title about-title">Football for Ocean & Clean Earth Program</h2>
        <h3 data-aos="fade-up" data-aos-delay="50" class="about-subtitle">
          Grassroots Football Foundation X Borussia M'Gladbach Academy Indonesia
        </h3>
        <p data-aos="fade-up" data-aos-delay="50">The Football for Ocean & Clean Earth Program is a grassroots initiative by the Grassroots Football Foundation together with Borussia M’gladbach Academy Indonesia. It uses football as a powerful platform to raise awareness about ocean pollution, environmental protection, and the importance of maintaining a clean and sustainable earth for future generations.</p>
        <p data-aos="fade-up" data-aos-delay="50">Through football based activities, environmental education, and community engagement, the program introduces children to the importance of protecting nature in a practical and hands-on way. It helps them understand that environmental responsibility is not only something to learn in theory, but something to practice in everyday life.</p>
        <p data-aos="fade-up" data-aos-delay="50">A key part of this program is actively engaging children in real environmental action, including collecting and picking up garbage in their communities, school areas, and public spaces. This hands-on experience teaches them responsibility, teamwork, and respect for their surroundings while creating visible impact in their environment.</p>
        <p data-aos="fade-up" data-aos-delay="50">The program is designed to shape not only better football players, but also responsible young individuals who care about their communities and the future of the planet.</p>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-partner content-center">
  <div class="section-container">
    <div class="partner-wording">
      <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title partner-title">Be Our Patron</h2>
      <h3 data-aos="fade-up" data-aos-delay="50" class="partner-subtitle">Many children we work with come from communities where access to sports programs, safe spaces, and educational activities is limited.</h3>
    </div>
    <ul class="partner-split">
      <li data-aos="fade-up" data-aos-delay="50" class="partner-column">
        <div class="partner-column-title">With your support, we can:</div>
        <ul class="partner-column-list">
          <li class="partner-column-row">Provide free football training programs</li>
          <li class="partner-column-row">Supply equipment (balls, kits, cones, shoes)</li>
          <li class="partner-column-row">Organize community football and education events</li>
          <li class="partner-column-row">Expand outreach programs to more regions</li>
          <li class="partner-column-row">Support environmental and social awareness activities</li>
          <li class="partner-column-row">Train and empower local coaches and volunteers</li>
        </ul>
      </li>
      <li class="partner-separator"></li>
      <li data-aos="fade-up" data-aos-delay="50" class="partner-column">
        <div class="partner-column-title">We welcome partnerships from:</div>
        <ul class="partner-column-list">
          <li class="partner-column-row">Corporates (CSR programs)</li>
          <li class="partner-column-row">Foundations and NGOs</li>
          <li class="partner-column-row">Sports organizations</li>
          <li class="partner-column-row">Educational institutions</li>
          <li class="partner-column-row">Private donors and individuals</li>
          <li class="partner-column-row">Government Institutions</li>
        </ul>
      </li>
    </ul>
    <div class="partner-wording">
      <h4 data-aos="fade-up" data-aos-delay="50" class="partner-subtitle">Partnerships can be financial or in-kind (equipment, facilities, logistics, or expertise).</h4>
    </div>
    <div class="partner-display">
      <?php 
        $partner_array = array();
        $partner_array[]=array(
          'partner_title'=>'Borussia Mönchengladbach',
          'partner_logo'=>'mgladbach',
          'partner_link'=>'https://www.borussia.com/',
        );
        $partner_array[]=array(
          'partner_title'=>'Borussia Mönchengladbach Academy Indonesia',
          'partner_logo'=>'mgladbach-academy',
          'partner_link'=>'https://mgladbachacademy.id/',
        );
        $partner_array[]=array(
          'partner_title'=>'German Football Indonesia',
          'partner_logo'=>'gfi',
          'partner_link'=>'',
        );
        $partner_array[]=array(
          'partner_title'=>'ISCO Foundation',
          'partner_logo'=>'isco',
          'partner_link'=>'https://www.iscofoundation.or.id/',
        );
        $partner_array[]=array(
          'partner_title'=>'Henkel Indonesia',
          'partner_logo'=>'henkel',
          'partner_link'=>'https://www.henkel.co.id/in',
        );
        foreach($partner_array as $partner_list){
      ?>
        <a data-aos="fade-up" data-aos-delay="50" title="<?php echo($partner_list['partner_title'])?>" class="partner-display-box img-frame thumb-loading" 
        href="<?php echo($partner_list['partner_link'])?>" target="_blank">
          <img alt="Logo <?php echo($partner_list['partner_title'])?>" title="Logo <?php echo($partner_list['partner_title'])?>" class="lazyload" 
          data-original="template/img/partner/<?php echo($partner_list['partner_logo'])?>.png"/>
        </a>
      <?php } ?>
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="partner-wording">
      <h5 class="partner-subtitle">Every contribution helps us reach more children, strengthen communities, and create greater opportunities through football. Together, we can expand our impact and bring meaningful football experiences to more children across Indonesia.</h5>
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="partner-action content-center">
      <a title="Join Us" class="btn" href="mailto:contact@gfifoundation.org">Join Us</a>
    </div>
  </div>
</section>
  
  
  
  
  
<section class="section-default section-contact content-center">
  <div class="section-bg img-frame"></div>
  <div class="section-container">

    <div class="about-frame">
      <div class="about-image content-center">
        <div class="about-image-frame img-frame thumb-loading">
          <iframe title="HQ" class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8364913825385!2d106.66306797573216!3d-6.2852129615223875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb0018bb0c0f%3A0x9efbf23c8c2bb4ad!2sBorussia%20M%C3%B6nchengladbach%20Academy%20Indonesia%20Office%20%26%20Cafe!5e0!3m2!1sen!2sid!4v1782406209200!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
      </div>
      <div class="about-content contact-content">
        <h2 data-aos="fade-up" data-aos-delay="50" class="text-title section-title contact-title">Contact Us</h2>
        <?php 
          $contact_array = array();
          $contact_array[]=array(
            'contact_type'=>'div',
            'contact_title'=>'',
            'contact_link'=>'',
            'contact_icon'=>'location',
            'contact_label'=>'
              Grassroots Football Indonesia Foundation, <br/>
              Borussia Mönchengladbach Academy Indonesia Office & Cafe, <br/>
              Ruko BSD Junction Blok B. 31, JL. Pahlawan Seribu, Serpong, <br/>
              Tangerang Selatan, Banten 15322.
            ',
          );
          $contact_array[]=array(
            'contact_type'=>'a',
            'contact_title'=>'Email GFI Foundation',
            'contact_link'=>'mailto:contact@gfifoundation.org',
            'contact_icon'=>'footer-outline-mail',
            'contact_label'=>'contact@gfifoundation.org',
          );
          $contact_array[]=array(
            'contact_type'=>'a',
            'contact_title'=>'Whatsapp GFI Foundation',
            'contact_link'=>'https://api.whatsapp.com/send/?phone=6281118898205',
            'contact_icon'=>'footer-whatsapp',
            'contact_label'=>'62 811 1889 8205',
          );
          /*
          $contact_array[]=array(
            'contact_type'=>'a',
            'contact_title'=>'Instagram GFI Foundation',
            'contact_link'=>'https://www.instagram.com/',
            'contact_icon'=>'footer-outline-ig',
            'contact_label'=>'@loremipsum',
          );
          $contact_array[]=array(
            'contact_type'=>'a',
            'contact_title'=>'Youtube GFI Foundation',
            'contact_link'=>'https://www.youtube.com/',
            'contact_icon'=>'footer-youtube',
            'contact_label'=>'@loremipsum',
          );
          */
          foreach($contact_array as $contact_list){
        ?>
          <<?php echo($contact_list['contact_type'])?> data-aos="fade-up" data-aos-delay="50" title="<?php echo($contact_list['contact_title'])?>" class="contact-content-box" 
          href="<?php echo($contact_list['contact_link'])?>">
            <div class="ccb-left">
              <div class="ccb-icon"><?php require ($_SERVER['GFI'].'template/img/icon/'.$contact_list['contact_icon'].'.svg')?></div>
            </div>
            <div class="ccb-right">
              <div class="ccb-label"><?php echo($contact_list['contact_label'])?></div>
            </div>
          </<?php echo($contact_list['contact_type'])?>>
        <?php } ?>
      </div>
    </div>
  
  </div>
</section>





<?php require ($_SERVER['GFI'].'template/inc/footer.php')?>
<?php require ($_SERVER['GFI'].'template/inc/base-bottom.php')?>