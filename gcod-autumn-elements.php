<?php
/*
    Plugin Name: GCOD Elementor for Autumn
    Plugin URI: https://themeforest.net/gcodesign/
    Description: GCOD Elementor Widgets for Autumn Theme
    Version: 1.0.0
    Author: CGO Design Team
    Author URI: https://gcodesign.com/wordpress-plugins/
    Text Domain: gco-autumn
*/

class GcoAutumnElements {
    private static $instance;
    private $gcod_components_dir = 'components';
    private $gcod_inc_dir = 'includes';

    /**
     * GcoAutumnElements constructor.
     */
    public function __construct() {
        $this->setup();
        $this->widgets();
        $this->elementor();

        // Load default elementor widgets styles + Elementor load files
        add_action('gcod_elementor_loader', array($this, 'gcocore_elementor_require_files'));
        add_action('wp_enqueue_scripts', array($this, 'gcod_load_style_elementor_assets'));
        add_action('wp_enqueue_scripts', array($this, 'gcod_custom_elementor_assets'), 25);

        // Load custom widgets assets
        add_action('gcod_widgets_loader', array($this, 'gcod_custom_widgets_require_files'));
        add_action('wp_enqueue_scripts', array($this, 'gcod_custom_widgets_assets'));

        // Check Elementor
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', array($this, 'elementor_not_loaded'));
        }
    }    

    /**
     * Check if elementor plugin is activated
     *
     * @since v1.0.0
     */
    public function elementor_not_loaded()
    {
        if (!current_user_can('activate_plugins')) {
            return;
        }

        $elementor = 'elementor/elementor.php';

        if ($this->is_plugin_installed($elementor)) {
            $activation_url = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . $elementor . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $elementor);

            $message = sprintf(__('%1$sGCO Elements for Autumn%2$s requires %1$sElementor%2$s plugin to be active. Please activate Elementor to continue.', 'essential-addons-for-elementor-lite'), "<strong>", "</strong>");

            $button_text = __('Activate Elementor', 'essential-addons-for-elementor-lite');
        } else {
            $activation_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=elementor'), 'install-plugin_elementor');

            $message = sprintf(__('%1$sGCOD Elements for Autumn%2$s requires %1$sElementor%2$s plugin to be installed and activated. Please install Elementor to continue.', 'essential-addons-for-elementor-lite'), '<strong>', '</strong>');
            $button_text = __('Install Elementor', 'essential-addons-for-elementor-lite');
        }

        $button = '<p><a href="' . $activation_url . '" class="button-primary">' . $button_text . '</a></p>';

        printf('<div class="error"><p>%1$s</p>%2$s</div>', __($message), $button);
    }

    /**
     * Check if a plugin is installed
     *
     * @since v3.0.0
     */
    public function is_plugin_installed($basename)
    {
        if (!function_exists('get_plugins')) {
            include_once ABSPATH . '/wp-admin/includes/plugin.php';
        }

        $installed_plugins = get_plugins();

        return isset($installed_plugins[$basename]);
    }

    // Load default elementors styles    
    public function gcod_load_style_elementor_assets() {
        wp_enqueue_style(
            'gcod-element-widgets',
            get_template_directory_uri() . '/assets/css/style-elementor.css',
            false,
            wp_get_theme()->get('Version')
        );
    }

    public static function getInstance() {

        if (!isset(self::$instance) && !(self::$instance instanceof GcoAutumnElements)) {
            self::$instance = new GcoAutumnElements();
        }

        return self::$instance;
    }

    public function setup() {


        // Define path to plugin directory.
        if (!defined('GCOD_AUTUMN_ELEMENTS_PATH')) {
            define('GCOD_AUTUMN_ELEMENTS_PATH', plugin_dir_path(__FILE__));
        }

        // Define URL to plugin directory.
        if (!defined('GCOD_AUTUMN_ELEMENTS_URL')) {
            define('GCOD_AUTUMN_ELEMENTS_URL', plugin_dir_url(__FILE__));
        }

        // Define path to theme directory.
        if (!defined('GCOD_AUTUMN_THEME_PATH')) {
            define('GCOD_AUTUMN_THEME_PATH', get_template_directory() . '/');
        }

        // Define URL to theme directory.
        if (!defined('GCOD_AUTUMN_THEME_URL')) {
            define('GCOD_AUTUMN_THEME_URL', get_template_directory_uri() . '/');
        }

        if (!defined('GCOD_AUTUMN_ELEMENTS_INC_PATH')) {
            define('GCOD_AUTUMN_ELEMENTS_INC_PATH', plugin_dir_path(__FILE__) . $this->gcod_inc_dir);
        }

        if (!defined('GCOD_AUTUMN_ELEMENTS_INC_URL')) {
            define('GCOD_AUTUMN_ELEMENTS_INC_URL', plugin_dir_url(__FILE__) . $this->gcod_inc_dir);
        }

        if (!defined('GCOD_AUTUMN_ELEMENTS_COMPS_PATH')) {
            define('GCOD_AUTUMN_ELEMENTS_COMPS_PATH', plugin_dir_path(__FILE__) . $this->gcod_components_dir);
        }

        if (!defined('GCOD_AUTUMN_ELEMENTS_COMPS_URL')) {
            define('GCOD_AUTUMN_ELEMENTS_COMPS_URL', plugin_dir_url(__FILE__) . $this->gcod_components_dir);
        }
    }

    // Elementor plug-in
    public function elementor() {
        add_action('after_setup_theme', function () {
            do_action('gcod_elementor_loader');
        });
    }

    function gcocore_elementor_require_files() {
        require_once plugin_dir_path(__FILE__) . $this->gcod_components_dir . '/class-modules-theme.php';
    }

    // => Enqueue your custom style/script as your requirements elementor   
    function gcod_custom_elementor_assets() {

        wp_enqueue_style(
            'gcod-custom-elementor-styles',
            get_template_directory_uri() . '/assets/css/gcod-elementor.css',
            false,
            wp_get_theme()->get('Version')
        );

        wp_enqueue_style(
            'gcod-fontawesome-styles',
             plugin_dir_url(__FILE__) . 'assets/vendors/fontawesome/css/all.fontawesome.min.css',
            false,
            wp_get_theme()->get('Version')
        );

        wp_enqueue_style(
            'gcod-slick-styles',
             plugin_dir_url(__FILE__) . 'assets/vendors/slick/slick.min.css',
            false,
            wp_get_theme()->get('Version')
        );
        wp_register_script(
            'gcod-slick-scripts',
            plugin_dir_url(__FILE__) . 'assets/vendors/slick/slick.min.js',
            array('jquery'),
            true,
            wp_get_theme()->get('Version')
        );
        wp_enqueue_script('gcod-slick-scripts');

        
        if ( \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
            wp_register_script(
                'gcod-custom-elementor-scripts',
                plugin_dir_url(__FILE__) . 'assets/js/gcod-elementor-editor.js',
                array('jquery','gcod-slick-scripts'),
                true,
                wp_get_theme()->get('Version')
            );
            wp_enqueue_script('gcod-custom-elementor-scripts');
        } else {
            wp_register_script(
                'gcod-custom-elementor-scripts',
                plugin_dir_url(__FILE__) . 'assets/js/gcod-elementor.js',
                array('jquery','gcod-slick-scripts'),
                true,
                wp_get_theme()->get('Version')
            );
            wp_enqueue_script('gcod-custom-elementor-scripts');
        }
    }

    // Widget plug-in
    public function widgets() {
        add_action('after_setup_theme', function () {
            do_action('gcod_widgets_loader');
        });
    }

    // Widget loading from Plugin
    public function gcod_custom_widgets_require_files() {

        $gcod_widget_list = array(
            // 'widget-welcome/widget-welcome.php',                // Welcome
        );

        // Include files from plugin core.
        $gcod_widgets_dir = plugin_dir_path(__FILE__) . '/widgets/';
        foreach ($gcod_widget_list as $file) {
            require_once $gcod_widgets_dir . $file;
        }
    }

    // => Enqueue your custom widgets 
    function gcod_custom_widgets_assets() {
        wp_enqueue_style(
            'gcod-custom-widget-styles',
            get_template_directory_uri() . '/assets/css/gcod-widgets.css',
            false,
            wp_get_theme()->get('Version')
        );

        // wp_enqueue_script(
        //     'gcod-custom-widget-scripts',
        //     get_template_directory_uri() . '/assets/js/gcod-widgets.js',
        //     array('jquery', 'gcod-slick-scripts'),
        //     true,
        //     wp_get_theme()->get('Version')
        // );
    }
}

// Init instance core to launch
return GcoAutumnElements::getInstance();
