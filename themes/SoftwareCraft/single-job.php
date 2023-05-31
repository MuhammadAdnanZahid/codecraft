<?php get_header();?>


 <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template', 'jobdes' ); ?>

      <?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>