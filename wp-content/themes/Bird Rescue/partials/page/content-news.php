<?php 
    $terms = get_the_terms( get_the_ID(), 'type' );
    
    $classes = '';
    foreach($terms as $term){
        $classes .= $term->slug.' ';
    }
?>

<div class="news-item col-8 <?php echo $classes?>">
    <div class="news-image left">
        <img src="<?php the_field('image')?>" alt="">
    </div>
    <div class="right">
        <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
        <hr>
        <div class="post-info row justify-content-between px-3">
            <p>By: <?php the_field('author')?></p>
            <div class="tags row">
                <?php
                    $terms = get_the_terms( get_the_ID(), 'type' );
                    foreach($terms as $term){
                        echo '<div class="tag">'.$term->slug.'</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>