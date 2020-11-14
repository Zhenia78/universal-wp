<?php
  get_header();
?>

<body class="index-body">
  <div class="wrapper">
    <main>
      <div class="todays-news">
        <div class="container">
          <div class="todays-news__wrapper">

            <?php 
              $posts = get_posts( array(
                'numberposts' => 4,
                'category_name'    => 'todays_news',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
              ) );
              
              foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <a href="<?php the_field('today_news_link'); ?>" class="todays-news__item">
                <h3 class="todays-news__title title"><?php the_field('today_news_heading'); ?></h3>
              <?php
                $todays_img = get_field('today_news_img');
                if (!empty($todays_img)):
                  ?>
                   <img src="<?php echo $todays_img[url] ?>" alt="<?php echo $todays_img[alt] ?>" class="fit-img todays-news__image" >
                <?php endif;?>
              </a>
              <?php
              }
              
              wp_reset_postdata(); // сброс
            ?>
          </div>
          <!-- /.todays-news__wrapper -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.todays-news -->

      <div class="container">
        <section class="tabs tabs_initial">
          <div class="tabs-body">

          <?php 
          $i = 1;
              $posts = get_posts( array(
                'numberposts' => 5,
                'category_name'    => 'recommendation_news',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
              ) );
              
              foreach( $posts as $post ){
                setup_postdata($post);
                
                ?>
                  <div id="tab-<?php echo $i; $i++; ?>"
                  class="tabs__block tabs-block tab-active"
                  style="
                  background-image: url(<?php the_field('recommendation_news_background'); ?>);
                  ">
              <div class="author tabs-block-author tabs-block__author">
                <div class="avatar author__avatar">
                <?php 
                  $recommendation_news_img = get_field('author_avatar');

                  if (!empty($recommendation_news_img )):
                    ?>
                    <img class="fit-img" src="<?php echo $recommendation_news_img[url];?>" alt="<?php echo $recommendation_news_img[alt];?>">
                    <?php
                    endif;
                ?>  

                </div>
                <div>
                  <h4 style="
                  <?php
                  $author_name_color = get_field('author_name_color');
                    if ($author_name_color === 'DARK'):
                      ?>
                      color: #000000
                      <?php
                    endif;
                  ?>
                  " 
                  class="author__name tabs-block-author__name">
                    <?php the_field('author_name'); ?>
                  </h4>
                  <span style="
                  <?php
                  $author_job_color = get_field('author_job_color');
                    if ($author_job_color === 'DARK'):
                      ?>
                      color: #000000
                      <?php
                    endif;
                  ?>
                  " 
                  class="author__subtitle tabs-block-author__subtitle"><?php the_field('author_job'); ?></span>
                </div>
              </div>
              <div class="tabs-block__information">
                <span class="subject tabs-block__subject"><?php the_field('recommendation_news_subject'); ?></span>
                <h2 style="
                  <?php
                  $recommendation_news_heading_color = get_field('recommendation_news_heading_color');
                    if ($recommendation_news_heading_color === 'DARK'):
                      ?>
                      color: #000000
                      <?php
                    endif;
                  ?>
                  " 
                  class="heading tabs-block__heading"><?php the_field('recommendation_news_heading'); ?></h2>
                <div class="tabs-block__additional-info">
                  <a href="<?php the_field('recommendation_news_link'); ?>" class="button btnhover tabs-block__button">Read more<img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/more-arrow.svg" alt="&gt;" class="button__icon"></a>
                      <?php 
                      $recommendation_news_video_checkbox = get_field('recommendation_news_video_checkbox');
                      if ($recommendation_news_video_checkbox === 'ON'):
                        ?>
                        <div class="video">
                          <a data-fancybox href="<?php the_field('recommendation_news_video_link'); ?>" class="video__button"><img 
                              src="<?php echo bloginfo('template_url');?>/assets/img/icons/play.svg" alt="img"></a>
                          <div class="video__information">
                            <h3 style="
                  <?php
                  $recommendation_news_video_title_color = get_field('recommendation_news_video_title_color');
                    if ($recommendation_news_video_title_color === 'DARK'):
                      ?>
                      color: #000000
                      <?php
                    endif;
                  ?>
                  "  
                  class="video__title"><?php the_field('recommendation_news_video_title'); ?></h3>
                            <span class="video__time">18:05</span>
                          </div>
                        </div>
                        <?php
                        endif;
                      ?>

                </div>
              </div>
            </div>
            <!-- /.tabs-block -->
              <?php
              }
              
              wp_reset_postdata(); // сброс
            ?>
          </div>
          <!-- /.tabs-body -->
          
          <nav class="tabs-items">
            <h3 class="caption tabs-items__recommendation">Recommended for you</h3>
            <ul class="tabs-items__list">
            <?php 
              $i = 1;
              $posts = get_posts( array(
                'numberposts' => 5,
                'category_name'    => 'recommendation_news',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
              ) );
              
              foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <li data-target="tab-<?php echo $i; ?>" class="tabs-item">
                <span class="subject tabs-item__subject-<?php echo $i; $i++; ?> tabs-item__title"><?php the_field('recommendation_news_subject'); ?></span>

                <?php 
                if (get_field('recommendation_news_video_checkbox') == "ON"){
                  ?>
                  <p class="text tabs-item__description tabs-item__description_one">
                <?php the_field('recommendation_news_heading'); ?>
                  <img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/play-button.svg" alt="play">
                </p>
                <img class="video-icon video-icon_hidden" src="<?php echo bloginfo('template_url');?>/assets/img/icons/play-button.svg" alt="play">
                <?php
                } else {
                  ?>
                  <p class="text tabs-item__description tabs-item__description_one">
                <?php the_field('recommendation_news_heading'); ?>
                </p>
                  <?php
                }
                ?>
                
              </li>
              <?php
              }
              
              wp_reset_postdata(); // сброс
            ?>
            </ul>
          </nav>
          <!-- /.tabs-items -->
        </section>
        <!-- /.tabs -->

        <section class="three-day-news">
          <div class="first-news three-day-news__first-news">
            <div class="first-news__info">
              <span class="subject first-news__subject"><?php the_field('three-day-news_first-news_subject'); ?></span>
              <h3 class="title btnhover first-news__title">
                <a href="#"><?php the_field('three-day-news_first-news_heading'); ?></a>
              </h3>
              <p class="text first-news__text"><?php the_field('three-day-news_first-news_subtitle'); ?></p>
            </div>
            <div class="first-news__image">
              <?php 
                $first_news_image = get_field('three-day-news_first-news_img');

                if (!empty($first_news_image)):
                  ?>
                  <img class="fit-img" src="<?php echo $first_news_image['url'];?>"
                alt="<?php echo $first_news_image['alt'];?>">
                <?php endif; ?>
            </div>
            <hr>
            <a href="#">
              <div class="first-news-comment">
                <div class="avatar first-news-comment__avatar"><?php 
                $first_news_image_avatar = get_field('three-day-news_first-news_author_avatar');

                if (!empty($first_news_image_avatar)):
                  ?>
                  <img class="fit-img" src="<?php echo $first_news_image_avatar['url'];?>"
                alt="<?php echo $first_news_image_avatar['alt'];?>">
                <?php endif; ?></div>
                <h4 class="first-news-comment__name"><?php the_field('three-day-news_first-news_author_name'); ?>:</h4>
                <p class="first-news-comment__text"><?php the_field('three-day-news_first-news_author_comment'); ?></p>
                <span class="comments-number first-news-comment__number"><img 
                    src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comment">342</span>
              </div>
            </a>
          </div>
          <!-- /.first-news -->
          <div class="secondary-news three-day-news__secondary-news" style="  background-image: url(<?php the_field('three-day-news_secondary-news_img'); ?>);">
            <div class="secondary-news__popular-tag">Popular</div>
            <div class="secondary-news__info">
              <span class="subject secondary-news__subject"><?php the_field('three-day-news_secondary-news_subject'); ?></span>
              <h3 class="title btnhover secondary-news__title"><a href="#"><?php the_field('three-day-news_secondary-news_heading'); ?></a></h3>
              <a href="#">
                <div class="secondary-news-comment">
                  <div class="avatar secondary-news__avatar"><?php 
                $secondary_news_image_avatar = get_field('three-day-news_secondary-news_author_avatar');

                if (!empty($secondary_news_image_avatar)):
                  ?>
                  <img class="fit-img" src="<?php echo $secondary_news_image_avatar['url'];?>"
                alt="<?php echo $secondary_news_image_avatar['alt'];?>">
                <?php endif; ?></div>
                  <div>
                    <h4 class="secondary-news-comment__name"><?php the_field('three-day-news_secondary-news_author_name'); ?></h4>
                    <div class="secondary-news-comment__info">
                      <time datetime="2018-09-26 19:00" class="publication-date secondary-news-comment__date">Sept
                        26</time>
                      <span class="comments-number secondary-news-comment__number"><img 
                          src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon-light.svg" alt="comments" class="comment-icon">342</span>
                      <span class="likes-number secondary-news-comment__likes"><img 
                          src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon-light.svg" alt="likes" class="like-icon">832</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- /.secondary-news -->
          <a class="three-day-news__third-news" href="#">
            <figure class="third-news">
            <?php 
                $three_day_news_image_avatar = get_field('three-day-news_third-news_img');

                if (!empty($three_day_news_image_avatar)):
                  ?>
                  <img class="fit-img third-news__image" src="<?php echo $three_day_news_image_avatar['url'];?>"
                alt="<?php echo $three_day_news_image_avatar['alt'];?>">
                <?php endif; ?>
              <figcaption class="title btnhover third-news__title"><?php the_field('three-day-news_third-news_heading'); ?>
              </figcaption>
            </figure>
          </a>
          <!-- /.third-news -->
          <?php 
          $i = 1;
            $posts = get_posts( array(
              'numberposts' => 4,
              'category_name'    => 'common_news',
              'orderby'     => 'rand',
              'order'       => 'ASC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
                ?>
                  <a class="common-news three-day-news__common-news-<?php echo $i; ?>" href="#">
                    <div>
                      <h3 class="title common-news__title"><?php the_title(); ?></h3>
                      <p class="text common-news__text"><?php the_field('common_news_text'); ?></p>
                      <time datetime="2018-10-15 19:00" class="publication-date">Oct 1<?php echo $i; $i++; ?></time>
                    </div>
                  </a>
                <?php
            }

            wp_reset_postdata(); // сброс
          ?>
         
          <!-- /.common-news -->
          <div class="news-column three-day-news__column">
            <h3 class="caption news-column__heading">columns</h3>
            <ul class="news-column__list">
            <?php 
          $i = 1;
            $posts = get_posts( array(
              'numberposts' => 3,
              'category_name'    => 'column_news',
              'orderby'     => 'rand',
              'order'       => 'ASC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
                ?>
                  <li class="news-column__item">
                <h3 class="title btnhover news-column__title"><a href="#"><?php the_title(); ?></a></h3>
                <div class="author">
                  <div class="avatar author__avatar"> <?php 
                $news_column_author_avatar = get_field('column_news_author_avatar');

                if (!empty($news_column_author_avatar)):
                  ?>
                  <img class="fit-img" src="<?php echo $news_column_author_avatar['url'];?>"
                alt="<?php echo $news_column_author_avatar['alt'];?>">
                <?php endif; ?>
                  </div>
                  <div>
                    <h4 class="author__name"><?php the_field('column_news_author_name'); ?></h4>
                    <span class="author__subtitle"><?php the_field('column_news_author_job'); ?></span>
                  </div>
                </div>
              </li>
                <?php
            }

            wp_reset_postdata(); // сброс
          ?>
            
            </ul>
            <a href="#" class="more news-column__more">Read more</a>
          </div>
          <!-- /.news-column -->
        </section>
        <!-- /.three-day-news -->
      </div>
      <!-- /.container -->

      <section class="headline-news" style="background-image: url(<?php the_field('headline_news_img'); ?>);">
        <div class="container">
          <div class="headline-news-wrapper">
            <h1 class="heading headline-news__heading"><?php the_field('headline_news'); ?></h1>
            <a href="<?php the_field('headline_news_link'); ?>" class="button btnhover">Read more<img 
                src="<?php echo bloginfo('template_url');?>/assets/img/icons/more-arrow.svg" alt="&gt;" class="button__icon"></a>
          </div>
          <!-- /.headline-news-wrapper -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.headline-news -->

      <div class="container">
        <div class="weekly-news">
          <div class="weekly-news__body">
          <?php
          $i = 1;
          // параметры по умолчанию
          $posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'weekly_news',
            'orderby'     => 'rand',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $posts as $post ){
            setup_postdata($post);
              ?>
               <article class="weekly-news-article weekly-news-article-<?php echo $i; ?> weekly-news__article">
              <span data-target="l-<?php echo $i; ?>"
                class="label btnhover weekly-news-article__label weekly-news-article__label-<?php echo $i; ?>"><img 
                  id="l-<?php echo $i; ?>" class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image">
              <?php
              $weekly_news_article_image = get_field('weekly_news_img');
              if (!empty($weekly_news_article_image)):
              ?>
               <img class="fit-img"
                  src="<?php echo $weekly_news_article_image['url']; ?>" alt="<?php echo $weekly_news_article_image['alt']; ?>">
              <?php endif; ?>
              </div>
              <div>
                <span class="subject subject_blue weekly-news-article__subject"><?php the_field('weekly_news_subject'); ?></span>
                <h3 class="title weekly-news-article__title"><a href="#"><?php the_title(); ?></a></h3>
                <p class="text weekly-news-article__text"><?php the_field('weekly_news_desription'); ?></p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-08-06 20:00" class="publication-date">Aug <?php echo $i; $i++; ?></time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">342</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">830</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
              <?php
          }

          wp_reset_postdata(); // сброс
          ?>
          </div>
          <!-- /.weekly-news__body -->
          <aside class="weekly-news__aside weekly-news-aside">
            <h3 class="caption weekly-news-aside__heading">Recommended for you</h3>
            <ul class="weekly-news-aside__list">
              <?php
              $i = 1;
              // параметры по умолчанию
              $posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'recommended_column_news',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts as $post ){
                setup_postdata($post);
                  ?>
              <li class="weekly-news-aside__item weekly-news-aside__item-<?php echo $i; $i++; ?>">
                <div class="weekly-news-aside__image">
                <?php
              $weekly_news_aside_image = get_field('recommended_column_news_img');
              if (!empty($weekly_news_aside_image)):
              ?>
                <img class="fit-img"
                  src="<?php echo $weekly_news_aside_image['url']; ?>" alt="<?php echo $weekly_news_aside_image['alt']; ?>">
              <?php endif; ?>
                </div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#"><?php the_title(); ?></a></p>
                  <span class="publication-date"><?php echo get_post_time('Y/m/d \a\t g:ia', true, null, false); ?></span>
                </div>
              </li>
                  <?php
              }

              wp_reset_postdata(); // сброс
              ?>
            </ul>
            <a href="#" class="more weekly-news-aside__more">Read more</a>
          </aside>
          <!-- /.weekly-news__aside -->
        </div>
        <!-- /.weekly-news -->
      </div>
      <!-- /.container -->

      <section class="hot-news">
        <div class="container">
          <div class="hot-news-wrapper">
            <div class="hot-news__swiper">
              <div class="swiper-container hot-news__swiper-container">
                <div class="swiper-wrapper hot-news__swiper-wrapper">
                  <div class="swiper-slide hot-news__swiper-slide">
                    <img  src="<?php echo bloginfo('template_url');?>/assets/img/swiper-1.jpg" alt="slide-img">
                    <span class="swiper-slide__hot-tag">Hot</span>
                    <div class="author hot-news-author hot-news__author">
                      <div class="avatar author__avatar hot-news__avatar"><img  class="fit-img"
                          src="<?php echo bloginfo('template_url');?>/assets/img/user-6.jpg" alt="img"></div>
                      <div>
                        <h4 class="author__name hot-news-author__name">By Sarah Jenkins</h4>
                        <span class="author__subtitle hot-news-author__subtitle">Photographer</span>
                      </div>
                    </div>
                    <h2 class="heading hot-news__heading">Readers' Choice winners: Your wine country favorites</h2>
                    <a href="#" class="button btnhover"><img  class="hot-news__photos-icon"
                        src="<?php echo bloginfo('template_url');?>/assets/img/icons/photo-icon.svg" alt="icon">Watch photos <span
                        class="hot-news__photos-num">26</span></a>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide hot-news__swiper-slide"> <img  src="<?php echo bloginfo('template_url');?>/assets/img/swiper-1.jpg"
                      alt="slide-img">
                    <div class="author hot-news-author hot-news__author">
                      <div class="avatar author__avatar hot-news__avatar"><img  class="fit-img"
                          src="<?php echo bloginfo('template_url');?>/assets/img/user-1.jpg" alt="img"></div>
                      <div>
                        <h4 class="author__name hot-news-author__name">David Williams</h4>
                        <span class="author__subtitle hot-news-author__subtitle">Architect</span>
                      </div>
                    </div>
                    <h2 class="heading hot-news__heading">Readers' Choice winners: Your wine country favorites</h2>
                    <a href="#" class="button btnhover"><img  class="hot-news__photos-icon"
                        src="<?php echo bloginfo('template_url');?>/assets/img/icons/photo-icon.svg" alt="icon">Watch photos <span
                        class="hot-news__photos-num">10</span></a>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide hot-news__swiper-slide"> <img  src="<?php echo bloginfo('template_url');?>/assets/img/swiper-1.jpg"
                      alt="slide-img">
                    <div class="author hot-news-author hot-news__author">
                      <div class="avatar author__avatar hot-news__avatar"><img  class="fit-img"
                          src="<?php echo bloginfo('template_url');?>/assets/img/user-3.jpg" alt="img"></div>
                      <div>
                        <h4 class="author__name hot-news-author__name">By Benjamin Turner</h4>
                        <span class="author__subtitle hot-news-author__subtitle">Traveler</span>
                      </div>
                    </div>
                    <h2 class="heading hot-news__heading">Readers' Choice winners: Your wine country favorites</h2>
                    <a href="#" class="button btnhover"><img  class="hot-news__photos-icon"
                        src="<?php echo bloginfo('template_url');?>/assets/img/icons/photo-icon.svg" alt="icon">Watch photos <span
                        class="hot-news__photos-num">16</span></a>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide hot-news__swiper-slide"> <img  src="<?php echo bloginfo('template_url');?>/assets/img/swiper-1.jpg"
                      alt="slide-img">
                    <div class="author hot-news-author hot-news__author">
                      <div class="avatar author__avatar hot-news__avatar"><img  class="fit-img"
                          src="<?php echo bloginfo('template_url');?>/assets/img/user-2.jpg" alt="img"></div>
                      <div>
                        <h4 class="author__name hot-news-author__name">Olivia Thompson</h4>
                        <span class="author__subtitle hot-news-author__subtitle">Coacher</span>
                      </div>
                    </div>
                    <h2 class="heading hot-news__heading">Readers' Choice winners: Your wine country favorites</h2>
                    <a href="#" class="button btnhover"><img  class="hot-news__photos-icon"
                        src="<?php echo bloginfo('template_url');?>/assets/img/icons/photo-icon.svg" alt="icon">Watch photos <span
                        class="hot-news__photos-num">20</span></a>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide hot-news__swiper-slide"> <img  src="<?php echo bloginfo('template_url');?>/assets/img/swiper-1.jpg"
                      alt="slide-img">
                    <div class="author hot-news-author hot-news__author">
                      <div class="avatar author__avatar hot-news__avatar"><img  class="fit-img"
                          src="<?php echo bloginfo('template_url');?>/assets/img/user-4.jpg" alt="img"></div>
                      <div>
                        <h4 class="author__name hot-news-author__name">Jessica Miller</h4>
                        <span class="author__subtitle hot-news-author__subtitle">Photographer</span>
                      </div>
                    </div>
                    <h2 class="heading hot-news__heading">Readers' Choice winners: Your wine country favorites</h2>
                    <a href="#" class="button btnhover"><img  class="hot-news__photos-icon"
                        src="<?php echo bloginfo('template_url');?>/assets/img/icons/photo-icon.svg" alt="icon">Watch photos <span
                        class="hot-news__photos-num">15</span></a>
                  </div>
                  <!-- /.swiper-slide -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="preview-block hot-news__preview">
              <div class="preview-block__info">
                <span class="subject preview-block__subject">careers</span>
                <h3 class="title preview-block__title">
                  <a href="#">Had a Job Interview but No Callback? Here’s What to Do</a>
                </h3>
                <p class="text preview-block__text">Try to understand the culture of the company where you want to work
                  and be authentic in your interview, experts emphasize</p>
                <a href="#" class="button btnhover">Read more<img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/more-arrow.svg"
                    alt="&gt;" class="button__icon"></a>
              </div>
              <div class="preview-block__image"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/preview-img.png"
                  alt="preview-block-image"></div>
            </div>
            <!-- /.preview-block -->
            <a href="#">
              <div class="common-news hot-news__common-news hot-news__common-news-1">
                <h3 class="title common-news__title">Is Coffee Bad for Bones?</h3>
                <p class="text common-news__text">Coffee drinkers may excrete more calcium, but it doesn’t appear to
                  weaken bones</p>
                <time datetime="2018-10-15 19:00" class="publication-date">Oct 15</time>
              </div>
            </a>
            <!-- /.common-news -->
            <a href="#">
              <div class="common-news hot-news__common-news hot-news__common-news-2">
                <h3 class="title common-news__title">What We Manufacture</h3>
                <p class="text common-news__text">A global history of the factory and the modern world that all should
                  read</p>
                <time datetime="2018-10-14 19:00" class="publication-date">Oct 14</time>
              </div>
            </a>
            <!-- /.common-news -->
          </div>
          <!-- /.hot-news-wrapper -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.hot-news -->
    </main>
    <?php
      get_footer();
    ?>
  </div>
  <?php
      wp_footer();
  ?>
</body>

</html>