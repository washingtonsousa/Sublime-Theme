<?php get_header();
?>




<div class="container mainContent">

<div class="row">      


<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>


</div>

<div id="wrap-right" class="col-md-8 col-xs-12"> 

<div class="row">  

<div class="box" style="margin-bottom:20px">


<div class="header">

<picture><?php echo get_avatar(get_the_author_meta('ID'), 212); ?></picture>

<h1> <?php  the_author(); ?> </h1>



<p>   <?= __('Email:', 'wsxdevstudio'); ?>


<?= get_the_author_meta('email');  ?> </p> 

</div>

<div class="description">
 <h1> <?php $allsearch = &new WP_Query("showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; echo $count; _e(' posts from this author.', 'wsxdevstudio'); ?> </h1>
   
<p><?= get_the_author_meta('description'); ?> </p>

</div>
  
   </div>
  
</div> 

<?php



if (have_posts()) : while(have_posts()) : 


?>
 
  
  <?php get_template_part("parts/content", "index");?>



<?php endwhile; ?>


<?php get_template_part("parts/content" , "controls");  ?>




<?php else: ?>


<div id="wrap-right" class="col-md-8 col-xs-12">
 <h1><?php _e('Nothing found', 'wsxdevstudio')?></h1>
</div>
 

<?php endif; ?>
  
</div>    
</div>
</div>
</div>
</div>


<?php get_footer(); 
?>