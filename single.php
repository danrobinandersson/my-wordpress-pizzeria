<?php get_header(); ?>

<main class="single-container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="single-picture">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                    <div class="single-placeholder">
                        Picture coming soon
                    </div>
                <?php endif; ?>
            </div>

            <div class="single-text">
                <h2 class="single-title"><?php the_title(); ?></h2>

                <?php if (get_the_content()) : ?>
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <div class="single-content-placeholder">
                        Text coming soon
                    </div>
                <?php endif; ?>
            </div>

    <?php }
    }
    ?>
</main>

<?php get_footer(); ?>