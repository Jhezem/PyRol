    <header class="home-page">
        <div class="hero-banner">
            <nav class="navbar navbar-expand-lg">
                <div class="container justify-content-around">
                    <div class="logo-wrapper">
                        <a href="#" class="navbar-brand text-logo">
                            <!--img src=" <?php echo get_template_directory_uri() . '/screenshot.png' ?>" alt="logo" width="80" height="50" class="d-inline-block"-->
                            Pyrol Travel
                        </a>
                    </div>

                    <div class="navbar-wrapper">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>

                </div>
            </nav>

            <!-----------------------MOBILE NAVBAR------------------------------>

            <div class="container" id="mobile-navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'navbar-nav',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>

            <div class="h-100 row align-items-center">
                <div class="header-content">
                    <div class="header-text col col-md-4">
                        <h1 class="display-1 text-white fw-bold">Travel</h1>
                        <h3 class="mt-20 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, inventore.</h3>
                    </div>
                </div>
            </div>

        </div>
    </header>