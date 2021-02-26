<?php get_header() ?>

<div id="fh5co-content">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if ( has_post_thumbnail() ): ?>
					<img src="<?= get_the_post_thumbnail_url() ?>" alt=""><br><br>
				<?php endif ?>
				<p><?= the_content('') ?></p>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
