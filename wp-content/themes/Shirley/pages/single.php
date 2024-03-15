<?php 
get_template_part('components/head'); ?>


<main class="p-single">
    <div class="grid" >
        <?php if (has_post_thumbnail()) { ?>
            <div class="p-single__thumbnail" >
                <div class="p-single__titles" >
                    <h1 class="p-single__title" ><?php the_title(); ?></h1>
                </div>
                <div class="p-single__author-date" >
                    <span class="p-single__author" ><?php the_author(); ?></span>
                </div>
            </div>
        <?php } else { ?>
            <div class="p-single__thumbnail" >
                <div class="p-single__titles" >
                    <h1 class="p-single__title" ><?php the_title(); ?></h1>
                    <span class="p-single__subtitle" ></span>
                </div>
            </div>
        <?php } ?>
        <div class="p-single__content-latest" >
            <div class="p-single__content" ><?php the_content() ?></div>
        </div>
    </div>
</main>