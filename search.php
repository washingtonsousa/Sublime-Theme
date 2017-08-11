
<?php get_header(); ?>

<div id="wrap-content">

    <div class="container-fluid">
	
	 <?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count;  if ($count >= 1) { ?>
	
	<div class="row alert alert-success"> <div class="col-md-offset-1 col-md-11"> <h1>  

     <?php 
	
	echo $count;
	_e(' results for: ', 'wsxdevstudio'); the_search_query(); ?> </h1> 
	
	
</div> 

</div>


	
	<?php 
	 } else {
	
	?>
	
	<div class="row alert alert-danger"> <div class="col-md-offset-1 col-md-11"> <h1>  

     <?php 
	
	_e('No results for: ', 'wsxdevstudio'); the_search_query(); ?> </h1> 
	
	
</div> </div>
	
	<?php
	
	 }
	
	?>
	
  <?php get_header(); ?>

<section id="mainContent" >
     <div  id="wrapContent" class="container-fluid">
<div class="container">
<div class="row">


<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>

</div>

<div id="wrap-right" class="col-md-8 col-xs-12">



<?php

if (have_posts()) : while(have_posts()) :  ?>


<?php get_template_part("parts/content", "index"); ?>

<?php endwhile; ?>

<?php get_template_part("parts/content" , "controls") ?>

<?php else: ?>

<div class="flex-box">
 
<h1 class="post-title"><?php _e('No posts found', 'wsxdevstudio')?></h1>
 
</div>

<?php endif ?>



</div>
</div> <!-- right Col -->
</div> <!--main Row -->
</div> <!-- container div -->

</div> <!-- Wrap content -->



<?php get_footer(); ?>