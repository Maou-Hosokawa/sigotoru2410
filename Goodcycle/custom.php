<?php get_header(); ?>
<main class="single">

        <section class="post_detail">
        <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>
          <p><?php the_category( ); ?></p>
          <p><?php the_tags( ); ?></p>
        <?php endwhile; ?>

        

        <div class="post_paging">
          <ul>
            <?php if (get_previous_post()) : ?>
              <li class="paging-prev"><?php previous_post_link('&lt;%link', '前の記事へ'); ?></li>
            <?php else : ?>
              <li class="paging-prev"><span>&lt;</span>前の記事へ</li>
            <?php endif; ?>
            <li><a href="<?php echo esc_url(home_url('/arts/')); ?>" class="to-news-archive">お知らせ一覧</a></li>
            <?php if (get_next_post()) : ?>
              <li class="paging-next"><?php next_post_link('%link&gt;', '次の記事へ'); ?></li>
            <?php else : ?>
              <li class="paging-next">次の記事へ<span>&gt;</span></li>
            <?php endif; ?>
          </ul>
          </div>
          </section>

</main>
<?php get_footer(); ?>