<?php get_header(); ?>

<section id="mainContent" >
     <div  id="wrapContent" class="container-fluid">

         <h3 class="alert alert-success">
<?php

if (get_query_var('year') != 0 && get_query_var('monthnum') != 0) {

$year     = get_query_var('year');
$month = get_query_var('monthnum');

_e('Posts from: ', 'wsxdevstudio');
echo $month."/".$year;
} else {
_e('Posts with the tag: ', 'wsxdevstudio');

$tag = get_query_var('tag');
echo $tag;
}

 

?>
</h3>


<div class="container">
<div class="row">


<div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>

</div>

<div id="wrap-right" class="col-md-8 col-xs-12">




          


<?php

if (have_posts()) : while(have_posts()) : ?>

<?php get_template_part("parts/content", "index"); ?>


<?php

endwhile;


 ?>


<?php get_template_part("parts/content", "controls"); ?>




<?php

else:

?>

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


