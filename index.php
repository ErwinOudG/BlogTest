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
	<script src="js/prism.js"></script>
	<link href="css/prism.css" rel="stylesheet" />
</head>

<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper grey darken-4"> <a href="#!" class="brand-logo">ZEEMES</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="pages/bloggies.php">Blog</a>
					</li>
					<li><a href="badges.html">Components</a>
					</li>
					<li><a href="collapsible.html">Javascript</a>
					</li>
					<li><a class="modal-trigger" href="#modal1">Inloggen</a>
					</li>
					 <li><a href="pages/posts.php"><i class="material-icons">account_circle</i></a></li>
				</ul>
				<ul class="side-nav white" id="mobile-demo">
					<li><a href="pages/blog.php">Blog</a>
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



 <!-- Modal Structure -->
 <div id="modal1" class="modal">
	 <div class="modal-content">
		 <div class="row">
    <form class="col s12">


      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
			<div class="row">
				<div class="input-field col s12">
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Inloggen
    <i class="material-icons right">send</i>
  </button>

        </div>
      </div>
    </form>

	 <div class="modal-footer">
		 <a href="pages/registreren.php" class="modal-action modal-close waves-effect waves-green btn-flat">Registreren</a>
	 </div>
 </div>



	<div class="parallax-container">
		<div class="parallax">
			<img src="img/2.jpg">
		</div>
		<h1>Hello world</h1>
    <a href="#introduction" class="waves-effect waves-light amber accent-4 btn-large">Lees meer...</a>
	</div>
	<div class="section white">
		<div class="row container section scrollspy" id="introduction" >
			<h5 class="header">Recente Blogs</h5>

<div class="row">
			<?php
			for($i = 0; $i<=2; $i++){
			?>



        <div class="col m4 s12">
          <div class="card">
            <div class="card-image">
              <img src="img/1.jpg">
              <span class="card-title"><? echo $title[$i]?></span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="pages/blog.php">Lees verder</a>
            </div>
          </div>
        </div>



			<?php
			}
			?>
</div>
</div>
</div>


	<div class="parallax-container">
		<div class="parallax">
			<img src="img/1.jpg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col m4 offset-m4">

		</div>
		</div>
		</div>
	</div>




	<footer class="page-footer grey darken-4">
		<div class="container">
			<div class="row">
				<div class="col l3 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here
            to organize your footer content.</p>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Meest recent</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here
            to organize your footer content.</p>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Tags</h5>
					<div class="chip"><i class="close material-icons">code</i>HTML</div>
					<div class="chip"><i class="close material-icons">code</i>Css</div>
					<div class="chip"><i class="close material-icons">code</i>Javascript</div>
				</div>
				<div class="col l3  s12">
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
		<div class="footer-copyright blue-grey darken-4">
			<div class="container">© 2017 Copyright Text <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>



	<script type="text/javascript">
		  $( document ).ready(function()
		  {
		  $(".button-collapse").sideNav();
			$('select').material_select();
			$('.modal').modal();
		  $('.carousel.carousel-slider').carousel({fullWidth: true});
		  $('.parallax').parallax();
          $('.scrollspy').scrollSpy({scrollOffset: 50});
		  });
	</script>
	<!--Import jQuery before materialize.js-->

</body>

</html>
