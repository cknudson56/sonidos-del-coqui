<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container head-margin-top">
  <div class="row">
    <div class="twelve columns">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-home'); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <?php the_content();
          }
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
