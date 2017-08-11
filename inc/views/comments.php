

<?php if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>

    <div class="container-fluid">
        <div class="row comment-row">
            <div class="col-md-2 col-xs-12" id="avatar_comment">
    
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args[50] ); ?>
        
    
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'wsxdevstudio' ); ?></em>
          <br />
    <?php endif; ?>

    
</div>
<div class="col-md-8 col-xs-12">
    
    <b> <?php printf( __( ' By: %s ', 'wsxdevstudio' ), get_comment_author_link() ); ?></b>
    
    <?php comment_text(); ?>


    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
        <?php
        /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>




                    </div> <!-- col -->
                    </div><!-- row -->
                    </div><!-- container -->

                    
    <?php endif; ?>
    <?php