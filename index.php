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
      <h1 class="text-title section-title cover-title"><?php echo $sitename; ?></h1>
      <h2 class="cover-subtitle">Developing Future Generations Through Football</h2>
      <div class="cover-action">
        <button class="btn">Read More</button>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-about content-center">
  <div class="section-container">

    <div class="about-frame">
      <div class="about-image content-center">
        <div class="about-image-frame img-frame thumb-loading">
          <img title="About" class="lazyload" data-original="template/img/about.jpg">
        </div>
      </div>
      <div class="about-content">
        <h2 class="text-title section-title about-title">About Us</h2>
        <h3 class="about-subtitle">
          <span>Football is More Than a Game</span> - It Builds Character, Creates Opportunities, and Changes Lives.
        </h3>
        <p>The Grassroots Football Foundation was established in 2023 with a vision to use football as a powerful tool for youth development, education, and social impact.</p>
        <p>We are committed to developing young players through structured football education, professional coaching, mentorship, and equal opportunities for children from all backgrounds. Our goal is to create a sustainable football ecosystem where every young talent has the opportunity to learn, grow, and pursue their dreams while developing both their football abilities and personal values.</p>
        <p>We believe football is more than a game; it is a powerful platform to inspire growth, build character, and create positive impact. Through football, we empower children to discover their potential, develop responsibility and leadership, and become confident individuals who contribute to stronger communities and future generations.</p>
        <p>Together, we build not only better players, but also stronger individuals and a brighter future through the power of football.</p>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-stats content-center">
  <div class="section-bg img-frame"></div>
  <div class="section-container">
    <h2 class="text-title section-title stats-title">Engagement</h2>
    <h3 class="stats-subtitle">Established with a vision to use football as a powerful platform to create positive social impact, develop young individuals, and provide opportunities for children through the values and experiences of the sport.</h3>
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
          <img title="About" class="lazyload" data-original="template/img/impact.jpg">
        </div>
      </div>
      <div class="about-content">
        <h2 class="text-title section-title about-title">Football For Social Impact</h2>
        <h3 class="about-subtitle">
          Grassroots Football Foundation x Borussia M’gladbach Academy Indonesia x ISCO.
        </h3>
        <p>Since 2024, Grassroots Football Foundation and Borussia M’gladbach Academy Indonesia, has partnered with ISCO to create a meaningful football development program focused on education, inclusion, and social impact.</p>
        <p>Through this collaboration, we use football as a bridge to empower children, create hope, and develop future generations. Children from street communities were given the opportunity to experience football not only as a sport, but as a platform for learning, personal growth, and positive development.</p>
        <p>Our program serve football coaching methods inspired by Borussia Academy’s development approach, participants had the opportunity to train, play, and grow together while discovering their potential both on and off the pitch. Combining football activities with educational support, mentorship, and character building, allowing children to develop confidence, teamwork, discipline, and a sense of belonging in a supportive environment.</p>
        <p>The Foundation believes that football has the power to create opportunities, connect communities, and inspire young people to build a better future.</p>
      </div>
    </div>
  
  </div>
</section>





<?php require ($_SERVER['GFI'].'template/inc/footer.php')?>
<?php require ($_SERVER['GFI'].'template/inc/base-bottom.php')?>