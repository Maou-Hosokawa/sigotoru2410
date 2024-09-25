<?php get_header(); ?>


  <article class="way">
  <div class="contents">
      <section id="news-main">
        <div class="news-main-inner">
          <div id="news-title">
          <?php
            $cat = get_the_category();
            $catslug = $cat[0]->slug;
            $catname = $cat[0]->cat_name;
            ?>
          <p class="text-uppercase">TOP > <?php echo $catslug; ?></p>

            <h1 class="text-uppercase">
              <?php echo $catname; ?>
            </h1>

          </div>
        </div>
      </section>

      <section class="news-archive">
        <div class="news-archive-inner">
          <ul class="news-archive-list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- 繰り返したい内容　ここから -->
                <li class="news-archive-item">
                  <div class="news-archive-body">
                    <h2 class="news-archive-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="news-archive-time"><?php echo get_post_time('Y年n月j日'); ?></p>

                    <p class="news-archive-read">
                      <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
                    </p>
                  </div>
                </li>
                <!-- 繰り返したい内容　ここまで -->
              <?php endwhile; ?>
            <?php else : ?>
              <p>まだ投稿はありません。</p>
            <?php endif; ?>
          </ul>
        </div>
        <div class="news-archive-pagination">
          <?php
          $args = array(
            'mid_size' => 1,
            'prev_text' => '&lt;&lt;前へ',
            'next_text' => '次へ&gt;&gt;',
            'screen_reader_text' => ' ',
          );
          the_posts_pagination($args);
          ?>
        </div>
      </section>
    </div>
    <div class="road"></div>
    </article>

<?php get_footer(); ?>