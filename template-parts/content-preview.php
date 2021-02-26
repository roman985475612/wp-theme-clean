<?php
global $right;

$img_url = has_post_thumbnail() 
    ? get_the_post_thumbnail_url() 
    : 'https://fakeimg.pl/1280x864/?text=No%20Photo';

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
