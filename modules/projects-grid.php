


<div class="project-card">

	<h3 class="attention-voice"><?=$project["name"]?></h3>
	<p class="calm-voice"><?=$project["description"]?></p>
	
	<div class="links">
	<?php 
		if ($project["case-study"]) { ?>
			<a href="<?=$project["project-link"]?>">View Project</a>
			<div class="link-divider">/</div>
			<a href="<?=$project["case-study"]?>">View Case Study</a>
		<?php } else { ?>
			<a href="<?=$project["project-link"]?>">View Project</a>

		<?php }

	 ?>
	 </div>


</div> 