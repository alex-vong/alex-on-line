

<section class="projects">
	<inner-column>
		<div class="container">
			 <h2 class="section-heading loud-voice">My Work</h2>

			 <p class="calm-voice intro">Take a look at some of the projects I have worked on</p>

			 <div class="projects-grid">
			 	<?php include("projects-data.php") ?>

				<?php foreach ($projects as $project) { 
					include("projects-grid.php");
			 	 } ?>
			 	
			 </div>
			
		</div>
		
		<?php include("contact-me.php") ?>

	</inner-column>
</section>


