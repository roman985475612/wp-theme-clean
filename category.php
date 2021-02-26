<?php get_header() ?>

<?php if ( get_theme_mod('clean_home_category') ): ?>
    <div id="fh5co-portfolio">
        <?php if ( have_posts() ) : $right = false; while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'preview') ?>
        <?php $right = !$right; endwhile ?>
        <?php the_posts_pagination([
            'end_size' => 1,
            'mid_size' => 1,
            'type'     => 'list',
        ]) ?>
        <?php endif ?>
        <?php wp_reset_postdata() ?>
    </div>
<?php endif ?>

<?php get_footer() ?>