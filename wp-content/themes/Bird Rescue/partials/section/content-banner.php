<section class="section1">
    <div class="banner" style="background-image:url(<?php the_field('image')?>)">
        <div class="main">
            <div class="main-container">
                <div class="main-content">
                    <div class="main">
                        <h1 class="heading"><?php the_field('heading')?></h1>
                        <div class="banner-content"><?php the_content()?></div>
                        <button class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="links-container">
        <ul class="quick-links row mx-auto">
            <?php
                $args = array('post_type' => 'service');
                // The Query
                $the_query = new WP_Query( $args );
                
                // The Loop
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('partials/page/content', 'service');
                }

                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>