<?php get_header() ?>


<div id="fh5co-content">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-3 col-md-push-9 animate-box">
						<?php get_sidebar() ?>
					</div>
					<div class="col-md-9 col-md-pull-3">
						<?php
							$img_url = has_post_thumbnail() 
								? get_the_post_thumbnail_url() 
								: 'https://fakeimg.pl/1280x864/?text=No%20Photo';
						?>
						<img src="<?= $img_url ?>" alt=""><br><br>
						<h1><?= the_title() ?></h1>
						<p><?= the_content('') ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
