<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
  <title>Marco Mori</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/columns.css">
  <link rel="stylesheet" href="css/style.css" />
  
  <!-- scripts at bottom of page -->

</head>


<body class="homepage ">
  

<section id="wrapper">

<?php include('includes/header.php'); ?>



  <div id="container" class="centered clearfix">


    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <a href=""><img src="images/hugo_hero_shot.jpg" class=""></a>
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/personal_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

    <div class="box photo col3 masonry-brick">
      <img src="images/hugo_hero_shot.jpg" class="">
    </div>

  </div>
 </section>




<footer id="site-footer">
  <?php include('includes/footer.php'); ?>
</footer>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="masonry.min.js"></script>
<script>
  window.onload = function() {
        
    var wall = new Masonry( document.getElementById('container'), {
      isFitWidth: 0,
      gutterWidth: 0
    });
    
  };
</script>

    
    
  </section> <!-- #content -->

</body>
</html>