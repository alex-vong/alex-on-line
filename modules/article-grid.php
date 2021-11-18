<div class="article-card">
	<a href="<?=$blog["link"]?>">
		<h3 class="sml-attention-voice"><?=$blog["title"]?></h3>
	</a>

	<?php  
	if ( $blog["date"] ) { ?>
		<a href="<?=$blog["link"]?>">
			<p><?=$blog["date"]?></p>
		</a>
	<?php } else { ?>
	<a href="<?=$blog["link"]?>" class="link">View CodePen</a>
	<?php } ?>

</div>