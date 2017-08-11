<html <?php language_attributes(); ?>>

<head>

	

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<meta charset="<?php bloginfo( 'charset' ); ?>">



<title>  <?= bloginfo( 'name' ); ?> </title>

<?php wp_head();?>




<!-- customizable styles -->

<style type="text/css">

#breadcrumb_main {

border-bottom: 1px solid  <?= get_theme_mod("breadcrumb_border_color") ?>;
padding-left:50px !important;
padding-bottom:10px;
}



#mainMenu li > a {
color:<?=get_theme_mod("menu_anchor_color") ?>;

}


.widget-title {

border-radius:5px;
background-color: <?= get_theme_mod("wg_bg_title_color") ?>; 
color: <?= get_theme_mod("wg_title_color") ?> !important;
}
#breadcrumb_main li a:hover{

color:<?= get_theme_mod("anchor_breadcrumb_hover_color") ?>;

}

#breadcrumb_main li a{

color:<?= get_theme_mod("anchor_breadcrumb_color") ?>;

}

header.header_top {

background-color: <?= get_theme_mod("top_header_bg_color") ?>;

}

#bottom_footer {

	background-color: <?= get_theme_mod("foooter_bg_color") ?>;
	margin-top:50px;
	
	
}

a {

color: <?= get_theme_mod("anchors_color") ?>;

}

p, p > a {

font-size:16px;

}

.widget-content a {

	font-size:16px;
}

a:hover {

color: <?= get_theme_mod("anchors_hover_color") ?>;

}

</style>

</head>

<body <?php body_class(''); ?>>

<header class="header_top">


  <div class="container-fluid">  
<div class="container">

	<div class="row">
<div class="col-md-3  col-xs-12">
<?php if (wp_get_attachment_url(get_theme_mod('custom_logo')) != "") :?>

<a href="<?= home_url(); ?>"><img src="<?= wp_get_attachment_url(get_theme_mod('custom_logo')); ?>" class="img-logo"/> </a>


<?php  else : 

?> <a href="<?= home_url(); ?>" class="brand_custom">   <h1 class="title_top"> <?= get_bloginfo('name');?> </h1> </a>
<h5> <?= get_bloginfo('description');?> </h5>



<?php

endif;

?>
</div>


<div class="col-md-4 col-md-offset-1 col-xs-12 top-item" >




<?= get_search_form(); ?>




</div>


<div class="col-md-4 col-xs-12"  id="SocialMenuTop">

<?php do_action("socialNet"); ?>

</div>


<!-- closing containers divs -->

</div>
</div>
</div>

</header> <!-- Header section finished -->

<div class="container-fluid" id="menuWrap">
	<div class="container">

<div id="mobile_hamburguer_bar"> <i class="fa fa-bars big-icon" aria-hidden="true"></i>
 </div>

<?php

 wp_nav_menu( array (

'menu' => 'mainMenu',
'menu_id' => 'mainMenu',
'depth' => 2,
'container' => 'dropdown',
'menu_class' =>'menu_listing',
'theme_location' => 'primary',

) );

?>
</div>
</div>




<?php


	
do_action("breadcrumb");

 if (is_home()) {

 do_action("slider"); 

}


?>