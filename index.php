<?php get_header(); ?>
<section class="hero container">
    <div class="hero__hero-img">
        <div class="hero__hero-feature">
            <span class="feature-category">Self-Development</span>
            <h2 class="feature-headline">Top 10 benefits of journalling every day</h2>
            <button class="feature-btn">Read More</button>
        </div>
    </div>
</section>
<section class="posts container">
    <h4>Our Latest</h4>
    <div class="posts-container">
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="post">
                <div class="post-header">
                    <h5 class="post-category"><?php echo get_the_category_list(', '); ?></h5>
                    <h3 class="post-title"><?php the_title(); ?></h3>
                    <p class="post-subheader">By <?php the_author_posts_link(); ?></p>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php }
    ?>
    </div>
</section>
<?php get_footer(); ?>