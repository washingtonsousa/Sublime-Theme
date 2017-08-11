<?php get_header();



?>

<div class="container mainContent">
<div class="row">

<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>


</div>

<div id="wrap-right" class="col-md-8 col-xs-12 box">

 

<?php
 while ( have_posts() ) : the_post(); ?>
        
            <?php the_content(); ?> 
      

    <?php
    endwhile; 
  
    ?>

</div>
</div>
</div>
<?php get_footer(); 
?>