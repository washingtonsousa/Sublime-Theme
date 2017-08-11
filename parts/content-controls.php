


<?php

 global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { 
 
 
 ?>
 
 <footer id="Nav-controls" class="box">
 
 
                <div id="nav-below" class="navigation">

 <?php  if (previous_posts_link()) : ?>        <?php previous_posts_link(__( ' Newer Posts ', 'wsxdevstudio' )); ?><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php  endif; ?>

<?php  if (next_posts_link()) : ?>       <i class="fa fa-chevron-left" aria-hidden="true"></i> <?php  next_posts_link(__( ' Older Posts ', 'wsxdevstudio' )); ?> <?php  endif; ?>
                
       </div><!-- pagination controls -->


</footer>

<?php } wp_reset_postdata();  ?>  