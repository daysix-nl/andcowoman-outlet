<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    // wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


add_filter( 'use_block_editor_for_post', '__return_false' ); 


// only for gravity forms
function enqueue_custom_scripts_in_footer() {
    if (is_front_page()) { 
        echo '<script>
        document.addEventListener("gform_confirmation_loaded", function(event) {
            const formId = event.detail.formId;
            if (formId === 1) {
                const formWrapper = document.querySelector("#gform_wrapper_" + formId);
                const confirmationMessage = formWrapper.querySelector(".gform_confirmation_message");
                const errorMessage = formWrapper.querySelector(".validation_error");
                let formPosition = 0;

                if (confirmationMessage || errorMessage) {
                    formPosition = formWrapper.getBoundingClientRect().top + window.pageYOffset + 2000;
                    window.scrollTo({
                        top: formPosition,
                        behavior: "smooth"
                    });
                }
            }
        });
        </script>';
    }
}
add_action('wp_footer', 'enqueue_custom_scripts_in_footer');



// Menu

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}



add_action( 'after_setup_theme', 'day_six_config', 0 );

 

function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
            $menu[$m->ID]['target'] = $m->target;
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
        $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
            $menu[$m->menu_item_parent]['children'][$m->ID]["target"] = $m->target;
        }
    }
    return $menu;

}


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

register_sidebar( array(
    'name' => __( 'Filter sidebar', 'rmccollin' ),
    'id' => 'filter-sidebar',
    'description' => __( 'A widget area located to the left filter sidebar.', 'rmccollin' ),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => ' <div class="buttonwidget"><button></button></div></div>  
    <div class=border-hr></div>',
    'before_title' => '<p class="large fbody regular fcd d-none">',
    'after_title' => '</p>',
  ) );
   
  // Disables the block editor from managing widgets in the Gutenberg plugin.
  add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
   
  // Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
  add_filter( 'use_widgets_block_editor', '__return_false' );


// add_filter( 'rest_authentication_errors', function( $result ) {
//   return new WP_Error( 'rest_not_access', 'You can not access.', array( 'status' => 401 ) );;
// });

add_filter('xmlrpc_enabled', '__return_false');


// Active menu item
function vince_check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Overige teksten',
		'menu_title'	=> 'Extra vertaling',
		'menu_slug' 	=> 'extra_vertaling',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/**
 * Advanced Custom Fields Options function
 * Always fetch an Options field value from the default language
 */
function cl_acf_set_language() {
    return acf_get_setting('default_language');
  }
   
  function get_global_option($name) {
      add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
      $option = get_field($name, 'option');
      remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
      return $option;
  }

/**
 * Custom query for WooCommerce product needed by Connect Your IT's Perfect
 */
function handle_custom_query_var( $query, $query_vars ) {
    // if ($query['post_type'] == 'product') {
    if (array_key_exists('erp_product_id',$query_vars)) {
        // write_log('%%%% query_vars %%%%');
        // write_log($query_vars);
        if ( empty( $query_vars['erp_product_id'] )) {
            $query['tax_query'][] = array(
                'taxonomy'        => 'pa_erp_product_id',
                'operator'        => 'EXISTS',
            );
        } else {
            $query['tax_query'][] = array(
                'taxonomy'        => 'pa_erp_product_id',
                'field'           => 'slug',
                'terms'           => $query_vars['erp_product_id'],
                'operator'        => 'IN',
            );
        }
        // write_log($query);
    }
    return $query;
}
add_filter( 'woocommerce_product_data_store_cpt_get_products_query', 'handle_custom_query_var', 10, 2 );


/**
 * Gravity Wiz // Gravity Forms // Create Coupons with Gravity Forms for Gravity Forms, WooCommerce, or Easy Digital Downloads
 *
 * Create coupons via Gravity Forms submissions. Map the coupon code to a field on the GF form and voila!
 *
 * @version 1.2.1
 * @author  David Smith <david@gravitywiz.com>
 * @license GPL-2.0+
 * @link    WooCommerce:   http://gravitywiz.com/creating-coupons-woocommerce-gravity-forms/
 * @link    Gravity Forms: http://gravitywiz.com/creating-coupons-for-gf-coupons-add-on-with-gravity-forms/
 */
