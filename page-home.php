<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="nine columns">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>

              <h2><?php the_title(); ?></h2>
              <?php the_content();
            }
          }
        ?>
      </div>
      <div class="three columns">
        <?php get_sidebar(); ?>

      </div>
    </div>
</div>

<?php get_footer(); ?>
