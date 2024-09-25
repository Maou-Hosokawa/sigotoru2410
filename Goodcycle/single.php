<?php get_header(); ?>


<div class="single">

<article class="way">
<div class="contents">

<h1>Good Cycling NEWS</h1>
        <section class="post_detail">
        <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>
          <p><?php the_tags( ); ?></p>
        <?php endwhile; ?>
        
        <a class="back" href="<?php echo home_url( '/' ); ?>">戻る</a>


        <div class="post_paging">
          <ul>
            <?php if (get_previous_post()) : ?>
              <li class="paging-prev"><?php previous_post_link('&lt;%link', '前の記事へ'); ?></li>
            <?php else : ?>
              <li class="paging-prev"><span>&lt;</span>前の記事へ</li>
            <?php endif; ?>
            <li><p class="category"><?php the_category( ); ?></p></li>
            <?php if (get_next_post()) : ?>
              <li class="paging-next"><?php next_post_link('%link&gt;', '次の記事へ'); ?></li>
            <?php else : ?>
              <li class="paging-next">次の記事へ<span>&gt;</span></li>
            <?php endif; ?>
          </ul>
          </div>
          </section>

</div>
<div class="road"></div>
</article>

</div>
<?php get_footer(); ?>