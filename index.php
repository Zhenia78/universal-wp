<?php
  get_header();
?>

<body>
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
              <span class="subject first-news__subject">cars</span>
              <h3 class="title btnhover first-news__title">
                <a href="#">The joy of replicas: A $ 5 million car for $ 50,000</a>
              </h3>
              <p class="text first-news__text">The 31-year-old self-taught engineer and former amateur racer spends
                his days building artful recreations of one of most iconic sports cars</p>
            </div>
            <div class="first-news__image"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/first-news-img.jpg"
                alt="first-news-image">
            </div>
            <hr>
            <a href="#">
              <div class="first-news-comment">
                <div class="avatar first-news-comment__avatar"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/user-2.jpg"
                    alt="Author:Jessica"></div>
                <h4 class="first-news-comment__name">Jessica Miller:</h4>
                <p class="first-news-comment__text">Even as the ride-hailing service’s future rememember</p>
                <span class="comments-number first-news-comment__number"><img 
                    src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comment">342</span>
              </div>
            </a>
          </div>
          <!-- /.first-news -->
          <div class="secondary-news three-day-news__secondary-news">
            <div class="secondary-news__popular-tag">Popular</div>
            <div class="secondary-news__info">
              <span class="subject secondary-news__subject">art & design</span>
              <h3 class="title btnhover secondary-news__title"><a href="#">Invisible ink: the weird world of tattoo
                  removal –
                  in pictures</a></h3>
              <a href="#">
                <div class="secondary-news-comment">
                  <div class="avatar secondary-news__avatar"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/user-2.jpg"
                      alt="Author:Sarah"></div>
                  <div>
                    <h4 class="secondary-news-comment__name">By Sarah Jenkins</h4>
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
              <img  class="fit-img third-news__image" src="<?php echo bloginfo('template_url');?>/assets/img/third-news-img.jpg" alt="third-news-image">
              <figcaption class="title btnhover third-news__title">200+ Doomed Cats Saved From Euthanization
              </figcaption>
            </figure>
          </a>
          <!-- /.third-news -->
          <a class="common-news three-day-news__common-news-1" href="#">
            <div>
              <h3 class="title common-news__title">Is Coffee Bad for Bones?</h3>
              <p class="text common-news__text">Coffee drinkers may excrete more calcium, but it doesn’t appear to
                weaken bones</p>
              <time datetime="2018-10-15 19:00" class="publication-date">Oct 15</time>
            </div>
          </a>
          <!-- /.common-news -->
          <a class="common-news three-day-news__common-news-2" href="#">
            <div>
              <h3 class="title common-news__title">What We Manufacture</h3>
              <p class="text common-news__text">A global history of the factory and the modern world that all should
                read</p>
              <time datetime="2018-10-14 19:00" class="publication-date">Oct 14</time>
            </div>
          </a>
          <!-- /.common-news -->
          <a class="common-news three-day-news__common-news-3" href="#">
            <div>
              <h3 class="title common-news__title">It’s a Stressful World</h3>
              <p class="text common-news__text">Can a cruise skeptic enjoy four days on the seas with his family and a
                bunch of princesses?</p>
              <time datetime="2018-10-14 19:00" class="publication-date">Oct 14</time>
            </div>
          </a>
          <!-- /.common-news -->
          <a class="common-news three-day-news__common-news-4" href="#">
            <div>
              <h3 class="title common-news__title">A Treat for Lemon Lovers</h3>
              <p class="text common-news__text">This tangerine, ginger and chocolate tart has verve, depth and a hint of
                spice</p>
              <time datetime="2018-10-13 19:00" class="publication-date">Oct 13</time>
            </div>
          </a>
          <!-- /.common-news -->
          <div class="news-column three-day-news__column">
            <h3 class="caption news-column__heading">columns</h3>
            <ul class="news-column__list">
              <li class="news-column__item">
                <h3 class="title btnhover news-column__title"><a href="#">Architecture is the thoughtful making of
                    space</a></h3>
                <div class="author">
                  <div class="avatar author__avatar"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/user-3.jpg"
                      alt="David"></div>
                  <div>
                    <h4 class="author__name">David Williams</h4>
                    <span class="author__subtitle">Architect</span>
                  </div>
                </div>
              </li>
              <li class="news-column__item">
                <h3 class="title btnhover news-column__title"><a href="#">The details are not the details. They make the
                    design.</a>
                </h3>
                <div class="author">
                  <div class="avatar author__avatar"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/user-4.jpg"
                      alt="Alexandra"></div>
                  <div>
                    <h4 class="author__name">Alexandra Green</h4>
                    <span class="author__subtitle">Interior designer</span>
                  </div>
                </div>
              </li>
              <li class="news-column__item">
                <h3 class="title btnhover news-column__title"><a href="#">Live life to the fullest, and focus on the
                    positive</a>
                </h3>
                <div class="author">
                  <div class="avatar author__avatar"><img  class="fit-img" src="<?php echo bloginfo('template_url');?>/assets/img/user-5.jpg" alt="img">
                  </div>
                  <div>
                    <h4 class="author__name">Olivia Thompson</h4>
                    <span class="author__subtitle">Coacher</span>
                  </div>
                </div>
              </li>
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
            <article class="weekly-news-article weekly-news-article-1 weekly-news__article">
              <span data-target="l-1"
                class="label btnhover weekly-news-article__label weekly-news-article__label-1"><img 
                  id="l-1" class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-1.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_blue weekly-news-article__subject">flights</span>
                <h3 class="title weekly-news-article__title"><a href="#">Passengers Suffer as Crowded Field
                    Puts
                    Pressure on
                    Europe’s Airlines</a></h3>
                <p class="text weekly-news-article__text">Weaker carriers have fallen by the wayside amid fierce
                  competition, while others have been hit by bad luck. The result: thousands of canceled flights.</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-08-06 20:00" class="publication-date">Aug 6</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">342</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">830</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
            <hr>
            <article class="weekly-news-article weekly-news-article-2 weekly-news__article">
              <span data-target="l-2" class="label btnhover weekly-news-article__label"><img  id="l-2"
                  class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-2.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_light-blue weekly-news-article__subject">food</span>
                <h3 class="title weekly-news-article__title"><a href="#">Three Courses, 20 Euros: The
                    Affordable Dining
                    Renaissance in Paris</a></h3>
                <p class="text weekly-news-article__text">The Los Angeles area, for all of its culinary diversity, has
                  not historically been thought of as a haven for bread lovers. The area has a reputation as a place
                  where gluten fears to tread.</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-10-07 12:00" class="publication-date">Oct 7</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">27</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">129</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
            <hr>
            <article class="weekly-news-article weekly-news-article-3 weekly-news__article">
              <span data-target="l-3" class="label btnhover weekly-news-article__label"><img  id="l-3"
                  class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-3.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_red weekly-news-article__subject">science</span>
                <h3 class="title weekly-news-article__title"><a href="#">Watch the High-Flying Physics of a
                    Plant’s
                    Exploding
                    Fruits</a></h3>
                <p class="text weekly-news-article__text">Three undergradute physics majors and their professor worked
                  out how the hairyflower wild petunia shoots tiny seeds more than 20 feet through the air</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-10-11 12:00" class="publication-date">Oct 11</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">30</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">284</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
            <hr>
            <article class="weekly-news-article weekly-news-article-4 weekly-news__article">
              <span data-target="l-4" class="label btnhover weekly-news-article__label"><img  id="l-4"
                  class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-4.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_light-blue weekly-news-article__subject">health</span>
                <h3 class="title weekly-news-article__title"><a href="#">How the Shape of Your Ears Affects
                    What You Hear</a></h3>
                <p class="text weekly-news-article__text">We’re able to locate sound because our brains grasp the
                  shape of our ears. When that shape changes, we need time and practice to adapt. Ears are a
                  peculiarly individual piece of anatomy.</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-10-19 15:00" class="publication-date">Oct 19</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">102</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">1,293</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
            <hr>
            <article class="weekly-news-article weekly-news-article-5 weekly-news__article">
              <span data-target="l-5" class="label btnhover weekly-news-article__label"><img  id="l-5"
                  class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-5.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_red weekly-news-article__subject">science</span>
                <h3 class="title weekly-news-article__title"><a href="#">Forests Protect the Climate. A Future
                    With More
                    Storms
                    Would Mean Trouble.</a></h3>
                <p class="text weekly-news-article__text">With an increase in extreme weather expected in the years to
                  come, forests could be changed permanently as the world continues to warm</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-10-22 11:00" class="publication-date">Oct 22</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">5</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">82</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
            <hr>
            <article class="weekly-news-article weekly-news-article-6 weekly-news__article">
              <span data-target="l-6" class="label btnhover weekly-news-article__label"><img  id="l-6"
                  class="fit-img label__icon" src="<?php echo bloginfo('template_url');?>/assets/img/icons/bookmark.svg" alt="label"></span>
              <div class="weekly-news-article__image"><img  class="fit-img"
                  src="<?php echo bloginfo('template_url');?>/assets/img/weekly-article-img-6.jpg" alt="img">
              </div>
              <div>
                <span class="subject subject_violet weekly-news-article__subject">art & design</span>
                <h3 class="title weekly-news-article__title"><a href="#">New Contemporary Institute
                    Reverberates in
                    Richmond’s
                    Historic Landscape</a></h3>
                <p class="text weekly-news-article__text">The center, which will open in April, takes a bold look at
                  race and other social issues that still resonate in the region as well as the nation. A new
                  Institute for Contemporary Art is set to open.</p>
                <footer class="weekly-news-article__footer">
                  <time datetime="2018-10-26 19:00" class="publication-date">Oct 26</time>
                  <button class="comments-number weekly-news-article__comments"><img 
                      src="<?php echo bloginfo('template_url');?>/assets/img/icons/comment-icon.svg" alt="comments" class="comment-icon">101</button><button
                    class="likes-number weekly-news-article__likes"><img  src="<?php echo bloginfo('template_url');?>/assets/img/icons/like-icon.svg"
                      alt="likes" class="like-icon">432</button>
                </footer>
              </div>
            </article>
            <!-- /.weekly-news-article -->
          </div>
          <!-- /.weekly-news__body -->
          <aside class="weekly-news__aside weekly-news-aside">
            <h3 class="caption weekly-news-aside__heading">Recommended for you</h3>
            <ul class="weekly-news-aside__list">
              <li class="weekly-news-aside__item weekly-news-aside__item-1">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-1.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Office Meetings Leave the Office</a></p>
                  <span class="publication-date">15 minuts ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-2">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-2.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Experimental Vocal Music in Brooklyn</a></p>
                  <span class="publication-date">32 minuts ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-3">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-3.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Google’s Influence Over Think Tanks</a></p>
                  <span class="publication-date">38 minuts ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-4">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-4.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Homes for Sale in NYC and Connecticut</a></p>
                  <span class="publication-date">53 minuts ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-5">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-5.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Are You There, Dad? It’s Me, Alice</a></p>
                  <span class="publication-date">1 hour ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-6">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-6.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">The New Punk Look: Lacy and Colorful</a></p>
                  <span class="publication-date">1 hour ago</span>
                </div>
              </li>
              <li class="weekly-news-aside__item weekly-news-aside__item-7">
                <div class="weekly-news-aside__image"><img  class="fit-img"
                    src="<?php echo bloginfo('template_url');?>/assets/img/weekly-news-aside-image-7.jpg" alt="img"></div>
                <div>
                  <p class="text weekly-news-aside__text"><a href="#">Sunday Best in Harlem and Brooklyn</a></p>
                  <span class="publication-date">2 hours ago</span>
                </div>
              </li>
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