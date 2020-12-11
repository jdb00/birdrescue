<?php get_header()?>
    <div class="news-container container-md">
        <h1 class="heading mt-5">News</h1>

        <div class="news-tags">
            <div class="news-filters row justify-content-center">
                <h1>Tags:</h1>
                <button class="tag" data-filter="*">all</button>
                <?php
                    $terms = get_terms('type', array('hide_empty' => false));
                    foreach($terms as $term){
                        echo '<button class="tag" data-filter=".'.$term->slug.'">'.$term->name.'</button>';
                    }

                ?>
            </div>
        </div>
        <hr>
        <div class="news-main mx-auto">
            <?php
                $args = array('post_type' => 'news');

                $the_query = new WP_Query($args);

                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('partials/page/content', 'news');
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>
<?php get_footer()?>


    