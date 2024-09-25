
<footer>
    <div id="footer-logo">
      <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ロゴ"></a>
    </div>
    <p class="footer-text">SNSも更新中！</p>
    <div id="sns-footer">
      <div class="sns-btns">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/button-ins.png" alt="instagramのリンク"></a>
        <a href=""><img class="ftyt" src="<?php echo get_template_directory_uri(); ?>/images/button-line.png" alt="Lineのリンク"></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/button-x.png" alt="Xのリンク"></a>
      </div>
      <p class="footer-text">&copy;<?php echo date('Y'); ?> GoodCycle, All Rights Reserved. <span></p>
    </div>
  </footer>
  </div>

  <?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
</body>
</html>
