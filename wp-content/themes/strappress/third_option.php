<?php

/*  
Template Name:  Third Option
*/

?>


<div class="navbar-wrapper">
  <div class="container">

    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#">Bootstrap 3</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://www.bootply.com" target="ext">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://lorempixel.com/g/1500/500/city/1">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bootstrap 3 Carousel Layout</h1>
          <p>This is an example layout with carousel that uses the Bootstrap 3 RC styles. The Bootstrap 3 release date is not known but we can prepare now!</p>
          <p><a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/500/abstract">
      <div class="container">
        <div class="carousel-caption">
          <h1>Changes to the Grid</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500X500">
      <div class="container">
        <div class="carousel-caption">
          <h1>Percentage-based sizing</h1>
          <p>With "mobile-first" there is now only one percentage-based grid.</p>
          <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col col-lg-4">
      <img class="img-circle" src="http://placehold.it/140x140">
      <h2>Mobile-first</h2>
      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col col-lg-4">
      <img class="img-circle" src="http://placehold.it/140x140">
      <h2>One Fluid Grid</h2>
      <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col col-lg-4">
      <img class="img-circle" src="http://placehold.it/140x140">
      <h2>LESS is More</h2>
      <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading">Responsive Design. <span class="text-muted">It'll blow your mind.</span></h2>
    <p class="lead">In simple terms, a responsive web design figures out what resolution of device it's being served on. Flexible grids then size correctly to fit the screen.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
    <h2 class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
    <p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Flatness.</span></h2>
    <p class="lead">A big design trend for 2013 is "flat" design. Gone are the days of excessive gradients and shadows. Designers are producing cleaner flat designs, and Bootstrap 3 takes advantage of this minimalist trend.</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>Bootstrap layout is compliments of Bootply. · <a href="http://www.bootply.com">Edit on Bootply.com</a></p>
  </footer>

</div><!-- /.container -->