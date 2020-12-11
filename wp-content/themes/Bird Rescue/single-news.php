<?php get_header()?>
    <!-- Features -->
    <div class="container service">
      <!-- partials/content-index.php -->
    <?php 
        while ( have_posts() ) {
            the_post(); 
            get_template_part("partials/page/content", "single-news");
        } // end while
    ?>
    </div>
<?php get_footer()?>