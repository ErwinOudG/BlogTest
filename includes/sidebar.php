

<div class="col l3 s12" id="sidebars">
	<h6>Zoek</h6>
	<div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"></label>
          <i class="material-icons">close</i>
        </div>
  <h6>Recente Blogs</h6>
   <div class="row">
		 <?php
		 for($i = 0; $i<=5; $i++){
		 ?>
      <div class="col l4">
      	<img src="../img/1.jpg" width="75" height="75">

      </div>

			<?php
		  }
		  ?>

  </div>
  <h6>Tags</h6>

	<?php
	for($i = 0; $i<=5; $i++){
	?>
	 <div class="col l6">
		 <div class="tags">
		 	<p>tagname</p>
		 </div>

	 </div>

	 <?php
	 }
	 ?>


</div>
