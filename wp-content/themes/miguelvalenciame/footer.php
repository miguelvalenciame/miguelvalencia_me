        <footer>


            <div id="footer-content">

                <div class="container-fluid">

                    <div class="row pt-4 pb-4  p-lg-3">



                        <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1500">

                            <h5 id="footer-main-links-text">Important Links</h5>

                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav ml-auto mt-2 mt-lg-0',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>

                        </div>


                        <div class="col-md-12 col-lg-4 mt-3 mt-lg-0" data-aos="fade-up" data-aos-duration="1500">

                            <h5 id="footer-social-links-text">Unsocial Media</h5>

                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'social',
                                'depth'             => 1,
                                'container'         => 'div',
                                'container_class'   => '',
                                'container_id'      => 'footer-social-media-links',
                                'menu_class'        => 'navbar nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>


                            <h5 class="mt-4" id="footer-social-links-text">Whereabouts</h5>
                            <p>Villahermosa, Tabasco, México.</p>


                        </div>

                        <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1500">

                            <h5 id="footer-social-links-text">Gifts and Updates</h5>
                            <?php include "includes/signup-form.php" ?>


                        </div>







                    </div>
                </div>

            </div>

            <div id="copyright">

                <div class="container">

                    <div class="row pt-1">

                        <div class="col-md-12">

                            <p class="text-center">Copyright &copy; <script>
                                document.write(new Date().getFullYear())
                                </script> | Diseñado con <i id="heart-icon" class="fas fa-heart"></i> por
                                <?php bloginfo('name'); ?>
                            </p>

                        </div>

                    </div>
                </div>

            </div>

        </footer>

        <?php wp_footer(); ?>


        </body>

        </html>