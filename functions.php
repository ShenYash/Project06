<?php
function add_custom_nav_item($items, $args) {
    // Vérifiez si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajoutez le lien "Admin" à votre menu
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item"  href="' . admin_url() . '">' . __('Admin', 'magic-elementor') . '</a></li>';
        $items .= $admin_link;
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_custom_nav_item', 10, 2);

