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
      <div class="nav-wrapper grey darken-4"> <a href="../index.php" class="brand-logo">ZEEMES</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="../pages/bloggies.php">Blog</a>
          </li>
          <li><a href="badges.html">Components</a>
          </li>
          <li><a href="collapsible.html">Javascript</a>
          </li>
          <li><a class="modal-trigger" href="#modal1">Inloggen</a>
          </li>
           <li><a href="posts.php"><i class="material-icons">account_circle</i></a></li>
        </ul>
        <ul class="side-nav " id="mobile-demo">
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
