<?php
include_once('../includes/header.php');

?>
<div class="container">
   <div class="row">
     <div class="col l10 s12" id="blogimg">

       <?
 			for($i = 0; $i<=5; $i++){
 			?>



         <div class="col m4 s12">
           <div class="card">
             <div class="card-image">
               <img src="../img/1.jpg">
               <span class="card-title">Titel</span>
             </div>
             <div class="card-content">
               <p>I am a very simple card. I am good at containing small bits of information.
               I am convenient because I require little markup to use effectively.</p>
             </div>
             <div class="card-action">
               <a href="blog.php">Lees verder</a>
             </div>
           </div>
         </div>



 			<?
 			}
 			?>
</div>
       <?include_once('../includes/sidebar.php');?>

   </div>
</div>

  <?
   include_once('../includes/footer.php');
   ?>
