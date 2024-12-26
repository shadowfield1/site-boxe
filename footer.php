<?php
if (!defined('ABSPATH')) exit;
?>
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4"><?php bloginfo('name'); ?></h3>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Navigation</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'space-y-2',
                    ));
                    ?>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <address class="not-italic">
                        <p>Serres-Castet, Pau</p>
                        <p>Pyrénées Atlantiques</p>
                        <p>Tél: +33 (0)5 XX XX XX XX</p>
                        <p>Email: contact@csmb.fr</p>
                    </address>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>