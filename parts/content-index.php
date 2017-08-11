<div class="posts">
<div class="row">
    <div class="col-sm-12 col-xs-12 box">
        
    <div class="col-md-12 col-xs-12" style="margin-top:20px;">
        
<?php 



     the_post();

  if (has_post_thumbnail())  { 


?>



<a href="<?php the_permalink();  ?>"> <?php the_post_thumbnail(array(870, 640, true), array('class'=>'img-responsive thumbnail')); ?> </a> 

<?php

}?> 







<h1> <a href="<?php the_permalink();  ?>"><?php the_title(); ?> </a> </h1>

<p class="text-muted small"> <?php _e(' By:  ', 'wsxdevstudio'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' )); ?>">   <?php  echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>  <?php the_author();?> </a> 

<?php _e('at: ', 'wsxdevstudio'); the_time('d/M/Y'); ?> 
<a href="<?php echo get_comments_link( $post->ID ); ?>">
<?php
                printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'wsxdevstudio' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>

 <?php edit_post_link('(Edit)'); ?></a> </p>

<?php

the_excerpt();

  ?>


<b> <?php _e('Tags: ', 'wsxdevstudio'); echo "</b>"; 

$posttags = get_the_tags();

if ($posttags) {

foreach ($posttags as $tag)
    {
        echo "<a href='";
        echo get_tag_link($tag->term_id)."'>";
        echo $tag->name."</a>";
    } } else {

        _e('No tags', 'wsxdevstudio'); echo "</b>"; 
    } 
    
    
    ?>

<p>
  <a style="width:100%; margin-top:5px;"class="btn btn-primary" href="<?php the_permalink(); ?>"> <?php _e('Read more', 'wsxdevstudio'); ?> </a>
</p>






</div>
</div>
</div></div>