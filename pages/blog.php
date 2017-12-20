<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../js/prism.js"></script>
	<link href="../css/prism.css" rel="stylesheet" />
</head>

<body>

  <div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper grey darken-4"> <a href="../index.php" class="brand-logo">Logo</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="pages/blog.php">Blog</a>
					</li>
					<li><a href="badges.html">Components</a>
					</li>
					<li><a href="collapsible.html">Javascript</a>
					</li>
					<li><a href="mobile.html">Mobile</a>
					</li>
					 <li><a href="posts.php"><i class="material-icons">account_circle</i></a></li>
				</ul>
				<ul class="side-nav white" id="mobile-demo">
					<li><a href="..pages/blog.php">Sass</a>
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


  <div class="container">
    <div class="row">
      <div class="col l10 s12" id="blogimg">

        <img class="responsive-img" src="../img/2.jpg">
        <h3>Titel</h3>
        <p>Datum & naam auteur</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br><br>
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
              <br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.

          </p>

      </div>
      <div class="col l2 s12">
        <h6>menu</h6>
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
		  $('.carousel.carousel-slider').carousel({fullWidth: true});
		  $('.parallax').parallax();
      $('.scrollspy').scrollSpy({scrollOffset: 50});
		});
	</script>
	<!--Import jQuery before materialize.js-->

</body>

</html>
