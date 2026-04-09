<?php get_header();
$booking_bg = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<main class="booking-page" style="background-image: url('<?php echo esc_url($booking_bg); ?>');">
    <h2>CALL</h2>
    <div class="booking-content">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <h1><?php echo wp_strip_all_tags(get_the_content()); ?></h1>
        <?php
            }
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>