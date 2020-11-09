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
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Nation</a></li>
          <li class="menu__item footer__item"><a href="#">World</a></li>
          <li class="menu__item footer__item"><a href="#">Politics</a></li>
          <li class="menu__item footer__item"><a href="#">Solar Eclipse</a></li>
        </ul>
      </div>
      <!-- /.menu__list footer__list -->
      <div class="menu__list footer__list">
        <h3 class="menu__title footer__title">Arts</h3>
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Art & Design</a></li>
          <li class="menu__item footer__item"><a href="#">Movies</a></li>
          <li class="menu__item footer__item"><a href="#">People</a></li>
          <li class="menu__item footer__item"><a href="#">Video: Arts</a></li>
          <li class="menu__item footer__item"><a href="#">Theater</a></li>
        </ul>
      </div>
      <!-- /.menu__list footer__list -->
      <div class="menu__list footer__list">
        <h3 class="menu__title footer__title">Travel</h3>
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Destinations</a></li>
          <li class="menu__item footer__item"><a href="#">Flights</a></li>
          <li class="menu__item footer__item"><a href="#">Business Travel</a></li>
        </ul>
      </div>
      <!-- /.menu__list footer__list -->
      <div class="menu__list footer__list">
        <h3 class="menu__title footer__title">Sports</h3>
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Olympics</a></li>
          <li class="menu__item footer__item"><a href="#">Motor Sports</a></li>
          <li class="menu__item footer__item"><a href="#">Volleyball</a></li>
          <li class="menu__item footer__item"><a href="#">MMA</a></li>
          <li class="menu__item footer__item"><a href="#">Cycling</a></li>
        </ul>
      </div>
      <!-- /.menu__list footer__list -->
      <div class="menu__list footer__list">
        <h3 class="menu__title footer__title">Tech</h3>
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Tech</a></li>
          <li class="menu__item footer__item"><a href="#">Tech Columnists</a></li>
          <li class="menu__item footer__item"><a href="#">Tech Reviews</a></li>
          <li class="menu__item footer__item"><a href="#">Talking Tech</a></li>
        </ul>
      </div>
      <!-- /.menu__list footer__list -->
      <div class="menu__list footer__list">
        <h3 class="menu__title footer__title">Moneys</h3>
        <ul class="menu__ul">
          <li class="menu__item footer__item"><a href="#">Markets</a></li>
          <li class="menu__item footer__item"><a href="#">Business</a></li>
          <li class="menu__item footer__item"><a href="#">Personal Finance</a></li>
          <li class="menu__item footer__item"><a href="#">Retirement</a></li>
          <li class="menu__item footer__item"><a href="#">Careers</a></li>
        </ul>
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
        <a target="_blank" href="https://uk-ua.facebook.com/" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/facebook-social.jpg"
            alt="facebook"></a>
        <a target="_blank" href="https://twitter.com/?lang=uk" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/twitter-social.jpg"
            alt="twitter"></a>
        <a target="_blank" href="https://www.youtube.com/" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/youtube-social.jpg"
            alt="youtube"></a>
        <a target="_blank" href="https://www.instagram.com/" class="socials__link"><img src="<?php echo bloginfo('template_url');?>/assets/img/instagram-social.jpg"
            alt="instagram"></a>
      </div>
    </div>
    <!-- /.footer-row -->
    <hr>
    <div class="copyright">
      <p class="copyright__description">Universal’s business concept is to offer fashion and quality at the best price
        in a sustainable way. Universal has since it was founded in 2015 grown into one of the world's leading fashion
        companies. </p>
      <span class="copyright__text">© 2019 Universal UI Kit</span>
    </div>
    <!-- /.copyright -->
  </div>
  <!-- /.container -->
  <?php
  wp_footer();
  ?>
</footer>
<!-- /.footer -->