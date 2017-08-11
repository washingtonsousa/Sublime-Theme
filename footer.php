<div  id="mainFooter" class="container-fluid">


    <footer id="bottom_footer">
       
   <div class="container">  


<div class="row">



<div class="col-md-4 col-xs-12">

<?php if ( is_active_sidebar( 'footer_side_bar_1' ) ) : ?>


    <?php dynamic_sidebar( 'footer_side_bar_1' ); ?>

<?php endif; ?>

</div>

<div class="col-md-4 col-xs-12">

<?php if ( is_active_sidebar( 'footer_side_bar_2' ) ) : ?>

    <?php dynamic_sidebar( 'footer_side_bar_2' ); ?>

<?php endif; ?>

</div>


<div class="col-md-4 col-xs-12">

    <?php if ( is_active_sidebar( 'footer_side_bar_3' ) ) : ?>

    <?php dynamic_sidebar( 'footer_side_bar_3' ); ?>

<?php endif; ?>

</div>

</div>


<div class="row">  

<div class="col-md-12 col-xs-12">

<p> Developed by Washington de Sousa - <a href="http://wsxdevstudio.com.br"> WSX Dev Studio. </a></p>

</div>

</div>



</div>

</footer>

</div>
</div>

<?php wp_footer(); ?>

</body>

</html>