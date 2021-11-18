<section class="writing">
	<inner-column>

		<div class="container">
			<h2 class="section-heading loud-voice">Writing</h2>

			<p class="calm-voice intro">I made it a point to try and write as often as possible along my web developer journey. Writing has never been my strong suit and I've always felt self-conscious about talking about myself and what I have done. But over the last year I've realize that writing is such a powerful tool and asset in my goal of becoming a developer. I wrote these articles to talk about things I work on, past and present, and all the emotions and experience that come with it to better my understanding of the process. I hope that these articles can help others on their journey as well.</p>

			<div class="latest-blog">
				<h3 class="attention-voice heading-3">
					Latest Blogs
				</h3>

				<?php include("projects-data.php") ?>

				<?php foreach ($latestBlog as $blog) { 
					include("article-grid.php");
			 	 } ?>


			</div>


		</div>

		<?php include("contact-me.php") ?>
	</inner-column>
</section>