<?php
/**
 * Plugin Name: Luto
 * Description: Lazo negro flotante
 * Plugin URI: https://www.antoniomartinezperez.com/
 * Author: Antonio Martinez Perez
 * Version: 1.0.0
 * Author URI: https://www.antoniomartinezperez.com/
 */



 //Register Scripts to use 
    function func_load_icon_drag_scripts() {

        wp_register_script('jquery', plugin_dir_url( __FILE__ ).'jquery.js', true );


        wp_register_script('lazo_negro', plugin_dir_url( __FILE__ ).'lazo.js', true );
    }
    
    add_action('wp_enqueue_scripts', 'func_load_icon_drag_scripts');

 //Register Styles to use 

    function style_load_icon_drag(){
    
        wp_register_style( 'style', get_site_url() . '/wp-content/plugins/luto/mystyle.css', array(), false, 'all');
           
    }
    
    add_action( 'wp_enqueue_scripts', 'style_load_icon_drag');


    add_action('wp_footer', 'wpshout_action_example'); 

    function wpshout_action_example() { 

        wp_enqueue_script('jquery');

        wp_enqueue_script('lazo_negro');

        wp_enqueue_style( 'style');

       echo '
            <div class="luto-container" id="luto-drg">
                <img src="'.get_site_url().'/wp-content/plugins/luto/lazo-negro.png'.'">
            </div>
        ';
    
    }




 