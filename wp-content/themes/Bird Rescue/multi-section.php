<?php /* Template Name: Multi Section */ ?>
<?php get_header() ?>

    <div class="container-fluid p-0">

        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part("partials/page/content", "multi-section");
            } 
        ?>
      
    </div>

<?php get_footer() ?>
