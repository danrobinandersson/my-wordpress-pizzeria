<?php get_header(); ?>

<main>
    <h2>Our Pizzas</h2>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <article>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <div>
                    <?php the_post_thumbnail(); ?>
                </div>

                <p><?php the_excerpt(); ?></p>
            </article>

    <?php }
    }
    ?>
</main>

<section>
    <h2>Popular Pizzas</h2>
    <ul>
        <li>Margherita</li>
        <li>Capricciosa</li>
        <li>Vegetale</li>
    </ul>
</section>

<?php get_footer(); ?>