<?php 
namespace Contact\Info;
class Settings {
    public static function init() {
        add_action( 'admin_menu', [ __CLASS__, 'create_admin_menu' ] );
    }

    public static function create_admin_menu(){
        $capability = 'manage_options';
        $slug = 'contact-info';

        add_menu_page(
            __( 'Contact Info', 'contact-info' ),
            __( 'Contact Info', 'contact-info' ),
            $capability,
            $slug,
            [ __CLASS__, 'menu_page_template' ],
            'dashicons-buddicons-replies'
        );
    }
    public static function menu_page_template(){
        echo '<div class="wrap"><div id="shopgrowth-admin-app"></div></div>';
    }
}