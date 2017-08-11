<?php
/*
 */
if ( post_password_required() )
    return;
?>
 



<div id="comments" class="comments-area box">


    
 <?php comment_form(); 
  echo str_replace('class="comment-form"','class="comment-form form-control"', false);

   ?>
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'wsxdevstudio' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <ul class="comment-list">
            <?php
              wp_list_comments( 'type=comment&callback=themeListComments' );
            ?>
        </ul><!-- .comment-list -->
 
        <?php

      
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
       
            <?php _e( 'Comments Navigation', 'wsxdevstudio' ); ?>

            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wsxdevstudio' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wsxdevstudio' ) ); ?></div>


       
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments closed' , 'wsxdevstudio' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
   
 
</div><!-- #comments -->
 


 </div>