<?php
include_once('../includes/header.php');

?>
<div class="container">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Blogpagina</h5>

       <?php
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



 			<?php
 			}
 			?>
</div>
       <?php
       include_once('../includes/sidebar.php');
       ?>

   </div>
</div>
<div class="container">
   <div class="row">
     <div class="col l4  s12">
        <ul class="pagination">
           <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
           <li class="active grey darken-4"><a href="#!">1</a></li>
           <li class="waves-effect"><a href="#!">2</a></li>
           <li class="waves-effect"><a href="#!">3</a></li>
           <li class="waves-effect"><a href="#!">4</a></li>
           <li class="waves-effect"><a href="#!">5</a></li>
           <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
         </ul>
       </div>
       </div>
       </div>


  <?php
   include_once('../includes/footer.php');
   ?>
