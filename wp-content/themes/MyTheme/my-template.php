<?php
  /**
  * Template Name: Custom
  */
get_header(); ?>
<?php the_content(); ?>
<div class="content_profile">
    <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
