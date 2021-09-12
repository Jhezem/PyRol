<?php
get_header();

if (is_front_page()) :
    get_template_part("/template-parts/content", "home");
elseif (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;

get_footer();
