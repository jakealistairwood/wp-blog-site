<?php 
    get_header();

    while(have_posts()) {
        the_post(); ?>
        <section class="article">
            <div class="article__banner">
                <?php the_post_thumbnail('bannerImg') ?>
            </div>
            <div class="article__content">
                <div class="article__content--header">
                    <h5><?php echo get_the_category_list(', '); ?></h5>
                    <h1><?php the_title(); ?></h1>
                    <p>By <?php the_author_posts_link(); ?></p>
                </div>
                <div class="article__content--body">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php }

    get_footer();
?>