class GW_Create_Coupon {

	var $_args;

	public function __construct( $args = array() ) {

		// set our default arguments, parse against the provided arguments, and store for use throughout the class
		$this->_args = wp_parse_args( $args, array(
			'form_id'         => false,
			'source_field_id' => false,
			'name_field_id'   => false,
			'plugin'          => 'gf', // accepts: 'gf', 'wc', 'edd'
			'amount'          => 0,
			'type'            => '', // accepts: 'fixed_cart', 'percent', 'fixed_product', 'percent_product'
			'meta'            => array(),
		) );

		// do version check in the init to make sure if GF is going to be loaded, it is already loaded
		add_action( 'init', array( $this, 'init' ) );

	}

	public function init() {

		// make sure we're running the required minimum version of Gravity Forms and that WooCommerce is active
		if ( ! property_exists( 'GFCommon', 'version' ) || ! version_compare( GFCommon::$version, '1.8', '>=' ) ) {
			return;
		}

		add_action( 'gform_after_submission', array( $this, 'create_coupon' ), 10, 2 );

	}

	public function create_coupon( $entry, $form ) {

		if ( ! $this->is_applicable_form( $form ) ) {
			return;
		}

		$coupon_codes = $this->get_coupon_codes( $entry, $this->_args['source_field_id'] );

		foreach ( $coupon_codes as $coupon_code ) {

			if ( $this->_args['name_field_id'] === false ) {
				$coupon_name = $coupon_code;
			} else {
				$coupon_name = rgar( $entry, $this->_args['name_field_id'] );
				$coupon_name = $coupon_name === '' ? $coupon_code : $coupon_name;
			}

			$amount = $this->_args['amount'];
			$type   = $this->_args['type'];

			if ( is_callable( $amount ) ) {
				$amount = call_user_func( $amount );
			}

			$plugin_func = array( $this, sprintf( 'create_coupon_%s', $this->_args['plugin'] ) );

			if ( is_callable( $plugin_func ) ) {
				call_user_func( $plugin_func, $coupon_name, $coupon_code, $amount, $type, $entry, $form );
			}
		}

	}

	public function create_coupon_edd( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		if ( ! is_callable( 'edd_store_discount' ) ) {
			return;
		}

		$meta = wp_parse_args( $this->_args['meta'], array(
			'name'              => $coupon_name,
			'code'              => $coupon_code,
			'type'              => $type,
			'amount'            => $amount,
			'excluded_products' => array(),
			'expiration'        => '',
			'is_not_global'     => false,
			'is_single_use'     => false,
			'max_uses'          => '',
			'min_price'         => '',
			'product_condition' => '',
			'product_reqs'      => array(),
			'start'             => '',
			'uses'              => '',
		) );

		// EDD will set it's own defaults in the edd_store_discount() so let's filter out our own empty defaults (they're just here for easier reference)
		$meta = array_filter( $meta );

		// EDD takes a $details array which has some different keys than the meta, let's map the keys to the expected format
		$edd_post_keys = array(
			'max_uses'          => 'max',
			'product_reqs'      => 'products',
			'excluded_products' => 'excluded-products',
			'is_not_global'     => 'not_global',
			'is_single_use'     => 'use_once',
		);

		foreach ( $meta as $key => $value ) {
			$mod_key = rgar( $edd_post_keys, $key );
			if ( $mod_key ) {
				$meta[ $mod_key ] = $value;
			}
		}

		edd_store_discount( $meta );

	}

