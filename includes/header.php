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
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/elastislide.css" />

  <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
  
  <noscript>
    <style>
      .es-carousel ul{
        display:block;
      }
    </style>
  </noscript>
  <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
    <div class="rg-image-wrapper">
      {{if itemsCount > 1}}
        <div class="rg-image-nav">
          <a href="#" class="rg-image-nav-prev">Previous Image</a>
          <a href="#" class="rg-image-nav-next">Next Image</a>
        </div>
      {{/if}}
      <div class="rg-image"></div>
      <div class="rg-loading"></div>
      <div class="rg-caption-wrapper">
        <div class="rg-caption" style="display:none;">
          <p></p>
        </div>
      </div>
    </div>
  </script>
  <!-- scripts at bottom of page -->
  
</head>




<header>

<section class="wrapper">
  <h1><a href="index.php" title="" alt=""><img src="images/marcomori.png"></a></h1>

  <nav id="site-nav">

    <ul>
      <?php 
      $nav = array(
      'Hugo Boss Fragrance'  => 'page.php',
      'Lucozade Energy'   => 'index.php',
      'Lucozade Sport' => 'lucozade-sport.php',
      'Lucozade Sport NFU'  => 'lucozade-sport-nfu.php',
      'Personal' => 'personal.php',
      'Still Life' => 'still-life.php'
      );

      foreach($nav as $nav_title => $nav_link)
      {
          echo '<li><a '.($nav_link == basename($_SERVER['PHP_SELF']) ? 'class="selected"':'').' href="'.$nav_link.'">'.$nav_title.'</a></li>';
      }
      ?>
    </ul>

  </nav>
</section>

</header>

