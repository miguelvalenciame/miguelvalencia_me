<?php

/**
 * The default template for displaying blog content
 *
 * @link http://miguelvalencia.me
 *
 * @package Miguel Valencia
 * @subpackage Miguel_Valencia
 * @since Miguel Valencia
 */
?>



<a href="<?php the_permalink(); ?>" id="single-post" class="col-sm-12 col-md-12 col-lg-4 m-0"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(<?php the_post_thumbnail_url(); ?>);">

    <div class=" text-center" data-aos="fade-up" data-aos-duration="1500">

        <h2><?php the_title(); ?></h2>


    </div>

</a>