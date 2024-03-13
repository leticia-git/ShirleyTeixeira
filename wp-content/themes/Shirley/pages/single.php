<main class="p-single">
    <div class="p-single__grid" >
        <?php if (has_post_thumbnail()) { ?>
            <div class="p-single__thumbnail swiper-slide" style="background-image: url('<?php the_post_thumbnail_url('thumbnail-blog-highlights') ?>')" >
                <div class="p-single__titles" >
                    <h1 class="p-single__title" ><?php the_title(); ?></h1>
                </div>
                <div class="p-single__author-date" >
                    <span class="p-single__author" ><?php the_author(); ?></span>
                    <span >-</span>
                    <span class="p-single__data" ><?php echo get_the_date('d'); ?> <?php echo get_the_date('F'); ?> <?php echo get_the_date('Y'); ?></span>
                </div>
            </div>
        <?php } else { ?>
            <div class="p-single__thumbnail swiper-slide" style="background-color: #00306A" >
                <div class="p-single__titles" >
                    <h1 class="p-single__title" ><?php the_title(); ?></h1>
                    <span class="p-single__subtitle" ></span>
                </div>
                <div class="p-single__author-date" >
                    <span class="p-single__author" ><?php the_author(); ?></span>
                    <span >-</span>
                    <span class="p-single__data" ><?php echo get_the_date('d'); ?> <?php echo get_the_date('F'); ?> <?php echo get_the_date('Y'); ?></span>
                </div>
            </div>
        <?php } ?>
        <div class="p-single__content-latest" >
            <div class="p-single__content" ><?php the_content() ?></div>
        </div>
    </div>
</main>