<?php
/*
Template Name:Blog 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Blog Page</title>
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
        <h1>Main Blog Page</h1>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
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