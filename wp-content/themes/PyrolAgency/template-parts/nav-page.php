<header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container justify-content-around">
                <a href="#" class="navbar-brand text-logo">
                    <!--img src=" <?php echo get_template_directory_uri() . '/screenshot.png' ?>" alt="logo" width="80" height="50" class="d-inline-block"-->
                    Pyrol Travel
                </a>
                <ul class="navbar-nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </ul>
            </div>
        </nav> 
</header>