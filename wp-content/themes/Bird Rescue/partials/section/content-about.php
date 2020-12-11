<section class="section2">
    <div class="about-us container-fluid">
        <div class="about-main row mx-auto justify-content-center">
            <div class="content col-4 align-self-center">
                <h1 class="heading"><?php the_field('heading')?></h1>
                <p><?php the_content()?></p>
            </div>
            <div class="image col-4">
                <img class="rounded mx-auto float-right" src="<?php the_field('image')?>" alt="">
            </div>
        </div>
    </div>
</section>