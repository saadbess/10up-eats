<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
        <hr>
    <?php }

    get_footer();

?>