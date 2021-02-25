<?php
get_header();
?>

<?php if ( get_theme_mod('clean_home_category') ): ?>
    <div id="fh5co-portfolio">

        <?php $query = new WP_Query([
            'category_name' => get_theme_mod('clean_home_category'),
        ]) ?>

        <?php if ( $query->have_posts() ) : $right = false; while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php
                if ( has_post_thumbnail() ) {
                    $img_url = get_the_post_thumbnail_url();
                } else {
                    $img_url = 'https://fakeimg.pl/1280x864/?text=No%20Photo';
                }
            ?>
            <div class="fh5co-portfolio-item<?= $right ? ' fh5co-img-right' : '' ?>">
                <div 
                    class="fh5co-portfolio-figure animate-box" 
                    style="background-image: url(<?= $img_url ?>);"
                ></div>
                <div class="fh5co-portfolio-description">
                    <h2><?= the_title() ?></h2>
                    <p><?= the_content('') ?></p>
                    <p><a href="<?= the_permalink() ?>" class="btn btn-primary"><?php _e('Read more', 'clean') ?></a></p>
                </div>
            </div>
        <?php $right = !$right; endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata() ?>
    </div>
<?php endif ?>

<?php 
$query = new WP_Query(['category_name' => 'leadership']);
if ( $query->have_posts() ): ?>                    
    <div id="fh5co-team">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <h2 class="section-lead text-center">Leadership</h2>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff">
                                <figure>
                                    <img 
                                        src="<?= get_the_post_thumbnail_url() ?>" 
                                        alt="<?= the_title() ?>" 
                                        class="img-responsive"
                                    >
                                </figure>
                                <h3><?= the_title() ?></h3>
                                <p><?= the_content() ?></p>
                                <ul class="fh5co-social">
                                    <li><a href="<?= get_post_meta($post->ID, 'twitter')[0] ?>"><i class="icon-twitter"></i></a></li>
                                    <li><a href="<?= get_post_meta($post->ID, 'github')[0] ?>"><i class="icon-github"></i></a></li>
                                </ul> 	
                            </div>
                        <?php endwhile ?>
                        <?php wp_reset_postdata() ?>
                        <div class="clearfix visible-sm-block visible-xs-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<div id="fh5co-services">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <h2 class="section-lead text-center">Features</h2>
                    <?php $query = new WP_Query([
                        'category_name' => 'features',
                    ]) ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
                            <div class="fh5co-icon to-animate">
                                <i class="<?= get_post_meta($post->ID, 'icon-class')[0] ?>"></i>
                            </div>
                            <div class="fh5co-desc">
                                <h3><?= the_title() ?></h3>
                                <p><?= the_content() ?></p>
                            </div>	
                        </div>
                    <?php endwhile ?>
                    <?php endif ?>
                    <?php wp_reset_postdata() ?>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
