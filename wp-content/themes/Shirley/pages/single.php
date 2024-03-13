<?php
/*
Template Name: Post
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <header>
        <!-- Add your header content here -->
    </header>

    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>

    <footer>
        <!-- Add your footer content here -->
    </footer>

    <?php wp_footer(); ?>
</body>
</html>