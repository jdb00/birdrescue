<div class="article mx-auto" style="min-height: 70vh; width: 70%;">
    <h1 class="heading mt-5"><?php the_title()?></h1>
    <div class="article-info d-flex">
        <div class="info-date pr-5 ">
            <p>
                Date Posted:
                <?php 
                    $post = get_post( $post );
                 
                    if ( ! $post ) {
                        return false;
                    }
                
                    $_format = ! empty( $format ) ? $format : get_option( 'date_format');
                    $the_date = get_post_time( $_format, false, $post, true );
    
                    echo $the_date;
                 ?>
            </p>
        </div>
        <div class="info-author">
            <p>By: <?php the_field('author')?> </p>
        </div>
    </div>
    <hr>
    <div class="content d-flex justify-content-center">
        <div class="article-image">
            <img class="rounded mx-auto" src="<?php the_field('image')?>" alt="">
        </div>
        <div class="article-content pl-3">
                <?php the_content()?>
            </p>
        </div>
    </div>
</div>