<?php /*Template Name: Video-Top Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
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
