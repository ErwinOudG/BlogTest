<?php
include_once('../includes/header.php');

?>
<div class="container">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Auteurs</h5>

       <?php
 			for($i = 0; $i<=5; $i++){
 			?>



      <div class="col l6 s12">
        <div class="card">
          <div class="card-image">
            <img src="../img/2.jpg">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
   </div>



 			<?php
 			}
 			?>
  </div>
       <?php 
       include_once('../includes/sidebar.php');
       ?>

   </div>
</div>

  <?php
   include_once('../includes/footer.php');
   ?>