	public function create_coupon_gf( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		if ( ! class_exists( 'GFCoupons' ) ) {
			return;
		}

		// hack to load GF Coupons data.php file
		if ( is_callable( 'gf_coupons' ) ) {
			gf_coupons()->get_config( array( 'id' => 0 ), false );
		} else {
			/** @noinspection PhpDynamicAsStaticMethodCallInspection */
			GFCoupons::get_config( array( 'id' => 0 ), false );
		}

		$meta = wp_parse_args( $this->_args['meta'], array(
			'form_id'           => false,
			'coupon_name'       => $coupon_name,
			'coupon_code'       => strtoupper( $coupon_code ),
			'coupon_type'       => $type, // 'flat', 'percentage'
			'coupon_amount'     => $amount,
			'coupon_start'      => '', // MM/DD/YYYY
			'coupon_expiration' => '', // MM/DD/YYYY
			'coupon_limit'      => false,
			'coupon_stackable'  => false,
		) );

		$form_id = $meta['form_id'] ? $meta['form_id'] : 0;
		unset( $meta['form_id'] );

		foreach ( $meta as $key => $value ) {
			if ( $value instanceof Closure && is_callable( $value ) ) {
				$meta[ $key ] = call_user_func( $value, $entry, $form, $this );
			}
		}

		if ( is_callable( 'gf_coupons' ) ) {
			$meta['gravityForm']      = $form_id ? $form_id : 0;
			$meta['couponName']       = $meta['coupon_name'];
			$meta['couponCode']       = $meta['coupon_code'];
			$meta['couponAmountType'] = $meta['coupon_type'];
			$meta['couponAmount']     = $meta['coupon_amount'];
			$meta['startDate']        = $meta['coupon_start'];
			$meta['endDate']          = $meta['coupon_expiration'];
			$meta['usageLimit']       = $meta['coupon_limit'];
			$meta['isStackable']      = $meta['coupon_stackable'];
			$meta['usageCount']       = 0;
			gf_coupons()->insert_feed( $form_id, true, $meta );
		} else {
			/** @noinspection PhpUndefinedClassInspection */
			GFCouponsData::update_feed( 0, $form_id, true, $meta );
		}

	}

	/**
	 * Create a WooCommerce coupon.
	 *
	 * @link https://gist.github.com/mikejolley/3969579#file-gistfile1-txt
	 */
	public function create_coupon_wc( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		$start_date = rgar( $this->_args['meta'], 'start_date' );
		if ( $start_date === '' || ! strtotime( $start_date ) ) {
			$date       = current_datetime();
			$start_date = $date->format( 'Y-m-d H:i:s' );
		}

		// WooCommerce coupon uses the Post Title as the coupon code hence $coupon_code is assigned to Post Title and $coupon_name is assigned to the Post Content
		$coupon = array(
			'post_title'   => $coupon_code,
			'post_content' => $coupon_name,
			'post_status'  => 'publish',
			'post_author'  => 1,
			'post_type'    => 'shop_coupon',
			'post_date'    => $start_date,
		);

		$new_coupon_id = wp_insert_post( $coupon );

		$meta = wp_parse_args( $this->_args['meta'], array(
			'discount_type'              => $type,
			'coupon_amount'              => $amount,
			'individual_use'             => 'yes',
			'product_ids'                => '',
			'exclude_product_ids'        => '',
			'usage_limit'                => '1',
			'expiry_date'                => '',
			'apply_before_tax'           => 'no',
			'free_shipping'              => 'no',
			'exclude_sale_items'         => 'no',
			'product_categories'         => '',
			'exclude_product_categories' => '',
			'minimum_amount'             => '',
			'customer_email'             => '',
		) );

		foreach ( $meta as $meta_key => $meta_value ) {
			if ( $meta_value instanceof Closure && is_callable( $meta_value ) ) {
				$meta[ $meta_key ] = call_user_func( $meta_value, $entry, $form, $this );
			}
			update_post_meta( $new_coupon_id, $meta_key, $meta[ $meta_key ] );
		}

	}

	public function get_coupon_codes( $entry, $source_field_id ) {
		return array_filter( explode( "\n", rgar( $entry, $source_field_id ) ) );
	}

	function is_applicable_form( $form ) {

		$form_id = isset( $form['id'] ) ? $form['id'] : $form;

		return (int) $form_id === (int) $this->_args['form_id'];
	}

}

# Configuration

new GW_Create_Coupon( array(
	// ID of the form which will be used to create coupons
	'form_id'         => 1,
	// ID of the field whose value will be used as the coupon code
	'source_field_id' => 2,
	// ID of the field whose value will be used as the title of the coupon
	'name_field_id'   => 1,
	// which plugin the coupon should be created for (i.e. WooCommerce = 'wc')
	'plugin'          => 'wc', // accepts: 'gf', 'wc', 'edd'
	// type of coupon code to be created, available types will differ depending on the plugin
	'type'            => 'percent',
	// amount of the coupon discount
	'amount'          => 10,
	'meta'            => array(
		'individual_use' => 'no',
		'usage_limit'    => 1,
		'free_shipping'    => 'yes',
	)
) );


