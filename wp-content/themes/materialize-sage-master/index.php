<?php get_template_part('templates/head', 'header'); ?>



<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'single'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>