<?php  
    //Set values for page  
    $page_title = "Marco Mori | Photography";  
    $current_page = "home";  
  
    //Load header  
    include_once('includes/header.php');  
?>  


<section class="wrapper">

<div class="gallery demo-4">

          <div class="image-preview">
            <img id="preview" src="images/large/4.jpg" />
          </div>


          <!-- Elastislide Carousel -->
          <ul id="carousel" class="elastislide-list">
            <li data-preview="images/hugo-boss/large/1.jpg"><a href="/photogallery-template.php#3"><img src="images/hugo-boss/small/1.jpg" alt="image01" /></a></li>
            <li data-preview="images/hugo-boss/large/2.jpg"><a href="#"><img src="images/hugo-boss/small/2.jpg" alt="image05" /></a></li>
            <li data-preview="images/hugo-boss/large/3.jpg"><a href="#"><img src="images/hugo-boss/small/3.jpg" alt="image06" /></a></li>
            <li data-preview="images/hugo-boss/large/4.jpg"><a href="#"><img src="images/hugo-boss/small/4.jpg" alt="image07" /></a></li>
            <li data-preview="images/hugo-boss/large/5.jpg"><a href="#"><img src="images/hugo-boss/small/5.jpg" alt="image11" /></a></li>
            <li data-preview="images/hugo-boss/large/6.jpg"><a href="#"><img src="images/hugo-boss/small/6.jpg" alt="image12" /></a></li>
            <li data-preview="images/hugo-boss/large/7.jpg"><a href="#"><img src="images/hugo-boss/small/7.jpg" alt="image13" /></a></li>
            <li data-preview="images/hugo-boss/large/8.jpg"><a href="#"><img src="images/hugo-boss/small/8.jpg" alt="image14" /></a></li>
            <li data-preview="images/hugo-boss/large/9.jpg"><a href="#"><img src="images/hugo-boss/small/9.jpg" alt="image15" /></a></li>
            <li data-preview="images/hugo-boss/large/10.jpg"><a href="#"><img src="images/hugo-boss/small/10.jpg" alt="image16" /></a></li>
            <li data-preview="images/hugo-boss/large/11.jpg"><a href="#"><img src="images/hugo-boss/small/11.jpg" alt="image17" /></a></li>
            <li data-preview="images/hugo-boss/large/12.jpg"><a href="#"><img src="images/hugo-boss/small/12.jpg" alt="image18" /></a></li>
            <li data-preview="images/hugo-boss/large/13.jpg"><a href="#"><img src="images/hugo-boss/small/13.jpg" alt="image19" /></a></li>
            <li data-preview="images/hugo-boss/large/14.jpg"><a href="#"><img src="images/hugo-boss/small/14.jpg" alt="image20" /></a></li>
            <li data-preview="images/hugo-boss/large/15.jpg"><a href="#"><img src="images/hugo-boss/small/15.jpg" alt="image01" /></a></li>
            <li data-preview="images/hugo-boss/large/16.jpg"><a href="#"><img src="images/hugo-boss/small/16.jpg" alt="image02" /></a></li>
            <li data-preview="images/hugo-boss/large/17.jpg"><a href="#"><img src="images/hugo-boss/small/17.jpg" alt="image03" /></a></li>
            <li data-preview="images/hugo-boss/large/18.jpg"><a href="#"><img src="images/hugo-boss/small/18.jpg" alt="image08" /></a></li>
            <li data-preview="images/hugo-boss/large/19.jpg"><a href="#"><img src="images/hugo-boss/small/19.jpg" alt="image09" /></a></li>
            <li data-preview="images/hugo-boss/large/20.jpg"><a href="#"><img src="images/hugo-boss/small/20.jpg" alt="image10" /></a></li>
          </ul>
          <!-- End Elastislide Carousel -->

</div>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquerypp.custom.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript">
      
      // example how to integrate with a previewer

      var current = 0,
        $preview = $( '#preview' ),
        $carouselEl = $( '#carousel' ),
        $carouselItems = $carouselEl.children(),
        carousel = $carouselEl.elastislide( {
          current : current,
          minItems : 4,
          onClick : function( el, pos, evt ) {

            changeImage( el, pos );
            evt.preventDefault();

          },
          onReady : function() {

            changeImage( $carouselItems.eq( current ), current );
            
          }
        } );

      function changeImage( el, pos ) {

        $preview.attr( 'src', el.data( 'preview' ) );
        $carouselItems.removeClass( 'current-img' );
        el.addClass( 'current-img' );
        carousel.setCurrent( pos );

      }

    </script>


 </section><!-- #wrapper -->




<?php include('includes/footer.php'); ?>

    
</body>
</html>