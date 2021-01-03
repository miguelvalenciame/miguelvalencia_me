<?php get_header(); ?>

<!-- about-section STARTS -->

<section id="front-page">

    <div data-aos="fade-up" data-aos-duration="1500">

        <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

        <h1><?php bloginfo('description'); ?></h1>

        <?php the_content(); ?>

        <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>

<?php get_footer(); ?>