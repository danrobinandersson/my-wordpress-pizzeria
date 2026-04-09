<?php get_header(); ?>

<?php
$hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<section class="hero">
    <?php if ($hero_image): ?>
        <img src="<?php echo $hero_image; ?>" alt="Pizza hero image">
    <?php endif; ?>

    <div class="hero-text">
        <h1><?php the_title(); ?></h1>
        <?php
        $subtitle = get_post_meta(get_the_ID(), 'hero_subtitle', true);
        if ($subtitle):
        ?>
            <h3><?php echo esc_html($subtitle); ?></h3>
        <?php endif; ?>
    </div>
</section>

<section id="story" class="intro">
    <div class="container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</section>

<section id="pizzas" class="pizza-grid">
    <h2>OUR PIZZAS</h2>

    <div class="grid">
        <?php
        $pizza_query = new WP_Query([
            'posts_per_page' => 9
        ]);

        if ($pizza_query->have_posts()) {
            while ($pizza_query->have_posts()) {
                $pizza_query->the_post(); ?>

                <div class="pizza-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php else: ?>
                            <div class="pizza-placeholder">
                                Picture coming soon
                            </div>
                        <?php endif; ?>

                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>

        <?php }
            wp_reset_postdata();
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>