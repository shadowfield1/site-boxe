<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main>
    <!-- Hero Section -->
    <div class="relative h-screen">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo get_theme_file_uri('assets/images/hero-bg.jpg'); ?>');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        
        <div class="relative h-full flex items-center justify-center text-center px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    <?php bloginfo('name'); ?>
                </h1>
                <p class="text-xl md:text-2xl text-white mb-8">
                    <?php bloginfo('description'); ?>
                </p>
                <a href="#contact" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Rejoignez-nous
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Nos Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $services = new WP_Query(array(
                    'post_type' => 'service',
                    'posts_per_page' => 3
                ));

                while ($services->have_posts()) : $services->the_post();
                ?>
                    <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition duration-300">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-6">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded')); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">
                            <?php the_title(); ?>
                        </h3>
                        <div class="text-gray-600 text-center">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="actualites" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Actualités</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $posts = new WP_Query(array(
                    'posts_per_page' => 3
                ));

                while ($posts->have_posts()) : $posts->the_post();
                ?>
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover')); ?>
                        <?php endif; ?>
                        <div class="p-6">
                            <time class="text-sm text-gray-500 mb-2"><?php echo get_the_date(); ?></time>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                <?php the_title(); ?>
                            </h3>
                            <div class="text-gray-600">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold">
                                Lire la suite →
                            </a>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Contactez-nous</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <?php echo do_shortcode('[contact-form-7 id="1" title="Formulaire de contact"]'); ?>
                </div>
                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-4">Informations de contact</h3>
                        <address class="not-italic space-y-4">
                            <p>Serres-Castet, Pau</p>
                            <p>Pyrénées Atlantiques</p>
                            <p>Tél: +33 (0)5 XX XX XX XX</p>
                            <p>Email: contact@csmb.fr</p>
                        </address>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <div class="aspect-w-16 aspect-h-9">
                            <!-- Remplacer YOUR_GOOGLE_MAPS_EMBED_CODE par le code d'intégration Google Maps -->
                            <iframe src="about:blank" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>