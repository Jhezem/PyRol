<section class="destinations">
    <div class="container text-center">
        <div class="row">
            <div class="col col-md-12">
                <h1 class="fw-bold">Start Your Jorney</h1>
                <h5 class="mt-3">The most popular places</h5>
            </div>
        </div>
    </div>

            <?php

            $args = array(
                "post_type" => "destino",
                "posts_per_page" => 6,
                "orderby" => "rand",
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                ?>
                 <div class="container text-center mt-3">
                    <div class="destination-grid">
                <?php
                while ($loop->have_posts()) : $loop->the_post();
            ?>

                    <article class="destination">
                        <div class="card">
                        <?php
                            the_post_thumbnail(
                                "medium",
                                array(
                                    "class" => "card-img-top",
                                    "title" => "Destino",
                                    "alt" => "Destino Thumbnail",
                                )
                            );
                            ?>
                            <div class="card-body">
                                <p class="destination-title"><?php the_title(); ?></p>
                            </div>

                        </div>
                    </article>

                <?php
                endwhile;
                ?>
        </div>
    </div>
</section>

<?php
            else :

?>

    <section class="no-post">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h5 class="mt-3 fw-bold">Oops there's no destinations yet :(</h5>
                </div>
            </div>
        </div>
    </section>


<?php
            endif
?>

<section class="browse">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="activities">
                    <h3 class="fw-bold" style="color: #7c8bf2;">Browse Tours By Activity</h3>
                    <div class="activity-list">
                        <ul>
                            <li><a href="#">Biking</a></li>
                            <li><a href="#">Trekking</a></li>
                            <li><a href="#">Kayak</a></li>
                            <li><a href="#">Boarding</a></li>
                            <li><a href="#">City Tour</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
                <h3 class="fw-bold" style="color: #7c8bf2;">Newsletter</h3>
                <h5 class="mt-3">Subscribe for updates & promotions</h5>
                <div class="subscribe-wrapper subscribe2-wrapper mb-15">
                    <div class="subscribe-form">
                        <form action="#" id="newsletter">
                            <input placeholder="enter your email address" type="email">
                            <button>subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="choose-us">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="fw-bold">Why Choose Us?</h1>
                <h5 class="mt-3">Life is not a journey, is a destination</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-masonry">
                    <div class="card biggest" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/images/jesus-maria.jpg" alt="Card image cap">
                    </div>
                    <div class="card smaller1" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/images/jesus-maria.jpg" alt="Card image cap">
                    </div>
                    <div class="card smaller2" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/images/jesus-maria.jpg" alt="Card image cap">
                    </div>
                    <div class="card smaller3" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/images/jesus-maria.jpg" alt="Card image cap">
                    </div>
                    <div class="card smaller4" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/images/jesus-maria.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>