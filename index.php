<?php get_header(); ?>
<section class="hero container">
    <div class="hero__hero-img">
    </div>
    <div class="hero__hero-content">
        <h5 class="hero-category">Self-Development</h5>
        <h2 class="hero-title">Top 10 benefits of Journalling every day</h2>
        <p class="hero-subtitle">By <?php the_author_posts_link(); ?></p>
    </div>
</section>
<section class="posts container">
    <h4>Latest Articles</h4>
    <div class="posts-container">
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="post">
                <a href="<?php the_permalink(); ?>">
                    <div class="post-header">
                        <?php the_post_thumbnail('postImg'); ?>
                        <h5 class="post-category"><?php echo get_the_category_list(', '); ?></h5>
                        <h3 class="post-title"><?php the_title(); ?></h3>
                        <p class="post-subheader">By <?php the_author_posts_link(); ?></p>
                    </div>
                </a>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php }
    ?>
    </div>
</section>
<?php get_footer(); ?>