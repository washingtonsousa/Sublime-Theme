<div class='container-fluid' id='breadcrumb_container'>

 <div class='container'>

 <ul id="breadcrumb_main">
   

 <?php   if (!is_home()) : ?>

 <li><a href="<?= get_option('home');?>"><i class="fa fa-home" aria-hidden="true"></i> <?=__('Home', 'wsxdevstudio');?>
  </a></li><li class="breadcrumb_separator"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </li>


  <?php if (is_category() || is_single()) : ?>
           
<?php $category = get_the_category(); ?>

<li><a href="<?=get_category_link( $category[0]->cat_ID )?>"><?=$category[0]->cat_name?></a></li>
<li class="breadcrumb_separator"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
<li><?=get_the_title()?></li>
 
<?php endif; ?>


<?php if (is_archive()) : ?>

<li><?=__('Archive from: ', 'wsxdevstudio'); the_time('F \/\ Y'); ?> </li>

<?php endif;?>         
        
<?php  if (is_page()) : ?>


<?php if($post->post_parent) : 

$anc = get_post_ancestors( $post->ID );
$title = get_the_title();

foreach ( $anc as $ancestor ) :

?> 
<li><a href="<?=get_permalink($ancestor)?>" title="<?=get_the_title($ancestor)?>"><?=get_the_title($ancestor)?></a></li> 


<li class="breadcrumb_separator"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>

<?php endforeach; ?>

<strong title="<?=$title?>"> <?=$title?></strong>';

<?php else : ?>

<?php $title = get_the_title(); ?>

<li><strong> <?=$title?></strong></li>



   <?php    
   
   endif; // post->parent 
   endif; // is_page
   
   ?>
        
<?php // Not in template format

    if (is_tag()) : echo single_tag_title(); endif;
    if (is_day()) : echo "<li>".__('Archive from', 'wsxdevstudio'); the_time('j \d\e F \d\e Y'); echo'</li>'; endif;
    if (is_year()) : echo "<li>".__('Archive from', 'wsxdevstudio'); the_time('Y'); echo'</li>'; endif;
    if (is_author()) : echo "<li>".__('Archive from', 'wsxdevstudio'); echo'</li>'; endif;
    if (isset($_GET['paged']) && !empty($_GET['paged'])) : echo "<li> ".__("Archive from blog: ", "wsxdevstudio"); echo'</li>'; endif;
    if (is_search()) : echo "<li>".__('Search results', 'wsxdevstudio'); echo'</li>'; endif;

?>


   <?php   else : ?> 

  <li><a href="<?= get_option('home');?>"><i class="fa fa-home" aria-hidden="true"></i> <?=__('Home', 'wsxdevstudio');?></a>

  <?php  endif; ?>

  </ul> </div> </div>