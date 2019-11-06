<div class="container">
  <div class="row">
    <div class="twelve columns">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container-class' => 'menu-footer'
        ));
      ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('middle-footer'); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <p>Site Created by Christie Knudson</p>
    </div>
  </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
