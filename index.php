<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="pt-16">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="max-w-7xl mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>