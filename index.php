<?php get_header(); ?>





     
<div class="container mainContent">

<div class="row">



<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>


</div>
          
<div id="wrap-right" class="col-md-8 col-xs-12">

<?php



if (have_posts()) : while(have_posts()) : 


?>


<?php get_template_part("parts/content", "index");?>

<?php endwhile; ?>

<?php get_template_part("parts/content", "controls");?> 

</div>
</div>
</div>
</div>
</div>

<?php else: ?>

<div id="wrap-right" class="col-md-8 col-xs-12">
 <h1><?php _e('Nothing found', 'wsxdevstudio')?></h1>
</div>
 
<?php endif ?>

<?php get_footer(); ?>