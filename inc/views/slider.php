<div id="slider" class="carousel slide" data-ride="carousel">

 
<div class="carousel-inner">

<?php


$slidesWrap = 1;


foreach ($slides as $slide) :

?>

  
    <div class="item <?php if ($slidesWrap == 1) { echo "active";} ?>">

<img src="<?=$slide["url"] ?>"  />

<div class="carousel-caption">
        <h1><?=$slide["title"]?></h1>
        <p><?= $slide["caption"]?></p> <?php if ($slide["link"]) :?>
        <p><a href="<?= $slide['link'] ?>" class="btn btn-lg innerLink"> <?php _e("Checkout!", "wsxdevstudio");?></a></p>
<?php endif; ?>
      </div>

</div>

<?php $slidesWrap++; ?>

<?php endforeach; ?>


</div>
  <!-- Left and right controls -->

 <a class="left carousel-control" href="#slider" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>



</div>