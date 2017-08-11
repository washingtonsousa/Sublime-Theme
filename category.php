<?php get_header(); ?>


 <h3 class="alert alert-success"> <?php _e('Posts from category: ', 'wsxdevstudio'); single_cat_title(); ?> </h3>

<div class="container mainContent">
<div class="row">

<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>


</div>

<div id="wrap-right" class="col-md-8 col-xs-12">
<?php



if (have_posts()) : while(have_posts()) : ?>

<?php get_template_part("parts/content", "index");?>

<?php endwhile; ?>

<?php get_template_part("parts/content", "controls"); ?>

</div>

<?php else:  ?>

<div id="wrap-right" class="col-md-8 col-xs-12">
 <h1><?php _e('Nothing found', 'wsxdevstudio')?></h1>
</div>
 
<?php endif; ?>

  
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>


