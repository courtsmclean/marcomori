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


<header>
<section class="wrapper">
  <h1>Marco Mori</h1>

  <nav id="site-nav">
    
    <ul>
      <?php 
      $nav = array(
      'Hugo Boss Fragrance'  => 'index.php',
      'Lucozade Energy'   => 'biography.php',
      'Lucozade Sport' => 'photo.php',
      'Lucozade Sport NFU'  => 'work.php',
      'Personal' => 'contact.php',
      'Personal' => 'contact.php'
      );

      foreach($nav as $nav_title => $nav_link)
      {
          echo '<li '.($nav_link == basename($_SERVER['PHP_SELF']) ? 'class="selected"':'').'><a href="'.$nav_link.'">'.$nav_title.'</a></li>';
      }
      ?>
    </ul>

  </nav>
</section>
</header>