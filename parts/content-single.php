<div class="box postsBox">

<?php the_post(); ?>
 
 <?php the_post_thumbnail(array(870, 640, true), array('class'=>'img-responsive thumbnail')); ?>






<div class="header">

<p>

 <?php edit_post_link('(Edit)'); ?> 


 <?php _e('Published at: ', 'wsxdevstudio'); the_time('d/M/Y'); ?> 

  <?php  echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> <span class="text-muted">  <?php _e(' By: ', 'wsxdevstudio'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' )); ?>"> <?php the_author();?> </a> 
  
  <a href="<?php echo get_comments_link( $post->ID ); ?>">
<?php
                printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'wsxdevstudio' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?></a>
  </p>   

</div>

<div class="single_inner_box">
<h1> <?php the_title(); ?> </h1>

   <?php the_content(); ?> 
          
</div>

</div>



 <?php comments_template(); ?>