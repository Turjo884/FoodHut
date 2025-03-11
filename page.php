<?php

    get_header();

?>

<!-- BLOG Section  -->
<div id="blog" class="tp-page-area container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">EVENTS AT THE FOOD HUT</h2>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part('template-parts/content', get_post_format()); ?>

                    <?php endwhile; else : ?> //End the while loop
                        <p>Opps! content not found</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php

    get_footer();
?>