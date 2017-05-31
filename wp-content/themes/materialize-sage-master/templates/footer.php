<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        
        <p class="grey-text text-lighten-4"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
      <div class="col l4 offset-l2 s12 white-text">
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <a class="grey-text text-lighten-4" href="<?php echo get_bloginfo( 'url' ); ?>"> &copy; <?php echo date("Y") ?> LOREM IPSUM</a>
    </div>
  </div>
</footer>
