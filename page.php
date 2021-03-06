<?php get_header(); ?>

<div class="head-margin-top">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="post-feature">
          <?php the_post_thumbnail(); ?>
        </div> <?
      }
    }
  ?>
</div>

<div class="container">
  <div class="row section-margins">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <h2 class="center-text section-margins"><?php the_title(); ?></h2>
            <?php the_content();
          }
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
