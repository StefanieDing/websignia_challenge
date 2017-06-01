<?php use Roots\Sage\Titles; ?>
<?php use Roots\Sage\Assets; ?>

  <div class="row">
    <div class="col s12 clear">
      <!-- img -->
     <!--  <img class="banner1" src=<?= Assets\asset_path($filename); ?> alt="banner1"> -->
     <img class="banner1" src="wp-content/themes/materialize-sage-master/assets/images/banner1.jpg" alt="banner1">
    </div>
  </div>

  <div class="row gray-block">
    <div class="col s12 center-align">
      <h3 class="smalltitle"><?= Titles\smalltitle(); ?></h3>
      <h2 class="quote">Lorem ipsum dolor sit atem, eu est summo scripserit. Mei cu quod vol uptua</h2>
    </div>
  </div>

  <!-- cateogories -->
  <?php get_template_part('templates/content-categories'); ?>


  <div class="row">
    <div class="col s12 clear">
      <!-- img -->
      <img class="banner2" src="wp-content/themes/materialize-sage-master/assets/images/banner2.jpg" alt="banner2">
    </div>
  </div>

  <div class="row">
    <div class="col s12 center-align">
      <h3 class="smalltitle"><?= Titles\smalltitle(); ?></h3>

      <!-- list -->
      <?php get_template_part('templates/content-list'); ?>
    </div>
  </div>

  <div class="row gray-block">
    <div class="col s12">
      <h2 class="quote">Mei cu quod vol uptua elaboraret. An wisi hen drerit pertinacia vis, ne eum saepe vive ndum interesset. Lobortis sapi ent em no usu</h2>
    </div>
  </div>