/* Put a unique ID on Gravity Form (single form ID) entries.
----------------------------------------------------------------------------------------*/
add_filter("gform_field_value_uuid", "get_unique");
function get_unique(){
    $prefix = "WEB"; // update the prefix here
    do {
        $unique = mt_rand();
        $unique = substr($unique, 0, 6);
        $unique = $prefix . $unique;
    } while (!check_unique($unique));
    return $unique;
}
function check_unique($unique) {
    global $wpdb;
    $table = $wpdb->prefix . 'rg_lead_detail';
    $form_id = 1; // update to the form ID your unique id field belongs to
    $field_id = 2; // update to the field ID your unique id is being prepopulated in
    $result = $wpdb->get_var("SELECT value FROM $table WHERE form_id = '$form_id' AND field_number = '$field_id' AND value = '$unique'");
    if(empty($result))
        return true;
    return false;
}


// Hide WordPress Admin Notifications programmatically
function pr_disable_admin_notices() {
        global $wp_filter;
            if ( is_user_admin() ) {
                if ( isset( $wp_filter['user_admin_notices'] ) ) {
                                unset( $wp_filter['user_admin_notices'] );
                }
            } elseif ( isset( $wp_filter['admin_notices'] ) ) {
                        unset( $wp_filter['admin_notices'] );
            }
            if ( isset( $wp_filter['all_admin_notices'] ) ) {
                        unset( $wp_filter['all_admin_notices'] );
            }
    }
add_action( 'admin_print_scripts', 'pr_disable_admin_notices' );




 
    
/*
|--------------------------------------------------------------------------
| Wordpress menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function customize_dashboard_menu() {
    global $menu;

    // Vervang "super admin" door de gebruikersnamen die je wilt toestaan.
    $allowed_users = array('kevin', 'rob');

    // Haal de huidige ingelogde gebruiker op.
    $current_user = wp_get_current_user();
    $current_user_login = $current_user->user_login;

    // Verberg specifieke menu-onderdelen voor alle gebruikers behalve toegestane gebruikers.
    if (!in_array($current_user_login, $allowed_users)) {
        // Hier kun je de volledige URL/querystrings vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_url = array(
            'edit.php',
            'edit.php?post_type=acf-field-group',
            'edit-comments.php',
            'themes.php',
            'plugins.php',
            // 'users.php',
            'options-general.php',
            'tools.php',
            'admin.php?page=ai1wm_export'
            // Voeg hier andere URL's/querystrings toe van de items die je wilt verbergen op basis van de URL.
        );

        // Hier kun je de classes vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_class = array(
            'toplevel_page_wppusher', 
            'toplevel_page_ai1wm_export',
            'menu-top toplevel_page_mlang',
            'toplevel_page_rank-math',
            // Voeg hier andere classes toe van de items die je wilt verbergen op basis van de class.
        );

        foreach ($menu as $key => $item) {
            // Verberg op basis van URL/querystring.
            if (in_array($item[2], $hidden_menu_items_by_url)) {
                unset($menu[$key]);
            }

            // Verberg op basis van class.
            foreach ($hidden_menu_items_by_class as $class) {
                if (strpos($item[4], $class) !== false) {
                    unset($menu[$key]);
                    break;
                }
            }
        }
    }
}

add_action('admin_menu', 'customize_dashboard_menu');



/*
|--------------------------------------------------------------------------
| Wordpress topbar
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function add_custom_admin_bar_styles() {
    // Controleren of de gebruiker is ingelogd
    if (is_user_logged_in()) {
        // Gebruiker met de gebruikersnaam "xxx" uitsluiten
        $allowed_users = array('kevin', 'rob');
        $user = wp_get_current_user();
        if (in_array($user->user_login, $allowed_users)) {
            return;
        }

        // Voeg hier de CSS-styling toe voor de menu-items die je wilt aanpassen
        $custom_styles = "
            #wp-admin-bar-comments { display: none !important; }
            #wp-admin-bar-customize { display: none !important; }
            #wp-admin-bar-new-content { display: none !important; }
            #wp-admin-bar-rank-math { display: none !important; }
            #dashboard_primary { display: none !important; }
            #dashboard_quick_press { display: none !important; }
            #dashboard_activity  { display: none !important; }
            #welcome-panel { display: none !important; }
            #dashboard_site_health { display: none !important; }
            #rg_forms_dashboard { display: none !important; }
			#toplevel_page_andcoperfect-andcoperfect-admin-page { display: none !important; }
			#toplevel_page_wc-status-tab-logs { display: none !important; }
			#toplevel_page_crontrol_admin_manage_page { display: none !important; }
			#toplevel_page_gf_edit_forms { display: none !important; }
			#menu-posts-wpsl_stores { display: none !important; }
			#menu-posts-product { display: none !important; }
			#toplevel_page_tm-menu-main { display: none !important; }
			#toplevel_page_litespeed { display: none !important; }
			#rank_math_dashboard_widget { display: none !important; }
			#menu-dashboard ul { display: none !important; }
            /* Voeg hier meer CSS-styling toe indien nodig */
        ";

        // Voeg de CSS-styling toe aan zowel de front-end als het WordPress-dashboard
        echo '<style type="text/css">' . $custom_styles . '</style>';
        echo '<style type="text/css" id="custom-admin-bar-styles">' . $custom_styles . '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_styles');
