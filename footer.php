<footer class="footer">
  <div class="container">
    <div class="subscription footer__subscription">
      <h2 class="heading subscription__heading">Subscribe now and get 20% off</h2>
      <form action="send.php" method="POST" class="subscription__form">
        <input type="email" name="email" class="subscription__input" placeholder="Enter your email" required>
        <button class="button subscription__button" type="submit">Subscribe</button>
      </form>
    </div>
    <!-- /.subscription -->
    <hr class="hr-multicolored">
    <div class="menu footer__menu">
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">News</h3>

            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'News', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">Arts</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'Arts', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">Travel</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'Travel', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">Sports</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'Sports', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">Tech</h3>
            
            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'Tech', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
          <div class="menu__list footer__list">
            <h3 class="menu__title footer__title">Moneys</h3>
            <?php wp_nav_menu( [
              'theme_location'  => 'footer',
              'menu'            => 'Moneys', 
              'container'       => false, 
              'menu_class'      => 'menu__ul', 
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="menu__ul">%3$s</ul>',
              'depth'           => 1,
            ] ); ?>

          </div>
          <!-- /.menu__list footer__list -->
        </div>
        <!-- /.footer__menu -->
    <hr>
    <div class="footer-row">
      <div class="footer__logo"><img class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/icons/footer-logo.svg" alt="logo"></div>
      <ul class="contacts-menu footer__contacts-menu">
        <li class="contacts-menu__item"><a href="#" class="contacts-menu__link">contact us</a></li>
        <li class="contacts-menu__item"><a href="#" class="contacts-menu__link">work with us</a></li>
        <li class="contacts-menu__item"><a href="#" class="contacts-menu__link">advertise</a></li>
        <li class="contacts-menu__item"><a href="#" class="contacts-menu__link">your ad choise</a></li>
      </ul>
      <div class="socials footer__socials">
        <a target="_blank" href="<?php the_field("facebook_link", 11); ?>" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/facebook-social.jpg"
            alt="facebook"></a>
        <a target="_blank" href="<?php the_field("twitter_link", 11); ?>" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/twitter-social.jpg"
            alt="twitter"></a>
        <a target="_blank" href="<?php the_field("youtube_link", 11); ?>" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/youtube-social.jpg"
            alt="youtube"></a>
        <a target="_blank" href="<?php the_field("instagram_link", 11); ?>" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/instagram-social.jpg"
            alt="instagram"></a>
      </div>
    </div>
    <!-- /.footer-row -->
    <hr>
    <div class="copyright">
      <p class="copyright__description"><?php the_field("copyright_text", 11); ?></p>
      <span class="copyright__text"><?php the_field("copyright", 11); ?></span>
    </div>
    <!-- /.copyright -->
  </div>
  <!-- /.container -->
  <?php
  wp_footer();
  ?>
</footer>
<!-- /.footer -->