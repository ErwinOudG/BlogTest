<?php include_once ('pages/oop.php');?>


<?php
$obj = new auto;
$obj2 = new auto;
$obj3 = new auto;

$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I belong to the second instance!");
$obj3->setProperty("Ja wat nou ?!?");


?>
<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<link href="css/prism.css" rel="stylesheet" />
</head>

<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper grey darken-4"> <a href="#!" class="brand-logo">Logo</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Sass</a>
					</li>
					<li><a href="badges.html">Components</a>
					</li>
					<li><a href="collapsible.html">Javascript</a>
					</li>
					<li><a href="mobile.html">Mobile</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Sass</a>
					</li>
					<li><a href="badges.html">Components</a>
					</li>
					<li><a href="collapsible.html">Javascript</a>
					</li>
					<li><a href="mobile.html">Mobile</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>



	<div class="parallax-container">
		<div class="parallax">
			<img src="img/2.jpg">
		</div>
		<h1>Welkom</h1>
    <a href="#introduction" class="waves-effect waves-light grey darken-4 btn-large">Lees meer...</a>
	</div>
	<div class="section white">
		<div class="row container" id="introduction" class="section scrollspy">
			<h2 class="header">Blog</h2>

      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="img/1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>




    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src="img/1.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>


  <div class="col s4">
    <div class="card">
      <div class="card-image">
        <img src="img/1.jpg">
        <span class="card-title">Card Title</span>
      </div>
      <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

</div>
</div>
</div>
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/1.jpg">
		</div>
	</div>



	<footer class="page-footer grey darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here
            to organize your footer content.</p><?php echo $obj3->getProperty();?>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="#!">Link 1</a>
						</li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 2</a>
						</li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 3</a>
						</li>
						<li><a class="grey-text text-lighten-3" href="#!">Link 4</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">© 2017 Copyright Text <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>



	<script type="text/javascript">
		$( document ).ready(function(){
		  $(".button-collapse").sideNav();
		  $('.carousel.carousel-slider').carousel({fullWidth: true});
		  $('.parallax').parallax();

      $('.scrollspy').scrollSpy(
        {scrollOffset: 500}
      );


		})
	</script>
	<!--Import jQuery before materialize.js-->
	<script src="js/prism.js"></script>
</body>

</html>