add_action('admin_head', 'add_custom_admin_bar_styles');



/*
|--------------------------------------------------------------------------
| Wordpress footer
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function vervang_dashboard_footer_tekst() {
    echo 'Day Six Digitale Communicatie B.V.';
}

add_filter('admin_footer_text', 'vervang_dashboard_footer_tekst');



/*
|--------------------------------------------------------------------------
| Wordpress admin URL
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Functie voor het doorverwijzen van "/backend" naar "/wp-login.php"
function redirect_backend_to_wp_login() {
    if ($_SERVER['REQUEST_URI'] == '/backend') {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('init', 'redirect_backend_to_wp_login');



/*
|--------------------------------------------------------------------------
| E-mailadres verzenden van mails
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_wp_mail_from($original_email_address) {
    // Vervang 'jouw@emailadres.com' door het gewenste specifieke e-mailadres
    return 'info@meandco.nl';
}

function custom_wp_mail_from_name($original_email_from) {
    // Vervang 'Jouw Naam' door de gewenste afzender naam
    return '&Co Woman';
}

add_filter('wp_mail_from', 'custom_wp_mail_from');
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');


/*
|--------------------------------------------------------------------------
| Hide Super Admin
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function exclude_user_kevin_from_users_list($query) {
    if (!is_admin()) {
        return; // We voeren deze actie alleen uit in de backend
    }

    $current_user = wp_get_current_user();

    // Controleer of de huidige gebruiker "super admin" is
    if ($current_user->user_login === 'kevin') {
        return; // "super admin" kan zijn eigen gebruikersgegevens zien
    }

    // Haal de huidige gebruiker op
    $current_user_id = $current_user->ID;

    // Haal de gebruiker "super admin" op
    $kevin_user = get_user_by('login', 'kevin');

    // Controleer of "super admin" bestaat en niet dezelfde is als de huidige gebruiker
    if ($kevin_user && $current_user_id !== $kevin_user->ID) {
        // Voeg een voorwaarde toe aan de gebruikersquery om "super admin" te verbergen voor andere gebruikers
        $query->query_vars['exclude'] = array($kevin_user->ID);
    }
}
add_action('pre_get_users', 'exclude_user_kevin_from_users_list');



/*
|--------------------------------------------------------------------------
| Hide auteur
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function verwijder_auteur_kolom($columns) {
    // Controleer of de 'auteur' kolom aanwezig is in de array van kolommen
    if (isset($columns['author'])) {
        // Verwijder de 'auteur' kolom uit de array
        unset($columns['author']);
    }
    return $columns;
}
add_filter('manage_posts_columns', 'verwijder_auteur_kolom');
add_filter('manage_pages_columns', 'verwijder_auteur_kolom');
// Voeg indien nodig filters toe voor aangepaste posttypes, bijv. 'book' => 'manage_book_columns'






function get_my_products( $request ) {
    global $sitepress;
    $queryParams = $request->get_query_params();
    $paged = isset($queryParams['page']) ? $queryParams['page'] : 1;
    $url = isset($queryParams['full_url']) ? $queryParams['full_url'] : null;
    if ($url) {
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['path'])) {
            $path = $parsedUrl['path'];

        if (strpos($path, '/product-category/') !== false) {
            $exploded = explode('/product-category', $path);

            if (isset($exploded[1])) {
                $taxonomy = str_replace("/", "", $exploded[1]);
                
            } else {
            $taxonomy = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'fields' => 'slugs',
            ));
        }
        } else {
            $taxonomy = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'fields' => 'slugs',
            ));
        }
        } 
    }

    $search = isset($queryParams['s']) ? $queryParams['s'] : null;
    $kleur = isset($queryParams['filter_kleur']) ? $queryParams['filter_kleur'] : null;
    $maat = isset($queryParams['filter_maat']) ? $queryParams['filter_maat'] : null;
    $new_lang = isset($queryParams['lang']) ? $queryParams['lang'] : null;
    
    $sitepress->switch_lang($new_lang);
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 24,
        'paged' => $paged,
        'orderby' => 'menu_order',
        'order' => 'DESC',
        's' => $search,
        'meta_query' => array(
            array(
                'key' => '_stock_status',
                'value' => 'instock',
                'compare' => '=',
            )
        ),  
    );

    $tax_queries = array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $taxonomy,
        )
    );

    if (!empty($kleur)) {
        $tax_queries[] = array(
            'taxonomy' => 'pa_kleur',
            'field' => 'slug',
            'terms' => array($kleur),
            'operator' => 'AND',
        );
    }

    if (!empty($maat)) {
        $tax_queries[] = array(
            'taxonomy' => 'pa_maat',
            'field' => 'slug',
            'terms' => array($maat),
            'operator' => 'AND',
        );
    }

    $args['tax_query'] = $tax_queries;


  $query = new WP_Query($args);
  $products = [];

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
        $product = wc_get_product(get_the_ID());

        // For gallery images
        $gallery_image_ids = get_post_meta(get_the_ID(), '_product_image_gallery', true);
        $gallery_images = [];
        if ($gallery_image_ids) {
            $gallery_image_ids = explode(',', $gallery_image_ids);
            foreach($gallery_image_ids as $image_id) {
                $gallery_images[] = wp_get_attachment_image_url($image_id, 'single-post-thumbnail');
            }
        }

        // For thumbnail
        $thumbnail_url = get_the_post_thumbnail_url();

        // For categories
        $term_ids = wp_get_post_terms(get_the_ID(), 'product_cat', ['fields' => 'ids']);
        $categories_array = [];
        foreach ($term_ids as $term_id) {
            $term = get_term($term_id, 'product_cat');
            if ($term) {
                $categories_array[] = $term->name;
            }
        }
        $categories_array = array_reverse($categories_array); 

        $local_url = get_the_post_thumbnail_url(get_the_ID());

        $products[] = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'permalink' => get_the_permalink(),
            'thumbnail_url' => $local_url,
            'price_html' => $product->get_price_html(),
            'categories' => $categories_array, 
            'gallery_images' => isset($gallery_image_ids[1]) ? wp_get_attachment_image_url($gallery_image_ids[1], 'single-post-thumbnail') : null,
        );
    }
  }

  return new WP_REST_Response($products, 200);
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'myproducts/v1', '/list', array(
    'methods' => 'GET',
    'callback' => 'get_my_products',
  ) );
});



// function rewrite_image_urls_js() {
//     $current_domain = $_SERVER['HTTP_HOST'];
//     if ( 'andcowoman.local' === $current_domain ) {
//         echo "
//         <script>
//         document.addEventListener('DOMContentLoaded', function() {
//             const local_domain = 'http://andcowoman.local'; // Replace with your local domain
//             const production_domain = 'https://andcowoman.com'; // Replace with your production domain

//             document.querySelectorAll('img').forEach(function(img) {
//                 const src = img.getAttribute('src');
//                 if (src) {
//                     img.setAttribute('src', src.replace(local_domain, production_domain));
//                 }
//             });
//         });
//         </script>
//         ";
//     }
// }

// add_action('wp_footer', 'rewrite_image_urls_js');
