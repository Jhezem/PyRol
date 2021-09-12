<?php
get_header();

$args = array(
    "post_type" => "destino",
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        the_content();
    endwhile;
endif;

?>

<?php

get_footer();
