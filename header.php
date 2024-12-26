<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<span class="text-xl font-bold text-gray-800">' . get_bloginfo('name') . '</span>';
                    }
                    ?>
                </div>
                
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container_class' => 'hidden md:flex items-center space-x-8',
                    'menu_class' => 'flex space-x-8',
                    'fallback_cb' => false,
                ));
                ?>
            </div>
        </div>
    </nav>