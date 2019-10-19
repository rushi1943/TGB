<?php
add_action( 'redux/options/houzez_options/section/add-property-page', 'houzez_edit_add_property_page_section');
function houzez_edit_add_property_page_section( $ReduxData ) {

    $ReduxData['fields'][] = array(
            'id'       => 'built_within',
            'type'     => 'textarea',
            'title'    => esc_html__('Built Within', 'houzez'),
            'subtitle' => '',
            'desc'    => esc_html__('Add comma separate strings', 'houzez'),
            'default'  => 'Within 1 year, Within 2 year, Within 3 year',
        );

    $ReduxData['fields'][] = array(
            'id'       => 'nearest_station_time',
            'type'     => 'textarea',
            'title'    => esc_html__('Nearest Station Time', 'houzez'),
            'subtitle' => '',
            'desc'    => esc_html__('Add comma separate strings', 'houzez'),
            'default'  => 'Within 1 min, Within 2 min, Within 3 min',
        );

    $ReduxData['fields'][] = array(
            'id'       => 'beds_add_prop',
            'type'     => 'textarea',
            'title'    => esc_html__('Bedrooms', 'houzez'),
            'subtitle' => '',
            'desc'    => esc_html__('Add comma separated', 'houzez'),
            'default'  => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, Studio, Loft',
        );

    $ReduxData['fields'][] = array(
            'id'       => 'baths_add_prop',
            'type'     => 'textarea',
            'title'    => esc_html__('Bathrooms', 'houzez'),
            'subtitle' => '',
            'desc'    => esc_html__('Add comma separated', 'houzez'),
            'default'  => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
        );

    $ReduxData['fields'][336]['options']['enabled'] = array(
        'description-price'         => esc_html__('Description & Price', 'houzez'),
        'media'  => esc_html__('Property Media', 'houzez'),
        'details'      => esc_html__('Property Details', 'houzez'),
        'cost_breakdown'      => esc_html__('Cost Breakdown', 'houzez'),
        'features'      => esc_html__('Property features', 'houzez'),
        'location'      => esc_html__('Property location', 'houzez'),
        'virtual_tour'  => esc_html__('360° Virtual Tour', 'houzez'),
        'floorplans'  => esc_html__('Floor Plans', 'houzez'),
        'multi-units'        => esc_html__('Multi Units / Sub Properties', 'houzez'),
        'agent_info'    => esc_html__('Agent Information', 'houzez'),
        'private_note'    => esc_html__('Private Note', 'houzez')
    );

     /*echo '<pre>';
     print_r( $ReduxData );
     echo '</pre>';*/
  
  return $ReduxData;
}



add_action( 'redux/options/houzez_options/section/advanced-search-houzez', 'houzez_edit_advanced_search_houzez_section');
function houzez_edit_advanced_search_houzez_section( $ReduxData ) {

    $ReduxData['fields'][] = array(
            'id'       => 'rent_frequency',
            'type'     => 'textarea',
            'title'    => esc_html__('Rent Frequency', 'houzez'),
            'subtitle' => '',
            'desc'    => esc_html__('Add comma separate strings', 'houzez'),
            'default'  => 'Daily, Weekly, Monthly',
        );

     /*echo '<pre>';
     print_r( $ReduxData );
     echo '</pre>';*/
  
  return $ReduxData;
}

add_action( 'redux/options/houzez_options/section/property-showhide', 'houzez_edit_add_property_showhide_section');
function houzez_edit_add_property_showhide_section( $ReduxData ) {

    $ReduxData['fields'][343]['options'] = array(
        'prop_id' => esc_html__('Property ID', 'houzez'),
        'prop_type' => esc_html__('Type', 'houzez'),
        'prop_status' => esc_html__('Status', 'houzez'),
        'prop_label' => esc_html__('Label', 'houzez'),
        'sale_rent_price' => esc_html__('Sale or Rent Price', 'houzez'),
        'second_price' => esc_html__('Rent Frequency', 'houzez'),
        'price_postfix' => esc_html__('After Price Label (ex: monthly)', 'houzez'),
        'price_prefix' => esc_html__('Price Prefix (ex: Start From)', 'houzez'),
        'bedrooms' => esc_html__('Bedrooms', 'houzez'),
        'bathrooms' => esc_html__('Bathrooms', 'houzez'),
        'area_size' => esc_html__('Area Size', 'houzez'),
        'land_area' => esc_html__('Land Area', 'houzez'),
        'garages' => esc_html__('Garage', 'houzez'),
        'garage_size' => esc_html__('Garage Size', 'houzez'),
        'year_built' => esc_html__('Year Built', 'houzez'),
        'video_url' => esc_html__('Video Url', 'houzez'),
        'neighborhood' => esc_html__('Neighborhood', 'houzez'),
        'city' => esc_html__('City', 'houzez'),
        'station' => esc_html__('Station', 'houzez'),
        'postal_code' => esc_html__('Postal Code / Zip', 'houzez'),
        'state' => esc_html__('County / State', 'houzez'),
        'country' => esc_html__('Country', 'houzez'),
        'additional_details' => esc_html__('Additional Details', 'houzez'),
        'built_within' => esc_html__('Built Within', 'houzez'),
        'building_name' => esc_html__('Building Name', 'houzez'),
        'floor' => esc_html__('Floor', 'houzez'),
        'nearest_station' => esc_html__('Nearest Station Time', 'houzez'),
        'near_station_name' => esc_html__('Nearest Station Name', 'houzez'),
        'train_line' => esc_html__('Train Line', 'houzez'),
        'local_area' => esc_html__('Local Area', 'houzez'),
        'available_from' => esc_html__('Available From', 'houzez'),
        'guarantor' => esc_html__('Guarantor', 'houzez'),
        'lease_term' => esc_html__('Lease Term', 'houzez'),
        'payment_methods' => esc_html__('Payment Methods', 'houzez'),
        'full_address_private' => esc_html__('Full Address', 'houzez'),
        'admin_private_note' => esc_html__('Private Note to admin', 'houzez'),
    );

     /*echo '<pre>';
     print_r( $ReduxData );
     echo '</pre>';*/
  
  return $ReduxData;
}

add_action( 'redux/options/houzez_options/section/property-required-fields', 'houzez_edit_property_required_fields_section');
function houzez_edit_property_required_fields_section( $ReduxData ) {

    $ReduxData['fields'][344]['options'] = array(
        'title' => esc_html__('Title', 'houzez'),
        'prop_type' => esc_html__('Type', 'houzez'),
        'prop_status' => esc_html__('Status', 'houzez'),
        'prop_labels' => esc_html__('Label', 'houzez'),
        'sale_rent_price' => esc_html__('Sale or Rent Price', 'houzez'),
        'prop_second_price' => esc_html__('Rent Frequency', 'houzez'),
        'price_label' => esc_html__('After Price Label', 'houzez'),
        'prop_id' => esc_html__('Property ID', 'houzez'),
        'bedrooms' => esc_html__('Bedrooms', 'houzez'),
        'bathrooms' => esc_html__('Bathrooms', 'houzez'),
        'area_size' => esc_html__('Area Size', 'houzez'),
        'land_area' => esc_html__('Land Area', 'houzez'),
        'garages' => esc_html__('Garages', 'houzez'),
        'year_built' => esc_html__('Year Built', 'houzez'),
        'property_map_address' => esc_html__('Map Address', 'houzez'),
        'neighborhood' => esc_html__('Neighborhood', 'houzez'),
        'city' => esc_html__('City', 'houzez'),
        'station' => esc_html__('Station', 'houzez'),
        'postal_code' => esc_html__('Postal Code / Zip', 'houzez'),
        'state' => esc_html__('County / State', 'houzez'),
        'built_within' => esc_html__('Built Within', 'houzez'),
        'building_name' => esc_html__('Building Name', 'houzez'),
        'floor' => esc_html__('Floor', 'houzez'),
        'nearest_station' => esc_html__('Nearest Station Time', 'houzez'),
        'near_station_name' => esc_html__('Nearest Station Name', 'houzez'),
        'train_line' => esc_html__('Train Line', 'houzez'),
        'local_area' => esc_html__('Local Area', 'houzez'),
        'available_from' => esc_html__('Available From', 'houzez'),
        'guarantor' => esc_html__('Guarantor', 'houzez'),
        'lease_term' => esc_html__('Lease Term', 'houzez'),
        'payment_methods' => esc_html__('Payment Methods', 'houzez'),
        'full_address_private' => esc_html__('Full Address', 'houzez'),
        'admin_private_note' => esc_html__('Private Note to admin', 'houzez'),
    );

     /*echo '<pre>';
     print_r( $ReduxData );
     echo '</pre>';*/
  
  return $ReduxData;
}


add_action( 'redux/options/houzez_options/section/adv-search-fields', 'houzez_edit_adv_search_fields_section');
function houzez_edit_adv_search_fields_section( $ReduxData ) {

    $ReduxData['fields'][500]['options'] = array(
        'keyword' => esc_html__('Keyword', 'houzez'),
        'countries' => esc_html__('Countries', 'houzez'),
        'states' => esc_html__('States', 'houzez'),
        'cities' => esc_html__('Cities', 'houzez'),
        'areas' => esc_html__('Areas', 'houzez'),
        'status' => esc_html__('Status', 'houzez'),
        'type' => esc_html__('Type', 'houzez'),
        'beds' => esc_html__('Bedrooms', 'houzez'),
        'baths' => esc_html__('Bathrooms', 'houzez'),
        'min_area' => esc_html__('Min Area', 'houzez'),
        'max_area' => esc_html__('Max Area', 'houzez'),
        'min_price' => esc_html__('Min Price', 'houzez'),
        'max_price' => esc_html__('Max Price', 'houzez'),
        'price_slider' => esc_html__('Price Range Slider', 'houzez'),
        'area_slider' => esc_html__('Area Range Slider', 'houzez'),
        'property_id' => esc_html__('Property ID', 'houzez'),
        'label' => esc_html__('Label', 'houzez'),
        'date_field' => esc_html__('Date', 'houzez'),
        'other_features' => esc_html__('Other Features', 'houzez'),
        'station' => esc_html__('Station', 'houzez'),
        'from_station' => esc_html__('From Station', 'houzez'),
        'building_age' => esc_html__('Building Age', 'houzez'),
    );

    $ReduxData['fields'][501]['options'] = array(
        'keyword' => esc_html__('Keyword', 'houzez'),
        'countries' => esc_html__('Countries', 'houzez'),
        'states' => esc_html__('States', 'houzez'),
        'cities' => esc_html__('Cities', 'houzez'),
        'areas' => esc_html__('Areas', 'houzez'),
        'status' => esc_html__('Status', 'houzez'),
        'type' => esc_html__('Type', 'houzez'),
        'beds' => esc_html__('Bedrooms', 'houzez'),
        'baths' => esc_html__('Bathrooms', 'houzez'),
        'min_area' => esc_html__('Min Area', 'houzez'),
        'max_area' => esc_html__('Max Area', 'houzez'),
        'min_price' => esc_html__('Min Price', 'houzez'),
        'max_price' => esc_html__('Max Price', 'houzez'),
        'price_slider' => esc_html__('Price Range Slider', 'houzez'),
        'area_slider' => esc_html__('Area Range Slider', 'houzez'),
        'property_id' => esc_html__('Property ID', 'houzez'),
        'label' => esc_html__('Label', 'houzez'),
        'date_field' => esc_html__('Date', 'houzez'),
        'other_features' => esc_html__('Other Features', 'houzez'),
        'station' => esc_html__('Station', 'houzez'),
        'from_station' => esc_html__('From Station', 'houzez'),
        'building_age' => esc_html__('Building Age', 'houzez'),
    );

     /*echo '<pre>';
     print_r( $ReduxData );
     echo '</pre>';*/
  
  return $ReduxData;
}


add_action( 'widgets_init', 'houzez_unregister_widgets', 2 );
function houzez_unregister_widgets() {
 
    // remove Parent registered Widget
    unregister_widget( 'HOUZEZ_advanced_search' );
 
    // register a custom Widget (if needed)
    register_widget( 'HOUZEZ_CHILD_advanced_search' );
}
require_once ( get_stylesheet_directory() . '/inc/widgets/houzez-advanced-search.php' );


add_action('wp_enqueue_scripts', 'houzez_child_theme', 1);
function houzez_child_theme() {

    $minify_js = houzez_option('minify_js');
    $js_minify_prefix = '';
    if ($minify_js != 0) {
        $js_minify_prefix = '.min';
    }

    $prop_req_fields = houzez_option('required_fields');

    $station = isset($_GET['station']) ? sanitize_text_field($_GET['station']) : '';
    $from_station = isset($_GET['from-station']) ? sanitize_text_field($_GET['from-station']) : '';
    $building_age = isset($_GET['building-age']) ? sanitize_text_field($_GET['building-age']) : '';

    wp_dequeue_script('houzez_ajax_calls');
    wp_enqueue_script('houzez_ajax_calls', get_stylesheet_directory_uri() . '/js/houzez_ajax_calls.js', array('jquery'), HOUZEZ_THEME_VERSION, true);

    wp_localize_script('houzez_ajax_calls', 'HOUZEZ_CHILD_ajaxcalls_vars',
        array(
            'station' => $station,
            'from_station' => $from_station,
            'building_age' => $building_age
        )
    );

    wp_dequeue_script('houzez_property');
    wp_enqueue_script('houzez_property', get_stylesheet_directory_uri() . '/js/houzez_property.js', array('jquery', 'plupload', 'jquery-ui-sortable'), HOUZEZ_THEME_VERSION, true);

    wp_localize_script('houzez_property', 'houzezChildProperty',
        array(
            'neighborhood' => $prop_req_fields['neighborhood'],
            'city' => $prop_req_fields['city'],
            'state' => $prop_req_fields['state'],
            'postal_code' => $prop_req_fields['postal_code'],
            'station' => $prop_req_fields['station'],
            'built_within' => $prop_req_fields['built_within'],
            'building_name' => $prop_req_fields['building_name'],
            'floor' => $prop_req_fields['floor'],
            'nearest_station' => $prop_req_fields['nearest_station'],
            'near_station_name' => $prop_req_fields['near_station_name'],
            'train_line' => $prop_req_fields['train_line'],
            'local_area' => $prop_req_fields['local_area'],
            'available_from' => $prop_req_fields['available_from'],
            'guarantor' => $prop_req_fields['guarantor'],
            'lease_term' => $prop_req_fields['lease_term'],
            'payment_methods' => $prop_req_fields['payment_methods'],
            'full_address_private' => $prop_req_fields['full_address_private'],
            'admin_private_note' => $prop_req_fields['admin_private_note'],
        )
    );
}

function houzez_submit_listing($new_property) {
    global $current_user;

    wp_get_current_user();
    $userID = $current_user->ID;
    $listings_admin_approved = houzez_option('listings_admin_approved');
    $edit_listings_admin_approved = houzez_option('edit_listings_admin_approved');
    $enable_paid_submission = houzez_option('enable_paid_submission');

    // Title
    if( isset( $_POST['prop_title']) ) {
        $new_property['post_title'] = sanitize_text_field( $_POST['prop_title'] );
    }

    if( $enable_paid_submission == 'membership' ) {
        $user_submit_has_no_membership = isset($_POST['user_submit_has_no_membership']) ? $_POST['user_submit_has_no_membership'] : '';
    } else {
        $user_submit_has_no_membership = 'no';
    }

    // Description
    if( isset( $_POST['prop_des'] ) ) {
        $new_property['post_content'] = wp_kses_post( $_POST['prop_des'] );
    }

    $new_property['post_author'] = $userID;

    $submission_action = $_POST['action'];
    $prop_id = 0;

    if( $submission_action == 'add_property' ) {

        if( $listings_admin_approved != 'yes' && ( $enable_paid_submission == 'no' || $enable_paid_submission == 'free_paid_listing' || $enable_paid_submission == 'membership' ) ) {
            if( $user_submit_has_no_membership == 'yes' ) {
                $new_property['post_status'] = 'draft';
            } else {
                $new_property['post_status'] = 'publish';
            }
        } else {
            if( $user_submit_has_no_membership == 'yes' && $enable_paid_submission = 'membership' ) {
                $new_property['post_status'] = 'draft';
            } else {
                $new_property['post_status'] = 'pending';
            }
        }

        $prop_id = wp_insert_post( $new_property );

        if( $prop_id > 0 ) {
            $submitted_successfully = true;
            if( $enable_paid_submission == 'membership'){ // update package status
                houzez_update_package_listings( $userID );
            }
            do_action( 'wp_insert_post', 'wp_insert_post' ); // Post the Post
        }
    }else if( $submission_action == 'update_property' ) {
        $new_property['ID'] = intval( $_POST['prop_id'] );

        if( get_post_status( intval( $_POST['prop_id'] ) ) == 'draft' ) {
            if( $enable_paid_submission == 'membership') {
                houzez_update_package_listings($userID);
            }
            if( $listings_admin_approved != 'yes' && ( $enable_paid_submission == 'no' || $enable_paid_submission == 'free_paid_listing' || $enable_paid_submission == 'membership' ) ) {
                $new_property['post_status'] = 'publish';
            } else {
                $new_property['post_status'] = 'pending';
            }
        } elseif( $edit_listings_admin_approved == 'yes' ) {
                $new_property['post_status'] = 'pending';
        }
        $prop_id = wp_update_post( $new_property );

    }

    if( $prop_id > 0 ) {


        if( $user_submit_has_no_membership == 'yes' ) {
            update_user_meta( $userID, 'user_submit_has_no_membership', $prop_id );
        }

        // Add price post meta
        if( isset( $_POST['prop_price'] ) ) {
            update_post_meta( $prop_id, 'fave_property_price', sanitize_text_field( $_POST['prop_price'] ) );

            if( isset( $_POST['prop_label'] ) ) {
                update_post_meta( $prop_id, 'fave_property_price_postfix', sanitize_text_field( $_POST['prop_label']) );
            }
        }

        //price prefix
        if( isset( $_POST['prop_price_prefix'] ) ) {
            update_post_meta( $prop_id, 'fave_property_price_prefix', sanitize_text_field( $_POST['prop_price_prefix']) );
        }

        // Second Price
        if( isset( $_POST['prop_sec_price'] ) ) {
            update_post_meta( $prop_id, 'fave_property_sec_price', sanitize_text_field( $_POST['prop_sec_price'] ) );
        }

        // Area Size
        if( isset( $_POST['prop_size'] ) ) {
            update_post_meta( $prop_id, 'fave_property_size', sanitize_text_field( $_POST['prop_size'] ) );
        }

        // Area Size Prefix
        if( isset( $_POST['prop_size_prefix'] ) ) {
            update_post_meta( $prop_id, 'fave_property_size_prefix', sanitize_text_field( $_POST['prop_size_prefix'] ) );
        }

        // Land Area Size
        if( isset( $_POST['prop_land_area'] ) ) {
            update_post_meta( $prop_id, 'fave_property_land', sanitize_text_field( $_POST['prop_land_area'] ) );
        }

        // Land Area Size Prefix
        if( isset( $_POST['prop_land_area_prefix'] ) ) {
            update_post_meta( $prop_id, 'fave_property_land_postfix', sanitize_text_field( $_POST['prop_land_area_prefix'] ) );
        }

        // Bedrooms
        if( isset( $_POST['prop_beds'] ) ) {
            update_post_meta( $prop_id, 'fave_property_bedrooms', sanitize_text_field( $_POST['prop_beds'] ) );
        }

        // Bathrooms
        if( isset( $_POST['prop_baths'] ) ) {
            update_post_meta( $prop_id, 'fave_property_bathrooms', sanitize_text_field( $_POST['prop_baths'] ) );
        }

        // Garages
        if( isset( $_POST['prop_garage'] ) ) {
            update_post_meta( $prop_id, 'fave_property_garage', sanitize_text_field( $_POST['prop_garage'] ) );
        }

        // Garages Size
        if( isset( $_POST['prop_garage_size'] ) ) {
            update_post_meta( $prop_id, 'fave_property_garage_size', sanitize_text_field( $_POST['prop_garage_size'] ) );
        }

        // Virtual Tour
        if( isset( $_POST['virtual_tour'] ) ) {
            update_post_meta( $prop_id, 'fave_virtual_tour', $_POST['virtual_tour'] );
        }

        // Year Built
        if( isset( $_POST['prop_year_built'] ) ) {
            update_post_meta( $prop_id, 'fave_property_year', sanitize_text_field( $_POST['prop_year_built'] ) );
        }

        // Property ID
        $auto_property_id = houzez_option('auto_property_id');
        if( $auto_property_id != 1 ) {
            if (isset($_POST['property_id'])) {
                update_post_meta($prop_id, 'fave_property_id', sanitize_text_field($_POST['property_id']));
            }
        } else {
                update_post_meta($prop_id, 'fave_property_id', $prop_id );
        }

        // Property Video Url
        if( isset( $_POST['prop_video_url'] ) ) {
            update_post_meta( $prop_id, 'fave_video_url', sanitize_text_field( $_POST['prop_video_url'] ) );
        }


        // Start New Fields 

        if( isset( $_POST['station'] ) && ( $_POST['station'] != '-1' ) ) {
            wp_set_object_terms( $prop_id, $_POST['station'], 'property_station' );
        }

        if( isset( $_POST['full_address_private'] ) ) {
            update_post_meta( $prop_id, 'fave_full_address_private', sanitize_text_field( $_POST['full_address_private'] ) );
        }

        if( isset( $_POST['admin_private_note'] ) ) {
            update_post_meta( $prop_id, 'fave_admin_private_note', sanitize_text_field( $_POST['admin_private_note'] ) );
        }

        if( isset( $_POST['built_within'] ) ) {
            update_post_meta( $prop_id, 'fave_built_within', sanitize_text_field( $_POST['built_within'] ) );
        }

        if( isset( $_POST['building_name'] ) ) {
            update_post_meta( $prop_id, 'fave_building_name', sanitize_text_field( $_POST['building_name'] ) );
        }

        if( isset( $_POST['floor'] ) ) {
            update_post_meta( $prop_id, 'fave_floor', sanitize_text_field( $_POST['floor'] ) );
        }

        if( isset( $_POST['nearest_station'] ) ) {
            update_post_meta( $prop_id, 'fave_nearest_station', sanitize_text_field( $_POST['nearest_station'] ) );
        }

        if( isset( $_POST['near_station_name'] ) ) {
            update_post_meta( $prop_id, 'fave_near_station_name', sanitize_text_field( $_POST['near_station_name'] ) );
        }

        if( isset( $_POST['train_line'] ) ) {
            update_post_meta( $prop_id, 'fave_train_line', sanitize_text_field( $_POST['train_line'] ) );
        }

        if( isset( $_POST['local_area'] ) ) {
            update_post_meta( $prop_id, 'fave_local_area', sanitize_text_field( $_POST['local_area'] ) );
        }

        if( isset( $_POST['available_from'] ) ) {
            update_post_meta( $prop_id, 'fave_available_from', sanitize_text_field( $_POST['available_from'] ) );
        }

        if( isset( $_POST['guarantor'] ) ) {
            update_post_meta( $prop_id, 'fave_guarantor', sanitize_text_field( $_POST['guarantor'] ) );
        }

        if( isset( $_POST['lease_term'] ) ) {
            update_post_meta( $prop_id, 'fave_lease_term', sanitize_text_field( $_POST['lease_term'] ) );
        }

        if( isset( $_POST['payment_methods'] ) ) {
            update_post_meta( $prop_id, 'fave_payment_methods', sanitize_text_field( $_POST['payment_methods'] ) );
        }

        if( isset( $_POST['mc_rent'] ) ) {
            update_post_meta( $prop_id, 'fave_mc_rent', sanitize_text_field( $_POST['mc_rent'] ) );
        }

        if( isset( $_POST['mc_maintenence_fee'] ) ) {
            update_post_meta( $prop_id, 'fave_mc_maintenence_fee', sanitize_text_field( $_POST['mc_maintenence_fee'] ) );
        }

        if( isset( $_POST['mc_utilities'] ) ) {
            update_post_meta( $prop_id, 'fave_mc_utilities', sanitize_text_field( $_POST['mc_utilities'] ) );
        }

        if( isset( $_POST['mc_total_monthly_cost'] ) ) {
            update_post_meta( $prop_id, 'fave_mc_total_monthly_cost', sanitize_text_field( $_POST['mc_total_monthly_cost'] ) );
        }

        if( isset( $_POST['mic_deposit'] ) ) {
            update_post_meta( $prop_id, 'fave_mic_deposit', sanitize_text_field( $_POST['mic_deposit'] ) );
        }

        if( isset( $_POST['mic_key_money'] ) ) {
            update_post_meta( $prop_id, 'fave_mic_key_money', sanitize_text_field( $_POST['mic_key_money'] ) );
        }

        if( isset( $_POST['min_agency_fee'] ) ) {
            update_post_meta( $prop_id, 'fave_min_agency_fee', sanitize_text_field( $_POST['min_agency_fee'] ) );
        }

        if( isset( $_POST['mic_guarantor_fee'] ) ) {
            update_post_meta( $prop_id, 'fave_mic_guarantor_fee', sanitize_text_field( $_POST['mic_guarantor_fee'] ) );
        }

        if( isset( $_POST['mic_advanced_rent_fee'] ) ) {
            update_post_meta( $prop_id, 'fave_mic_advanced_rent_fee', sanitize_text_field( $_POST['mic_advanced_rent_fee'] ) );
        }

        if( isset( $_POST['mic_total_move_in_cost'] ) ) {
            update_post_meta( $prop_id, 'fave_mic_total_move_in_cost', sanitize_text_field( $_POST['mic_total_move_in_cost'] ) );
        }

        if( isset( $_POST['additional_cost'] ) ) {
            $additional_cost = $_POST['additional_cost'];
            if( ! empty( $additional_cost ) ) {
                update_post_meta( $prop_id, 'additional_cost', $additional_cost );
            }
        }

        //End new fields 



        // property video image - in case of update
        $property_video_image = "";
        $property_video_image_id = 0;
        if( $submission_action == "update_property" ) {
            $property_video_image_id = get_post_meta( $prop_id, 'fave_video_image', true );
            if ( ! empty ( $property_video_image_id ) ) {
                $property_video_image_src = wp_get_attachment_image_src( $property_video_image_id, 'houzez-property-detail-gallery' );
                $property_video_image = $property_video_image_src[0];
            }
        }

        // clean up the old meta information related to images when property update
        if( $submission_action == "update_property" ){
            delete_post_meta( $prop_id, 'fave_property_images' );
            delete_post_meta( $prop_id, 'fave_attachments' );
            delete_post_meta( $prop_id, '_thumbnail_id' );
        }

        // Property Images
        if( isset( $_POST['propperty_image_ids'] ) ) {
            if (!empty($_POST['propperty_image_ids']) && is_array($_POST['propperty_image_ids'])) {
                $property_image_ids = array();
                foreach ($_POST['propperty_image_ids'] as $prop_img_id ) {
                    $property_image_ids[] = intval( $prop_img_id );
                    add_post_meta($prop_id, 'fave_property_images', $prop_img_id);
                }

                // featured image
                if( isset( $_POST['featured_image_id'] ) ) {
                    $featured_image_id = intval( $_POST['featured_image_id'] );
                    if( in_array( $featured_image_id, $property_image_ids ) ) {
                        update_post_meta( $prop_id, '_thumbnail_id', $featured_image_id );

                        /* if video url is provided but there is no video image then use featured image as video image */
                        if ( empty( $property_video_image ) && !empty( $_POST['prop_video_url'] ) ) {
                            update_post_meta( $prop_id, 'fave_video_image', $featured_image_id );
                        }
                    }
                } elseif ( ! empty ( $property_image_ids ) ) {
                    update_post_meta( $prop_id, '_thumbnail_id', $property_image_ids[0] );
                }
            }
        }

        if( isset( $_POST['propperty_attachment_ids'] ) ) {
                $property_attach_ids = array();
                foreach ($_POST['propperty_attachment_ids'] as $prop_atch_id ) {
                    $property_attach_ids[] = intval( $prop_atch_id );
                    add_post_meta($prop_id, 'fave_attachments', $prop_atch_id);
                }
        }

        // Add property type
        if( isset( $_POST['prop_type'] ) && ( $_POST['prop_type'] != '-1' ) ) {
            wp_set_object_terms( $prop_id, intval( $_POST['prop_type'] ), 'property_type' );
        }

        // Add property status
        if( isset( $_POST['prop_status'] ) && ( $_POST['prop_status'] != '-1' ) ) {
            wp_set_object_terms( $prop_id, intval( $_POST['prop_status'] ), 'property_status' );
        }

        // Add property status
        if( isset( $_POST['prop_labels'] ) ) {
            wp_set_object_terms( $prop_id, intval( $_POST['prop_labels'] ), 'property_label' );
        }

        //print_r($_POST); die;
        //echo $_POST['administrative_area_level_1'].' ====== '. $_POST['locality'].' ===== '.$_POST['neighborhood']; die;

        // Add property city
        if( isset( $_POST['locality'] ) ) {
            $property_city = sanitize_text_field( $_POST['locality'] );
            $city_id = wp_set_object_terms( $prop_id, $property_city, 'property_city' );

            $houzez_meta = array();
            $houzez_meta['parent_state'] = isset( $_POST['administrative_area_level_1'] ) ? $_POST['administrative_area_level_1'] : '';
            if( !empty( $city_id) ) {
                update_option('_houzez_property_city_' . $city_id[0], $houzez_meta);
            }
        }

        // Add property area
        $location_dropdowns = houzez_option('location_dropdowns');
        if($location_dropdowns == 'yes' && $submission_action == 'update_property') {

            if( isset( $_POST['neighborhood2'] ) ) {
                $property_area = sanitize_text_field( $_POST['neighborhood2'] );
                $area_id = wp_set_object_terms( $prop_id, $property_area, 'property_area' );

                $houzez_meta = array();
                $houzez_meta['parent_city'] = isset( $_POST['locality'] ) ? $_POST['locality'] : '';
                if( !empty( $area_id) ) {
                    update_option('_houzez_property_area_' . $area_id[0], $houzez_meta);
                }
            }

        } else {
            if( isset( $_POST['neighborhood'] ) ) {
                $property_area = sanitize_text_field( $_POST['neighborhood'] );
                $area_id = wp_set_object_terms( $prop_id, $property_area, 'property_area' );

                $houzez_meta = array();
                $houzez_meta['parent_city'] = isset( $_POST['locality'] ) ? $_POST['locality'] : '';
                if( !empty( $area_id) ) {
                    update_option('_houzez_property_area_' . $area_id[0], $houzez_meta);
                }
            }
        }


        // Add property state
        if( isset( $_POST['administrative_area_level_1'] ) ) {
            $property_state = sanitize_text_field( $_POST['administrative_area_level_1'] );
            $state_id = wp_set_object_terms( $prop_id, $property_state, 'property_state' );

            $houzez_meta = array();
            $houzez_meta['parent_country'] = isset( $_POST['country_short'] ) ? $_POST['country_short'] : '';
            if( !empty( $state_id) ) {
                update_option('_houzez_property_state_' . $state_id[0], $houzez_meta);
            }
        }

        //echo $_POST['country_short'].' '.$_POST['administrative_area_level_1'].' '.$_POST['locality'].' '.$_POST['neighborhood']; die;
       
        // Add property features
        if( isset( $_POST['prop_features'] ) ) {
            $features_array = array();
            foreach( $_POST['prop_features'] as $feature_id ) {
                $features_array[] = intval( $feature_id );
            }
            wp_set_object_terms( $prop_id, $features_array, 'property_feature' );
        }

        // additional details
        if( isset( $_POST['additional_features'] ) ) {
            $additional_features = $_POST['additional_features'];
            if( ! empty( $additional_features ) ) {
                update_post_meta( $prop_id, 'additional_features', $additional_features );
                update_post_meta( $prop_id, 'fave_additional_features_enable', 'enable' );
            }
        }

        //Floor Plans
        if( isset( $_POST['floorPlans_enable'] ) ) {
            $floorPlans_enable = $_POST['floorPlans_enable'];
            if( ! empty( $floorPlans_enable ) ) {
                update_post_meta( $prop_id, 'fave_floor_plans_enable', $floorPlans_enable );
            }
        }

        if( isset( $_POST['floor_plans'] ) ) {
            $floor_plans_post = $_POST['floor_plans'];
            if( ! empty( $floor_plans_post ) ) {
                update_post_meta( $prop_id, 'floor_plans', $floor_plans_post );
            }
        }

        //Multi-units / Sub-properties
        if( isset( $_POST['multiUnits'] ) ) {
            $multiUnits_enable = $_POST['multiUnits'];
            if( ! empty( $multiUnits_enable ) ) {
                update_post_meta( $prop_id, 'fave_multiunit_plans_enable', $multiUnits_enable );
            }
        }

        if( isset( $_POST['fave_multi_units'] ) ) {
            $fave_multi_units = $_POST['fave_multi_units'];
            if( ! empty( $fave_multi_units ) ) {
                update_post_meta( $prop_id, 'fave_multi_units', $fave_multi_units );
            }
        }

        // Make featured
        if( isset( $_POST['prop_featured'] ) ) {
            $featured = intval( $_POST['prop_featured'] );
            update_post_meta( $prop_id, 'fave_featured', $featured );
        }

        // Private Note
        if( isset( $_POST['private_note'] ) ) {
            $private_note = wp_kses_post( $_POST['private_note'] );
            update_post_meta( $prop_id, 'fave_private_note', $private_note );
        }

        // Property Payment
        if( isset( $_POST['prop_payment'] ) ) {
            $prop_payment = sanitize_text_field( $_POST['prop_payment'] );
            update_post_meta( $prop_id, 'fave_payment_status', $prop_payment );
        }


        if( isset( $_POST['fave_agent_display_option'] ) ) {

            $prop_agent_display_option = sanitize_text_field( $_POST['fave_agent_display_option'] );
            if( $prop_agent_display_option == 'agent_info' ) {

                $prop_agent = sanitize_text_field( $_POST['fave_agents'] );
                update_post_meta( $prop_id, 'fave_agent_display_option', $prop_agent_display_option );
                update_post_meta( $prop_id, 'fave_agents', $prop_agent );
                if (houzez_is_agency()) {
                    $user_agency_id = get_user_meta( $userID, 'fave_author_agency_id', true );
                    if( !empty($user_agency_id)) {
                        update_post_meta($prop_id, 'fave_property_agency', $user_agency_id);
                    }
                }

            } elseif( $prop_agent_display_option == 'agency_info' ) {

                $user_agency_id = get_user_meta( $userID, 'fave_author_agency_id', true );
                if( !empty($user_agency_id) ) {
                    update_post_meta($prop_id, 'fave_agent_display_option', $prop_agent_display_option);
                    update_post_meta($prop_id, 'fave_property_agency', $user_agency_id);
                } else {
                    update_post_meta( $prop_id, 'fave_agent_display_option', 'author_info' );
                }

            } else {
                update_post_meta( $prop_id, 'fave_agent_display_option', $prop_agent_display_option );
            }

        } else {
            if (houzez_is_agency()) {
                $user_agency_id = get_user_meta( $userID, 'fave_author_agency_id', true );
                if( !empty($user_agency_id) ) {
                    update_post_meta($prop_id, 'fave_agent_display_option', 'agency_info');
                    update_post_meta($prop_id, 'fave_property_agency', $user_agency_id);
                } else {
                    update_post_meta( $prop_id, 'fave_agent_display_option', 'author_info' );
                }

            } elseif(houzez_is_agent()){
                $user_agent_id = get_user_meta( $userID, 'fave_author_agent_id', true );

                if ( !empty( $user_agent_id ) ) {

                    update_post_meta($prop_id, 'fave_agent_display_option', 'agent_info');
                    update_post_meta($prop_id, 'fave_agents', $user_agent_id);

                } else {
                    update_post_meta($prop_id, 'fave_agent_display_option', 'author_info');
                }

            } else {
                update_post_meta($prop_id, 'fave_agent_display_option', 'author_info');
            }
        }

        // Address
        if( isset( $_POST['property_map_address'] ) ) {
            update_post_meta( $prop_id, 'fave_property_map_address', sanitize_text_field( $_POST['property_map_address'] ) );
            update_post_meta( $prop_id, 'fave_property_address', sanitize_text_field( $_POST['property_map_address'] ) );
        }

        if( ( isset($_POST['lat']) && !empty($_POST['lat']) ) && (  isset($_POST['lng']) && !empty($_POST['lng'])  ) ) {
            $lat = sanitize_text_field( $_POST['lat'] );
            $lng = sanitize_text_field( $_POST['lng'] );
            $streetView = sanitize_text_field( $_POST['prop_google_street_view'] );
            $lat_lng = $lat.','.$lng;

            update_post_meta( $prop_id, 'houzez_geolocation_lat', $lat );
            update_post_meta( $prop_id, 'houzez_geolocation_long', $lng );
            update_post_meta( $prop_id, 'fave_property_location', $lat_lng );
            update_post_meta( $prop_id, 'fave_property_map', '1' );
            update_post_meta( $prop_id, 'fave_property_map_street_view', $streetView );

        }
        // Country
        if( isset( $_POST['country_short'] ) ) {
            update_post_meta( $prop_id, 'fave_property_country', sanitize_text_field( $_POST['country_short'] ) );
        } else {
            $default_country = houzez_option('default_country');
            update_post_meta( $prop_id, 'fave_property_country', $default_country );
        }
        // Postal Code
        if( isset( $_POST['postal_code'] ) ) {
            update_post_meta( $prop_id, 'fave_property_zip', sanitize_text_field( $_POST['postal_code'] ) );
        }

    return $prop_id;
    }
}


function houzez_property_search_2($search_query)
{

    $tax_query = array();
    $meta_query = array();
    $allowed_html = array();
    $keyword_array = '';

    $keyword_field = houzez_option('keyword_field');
    $beds_baths_search = houzez_option('beds_baths_search');

    $search_criteria = '=';
    if( $beds_baths_search == 'greater') {
        $search_criteria = '>=';
    }

    $search_location = isset($_GET['search_location']) ? esc_attr($_GET['search_location']) : false;
    $use_radius = 'on';
    $search_lat = isset($_GET['lat']) ? (float)$_GET['lat'] : false;
    $search_long = isset($_GET['lng']) ? (float)$_GET['lng'] : false;
    $search_radius = isset($_GET['radius']) ? (int)$_GET['radius'] : false;

    $search_query = apply_filters('houzez_radius_filter', $search_query, $search_lat, $search_long, $search_radius, $use_radius, $search_location);

    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
        if ($keyword_field == 'prop_address') {
            $meta_keywork = wp_kses(stripcslashes($_GET['keyword']), $allowed_html);
            $address_array = array(
                'key' => 'fave_property_map_address',
                'value' => $meta_keywork,
                'type' => 'CHAR',
                'compare' => 'LIKE',
            );

            $street_array = array(
                'key' => 'fave_property_address',
                'value' => $meta_keywork,
                'type' => 'CHAR',
                'compare' => 'LIKE',
            );

            $zip_array = array(
                'key' => 'fave_property_zip',
                'value' => $meta_keywork,
                'type' => 'CHAR',
                'compare' => '=',
            );

            $propid_array = array(
                'key' => 'fave_property_id',
                'value' => $meta_keywork,
                'type' => 'CHAR',
                'compare' => '=',
            );

            $keyword_array = array(
                'relation' => 'OR',
                $address_array,
                $street_array,
                $propid_array,
                $zip_array
            );

        } else if ($keyword_field == 'prop_city_state_county') {
            $taxlocation[] = sanitize_title(wp_kses($_GET['keyword'], $allowed_html));

            $_tax_query = Array();
            $_tax_query['relation'] = 'OR';

            $_tax_query[] = array(
                'taxonomy' => 'property_area',
                'field' => 'slug',
                'terms' => $taxlocation
            );

            $_tax_query[] = array(
                'taxonomy' => 'property_city',
                'field' => 'slug',
                'terms' => $taxlocation
            );

            $_tax_query[] = array(
                'taxonomy' => 'property_state',
                'field' => 'slug',
                'terms' => $taxlocation
            );
            $tax_query[] = $_tax_query;

        } else {
            $keyword = trim($_GET['keyword']);
            if (!empty($keyword)) {
                $search_query['s'] = $keyword;
            }
        }
    }

    // bedrooms logic
    if (isset($_GET['bedrooms']) && !empty($_GET['bedrooms']) && $_GET['bedrooms'] != 'any') {
        $bedrooms = sanitize_text_field($_GET['bedrooms']);
        $meta_query[] = array(
            'key' => 'fave_property_bedrooms',
            'value' => $bedrooms,
            'type' => 'CHAR',
            'compare' => $search_criteria,
        );
    }

    //from Station [Nearest Station Time]
    if (isset($_GET['from-station']) && !empty($_GET['from-station']) ) {
        $from_station = sanitize_text_field($_GET['from-station']);
        $meta_query[] = array(
            'key' => 'fave_nearest_station',
            'value' => $from_station,
            'type' => 'CHAR',
            'compare' => '=',
        );
    }

    //from Station [Built Within]
    if (isset($_GET['building-age']) && !empty($_GET['building-age']) ) {
        $building_age = sanitize_text_field($_GET['building-age']);
        $meta_query[] = array(
            'key' => 'fave_built_within',
            'value' => $building_age,
            'type' => 'CHAR',
            'compare' => '=',
        );
    }

    // Property ID
    if (isset($_GET['property_id']) && !empty($_GET['property_id'])) {
        $propid = sanitize_text_field($_GET['property_id']);
        $meta_query[] = array(
            'key' => 'fave_property_id',
            'value' => $propid,
            'type' => 'char',
            'compare' => '=',
        );
    }

    // bathrooms logic
    if (isset($_GET['bathrooms']) && !empty($_GET['bathrooms']) && $_GET['bathrooms'] != 'any') {
        $bathrooms = sanitize_text_field($_GET['bathrooms']);
        $meta_query[] = array(
            'key' => 'fave_property_bathrooms',
            'value' => $bathrooms,
            'type' => 'CHAR',
            'compare' => $search_criteria,
        );
    }

    // min and max price logic
    if (isset($_GET['min-price']) && !empty($_GET['min-price']) && $_GET['min-price'] != 'any' && isset($_GET['max-price']) && !empty($_GET['max-price']) && $_GET['max-price'] != 'any') {
        $min_price = doubleval(houzez_clean($_GET['min-price']));
        $max_price = doubleval(houzez_clean($_GET['max-price']));

        if ($min_price > 0 && $max_price > $min_price) {
            $meta_query[] = array(
                'key' => 'fave_property_price',
                'value' => array($min_price, $max_price),
                'type' => 'NUMERIC',
                'compare' => 'BETWEEN',
            );
        }
    } else if (isset($_GET['min-price']) && !empty($_GET['min-price']) && $_GET['min-price'] != 'any') {
        $min_price = doubleval(houzez_clean($_GET['min-price']));
        if ($min_price > 0) {
            $meta_query[] = array(
                'key' => 'fave_property_price',
                'value' => $min_price,
                'type' => 'NUMERIC',
                'compare' => '>=',
            );
        }
    } else if (isset($_GET['max-price']) && !empty($_GET['max-price']) && $_GET['max-price'] != 'any') {
        $max_price = doubleval(houzez_clean($_GET['max-price']));
        if ($max_price > 0) {
            $meta_query[] = array(
                'key' => 'fave_property_price',
                'value' => $max_price,
                'type' => 'NUMERIC',
                'compare' => '<=',
            );
        }
    }


    // min and max area logic
    if (isset($_GET['min-area']) && !empty($_GET['min-area']) && isset($_GET['max-area']) && !empty($_GET['max-area'])) {
        $min_area = intval($_GET['min-area']);
        $max_area = intval($_GET['max-area']);

        if ($min_area >= 0 && $max_area > $min_area) {
            $meta_query[] = array(
                'key' => 'fave_property_size',
                'value' => array($min_area, $max_area),
                'type' => 'NUMERIC',
                'compare' => 'BETWEEN',
            );
        }

    } else if (isset($_GET['max-area']) && !empty($_GET['max-area'])) {
        $max_area = intval($_GET['max-area']);
        if ($max_area >= 0) {
            $meta_query[] = array(
                'key' => 'fave_property_size',
                'value' => $max_area,
                'type' => 'NUMERIC',
                'compare' => '<=',
            );
        }
    } else if (isset($_GET['min-area']) && !empty($_GET['min-area'])) {
        $min_area = intval($_GET['min-area']);
        if ($min_area >= 0) {
            $meta_query[] = array(
                'key' => 'fave_property_size',
                'value' => $min_area,
                'type' => 'NUMERIC',
                'compare' => '>=',
            );
        }
    }

    //Date Query
    $publish_date = isset($_GET['publish_date']) ? $_GET['publish_date'] : '';
    if (!empty($publish_date)) {
        $publish_date = explode('/', $publish_date);
        $query_args['date_query'] = array(
            array(
                'year' => $publish_date[2],
                'compare'   => '>=',
            ),
            array(
                'month' => $publish_date[1],
                'compare'   => '>=',
            ),
            array(
                'day' => $publish_date[0],
                'compare'   => '>=',
            )
        );
    }


    // Taxonomies
    if (isset($_GET['status']) && !empty($_GET['status']) && $_GET['status'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_status',
            'field' => 'slug',
            'terms' => $_GET['status']
        );
    }

    if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_type',
            'field' => 'slug',
            'terms' => $_GET['type']
        );
    }

    if (isset($_GET['country']) && !empty($_GET['country']) && $_GET['country'] != 'all') {
        $meta_query[] = array(
            'key' => 'fave_property_country',
            'value' => $_GET['country'],
            'type' => 'CHAR',
            'compare' => '=',
        );
    }

    if (isset($_GET['state']) && !empty($_GET['state']) && $_GET['state'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_state',
            'field' => 'slug',
            'terms' => $_GET['state']
        );
    }

    if (isset($_GET['location']) && !empty($_GET['location']) && $_GET['location'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_city',
            'field' => 'slug',
            'terms' => $_GET['location']
        );
    }

    if (isset($_GET['label']) && !empty($_GET['label']) && $_GET['label'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_label',
            'field' => 'slug',
            'terms' => $_GET['label']
        );
    }

    if (isset($_GET['area']) && !empty($_GET['area']) && $_GET['area'] != 'all') {
        $tax_query[] = array(
            'taxonomy' => 'property_area',
            'field' => 'slug',
            'terms' => $_GET['area']
        );
    }

    if (isset($_GET['station']) && !empty($_GET['station'])) {
        $tax_query[] = array(
            'taxonomy' => 'property_station',
            'field' => 'slug',
            'terms' => $_GET['station']
        );
    }

    if (isset($_GET['feature']) && !empty($_GET['feature'])) {
        if (is_array($_GET['feature'])) {
            $features = $_GET['feature'];

            foreach ($features as $feature):
                $tax_query[] = array(
                    'taxonomy' => 'property_feature',
                    'field' => 'slug',
                    'terms' => $feature
                );
            endforeach;
        }
    }

    $meta_count = count($meta_query);

    if ($meta_count > 0 || !empty($keyword_array)) {
        $search_query['meta_query'] = array(
            'relation' => 'AND',
            $keyword_array,
            array(
                'relation' => 'AND',
                $meta_query
            ),
        );
    }

    $tax_count = count($tax_query);

    $tax_query['relation'] = 'AND';

    if ($tax_count > 0) {
        $search_query['tax_query'] = $tax_query;
    }
    //print_r($search_query);
    return $search_query;
}

function houzez_header_map_listings() {
        check_ajax_referer('houzez_header_map_ajax_nonce', 'security');

        $meta_query = array();
        $tax_query = array();
        $date_query = array();
        $allowed_html = array();
        $keyword_array =  '';

        $station = isset($_POST['station']) ? ($_POST['station']) : '';
        $from_station = isset($_POST['from_station']) ? ($_POST['from_station']) : '';
        $building_age = isset($_POST['building_age']) ? ($_POST['building_age']) : '';

        $initial_city = isset($_POST['initial_city']) ? $_POST['initial_city'] : '';
        $features = isset($_POST['features']) ? $_POST['features'] : '';
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $country = isset($_POST['country']) ? ($_POST['country']) : '';
        $state = isset($_POST['state']) ? ($_POST['state']) : '';
        $location = isset($_POST['location']) ? ($_POST['location']) : '';
        $area = isset($_POST['area']) ? ($_POST['area']) : '';
        $status = isset($_POST['status']) ? ($_POST['status']) : '';
        $type = isset($_POST['type']) ? ($_POST['type']) : '';
        $label = isset($_POST['label']) ? ($_POST['label']) : '';
        $property_id = isset($_POST['property_id']) ? ($_POST['property_id']) : '';
        $bedrooms = isset($_POST['bedrooms']) ? ($_POST['bedrooms']) : '';
        $bathrooms = isset($_POST['bathrooms']) ? ($_POST['bathrooms']) : '';
        $min_price = isset($_POST['min_price']) ? ($_POST['min_price']) : '';
        $max_price = isset($_POST['max_price']) ? ($_POST['max_price']) : '';
        $min_area = isset($_POST['min_area']) ? ($_POST['min_area']) : '';
        $max_area = isset($_POST['max_area']) ? ($_POST['max_area']) : '';
        $publish_date = isset($_POST['publish_date']) ? ($_POST['publish_date']) : '';

        $search_location = isset( $_POST[ 'search_location' ] ) ? esc_attr( $_POST[ 'search_location' ] ) : false;
        $use_radius = isset( $_POST[ 'use_radius' ] ) && 'on' == $_POST[ 'use_radius' ];
        $search_lat = isset($_POST['search_lat']) ? (float) $_POST['search_lat'] : false;
        $search_long = isset($_POST['search_long']) ? (float) $_POST['search_long'] : false;
        $search_radius = isset($_POST['search_radius']) ? (int) $_POST['search_radius'] : false;


        $prop_locations = array();
        houzez_get_terms_array( 'property_city', $prop_locations );

        $keyword_field = houzez_option('keyword_field');
        $beds_baths_search = houzez_option('beds_baths_search');

        $search_criteria = '=';
        if( $beds_baths_search == 'greater') {
            $search_criteria = '>=';
        }

        $query_args = array(
            'post_type' => 'property',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        );

        $query_args = apply_filters('houzez_radius_filter', $query_args, $search_lat, $search_long, $search_radius, $use_radius, $search_location );

        $keyword = stripcslashes($keyword);

        if ( $keyword != '') {

            if( $keyword_field == 'prop_address' ) {
                $meta_keywork = wp_kses($keyword, $allowed_html);
                $address_array = array(
                    'key' => 'fave_property_map_address',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => 'LIKE',
                );

                $street_array = array(
                    'key' => 'fave_property_address',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => 'LIKE',
                );

                $zip_array = array(
                    'key' => 'fave_property_zip',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => '=',
                );
                $propid_array = array(
                    'key' => 'fave_property_id',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => '=',
                );

                $keyword_array = array(
                    'relation' => 'OR',
                    $address_array,
                    $street_array,
                    $propid_array,
                    $zip_array
                );
            } else if( $keyword_field == 'prop_city_state_county' ) {
                $taxlocation[] = sanitize_title (  esc_html( wp_kses($keyword, $allowed_html) ) );

                $_tax_query = Array();
                $_tax_query['relation'] = 'OR';

                $_tax_query[] = array(
                    'taxonomy'     => 'property_area',
                    'field'        => 'slug',
                    'terms'        => $taxlocation
                );

                $_tax_query[] = array(
                    'taxonomy'     => 'property_city',
                    'field'        => 'slug',
                    'terms'        => $taxlocation
                );

                $_tax_query[] = array(
                    'taxonomy'      => 'property_state',
                    'field'         => 'slug',
                    'terms'         => $taxlocation
                );
                $tax_query[] = $_tax_query;

            } else {
                $keyword = trim( $keyword );
                if ( ! empty( $keyword ) ) {
                    $query_args['s'] = $keyword;
                }
            }
        }

        //Date Query
        if( !empty($publish_date) ) {
            $publish_date = explode('/', $publish_date);
            $query_args['date_query'] = array(
                array(
                    'year' => $publish_date[2],
                    'compare'   => '>=',
                ),
                array(
                    'month' => $publish_date[1],
                    'compare'   => '>=',
                ),
                array(
                    'day' => $publish_date[0],
                    'compare'   => '>=',
                )
            );
        }

        // Meta Queries
        $meta_query[] = array(
            'key' => 'fave_property_map_address',
            'compare' => 'EXISTS',
        );

        // Property ID
        if( !empty( $property_id )  ) {
            $meta_query[] = array(
                'key' => 'fave_property_id',
                'value'   => $property_id,
                'type'    => 'char',
                'compare' => '=',
            );
        }

        if( !empty($location) && $location != 'all' ) {
            $tax_query[] = array(
                'taxonomy' => 'property_city',
                'field' => 'slug',
                'terms' => $location
            );

        } else {
            if( $location == 'all' ) {
                /*$tax_query[] = array(
                    'taxonomy' => 'property_city',
                    'field' => 'slug',
                    'terms' => $prop_locations
                );*/
            } else {
                if (!empty($initial_city)) {
                    $tax_query[] = array(
                        'taxonomy' => 'property_city',
                        'field' => 'slug',
                        'terms' => $initial_city
                    );
                }
            }
        }

        if( !empty($area) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_area',
                'field' => 'slug',
                'terms' => $area
            );
        }
        if( !empty($state) ) {
            $tax_query[] = array(
                'taxonomy'      => 'property_state',
                'field'         => 'slug',
                'terms'         => $state
            );
        }

        if( !empty( $country ) ) {
            $meta_query[] = array(
                'key' => 'fave_property_country',
                'value'   => $country,
                'type'    => 'CHAR',
                'compare' => '=',
            );
        }

        if( !empty($status) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_status',
                'field' => 'slug',
                'terms' => $status
            );
        }
        if( !empty($type) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_type',
                'field' => 'slug',
                'terms' => $type
            );
        }

        if ( !empty($label) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_label',
                'field' => 'slug',
                'terms' => $label
            );
        }

        if( !empty( $features ) ) {

            foreach ($features as $feature):
                $tax_query[] = array(
                    'taxonomy' => 'property_feature',
                    'field' => 'slug',
                    'terms' => $feature
                );
            endforeach;
        }

        if (!empty($station)) {
            $tax_query[] = array(
                'taxonomy' => 'property_station',
                'field' => 'slug',
                'terms' => $station
            );
        }

        //from Station [Nearest Station Time]
        if (!empty($from_station) ) {
            $meta_query[] = array(
                'key' => 'fave_nearest_station',
                'value' => $from_station,
                'type' => 'CHAR',
                'compare' => '=',
            );
        }

        //from Station [Built Within]
        if (!empty($building_age) ) {
            $meta_query[] = array(
                'key' => 'fave_built_within',
                'value' => $building_age,
                'type' => 'CHAR',
                'compare' => '=',
            );
        }

        // bedrooms logic
        if( !empty( $bedrooms ) && $bedrooms != 'any'  ) {
            $bedrooms = sanitize_text_field($bedrooms);
            $meta_query[] = array(
                'key' => 'fave_property_bedrooms',
                'value'   => $bedrooms,
                'type'    => 'CHAR',
                'compare' => $search_criteria,
            );
        }

        // bathrooms logic
        if( !empty( $bathrooms ) && $bathrooms != 'any'  ) {
            $bathrooms = sanitize_text_field($bathrooms);
            $meta_query[] = array(
                'key' => 'fave_property_bathrooms',
                'value'   => $bathrooms,
                'type'    => 'CHAR',
                'compare' => $search_criteria,
            );
        }

        // min and max price logic
        if( !empty( $min_price ) && $min_price != 'any' && !empty( $max_price ) && $max_price != 'any' ) {
            $min_price = doubleval( houzez_clean( $min_price ) );
            $max_price = doubleval( houzez_clean( $max_price ) );

            if( $min_price > 0 && $max_price > $min_price ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => array($min_price, $max_price),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN',
                );
            }
        } else if( !empty( $min_price ) && $min_price != 'any'  ) {
            $min_price = doubleval( houzez_clean( $min_price ) );
            if( $min_price > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => $min_price,
                    'type' => 'NUMERIC',
                    'compare' => '>=',
                );
            }
        } else if( !empty( $max_price ) && $max_price != 'any'  ) {
            $max_price = doubleval( houzez_clean( $max_price ) );
            if( $max_price > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => $max_price,
                    'type' => 'NUMERIC',
                    'compare' => '<=',
                );
            }
        }

        // min and max area logic
        if( !empty( $min_area ) && !empty( $max_area ) ) {
            $min_area = intval( $min_area );
            $max_area = intval( $max_area );

            if( $min_area > 0 && $max_area > $min_area ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => array($min_area, $max_area),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN',
                );
            }

        } else if( !empty( $max_area ) ) {
            $max_area = intval( $max_area );
            if( $max_area > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => $max_area,
                    'type' => 'NUMERIC',
                    'compare' => '<=',
                );
            }
        } else if( !empty( $min_area ) ) {
            $min_area = intval( $min_area );
            if( $min_area > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => $min_area,
                    'type' => 'NUMERIC',
                    'compare' => '>=',
                );
            }
        }

        $meta_count = count($meta_query);

        if( $meta_count > 0 || !empty($keyword_array)) {
            $query_args['meta_query'] = array(
                'relation' => 'AND',
                $keyword_array,
                array(
                    'relation' => 'AND',
                    $meta_query
                ),
            );
        }

        $tax_count = count($tax_query);


        $tax_query['relation'] = 'AND';


        if( $tax_count > 0 ) {
            $query_args['tax_query']  = $tax_query;
        }


        $query_args = new WP_Query( $query_args );

        $properties = array();

        while( $query_args->have_posts() ): $query_args->the_post();

            $post_id = get_the_ID();
            $property_location = get_post_meta( get_the_ID(),'fave_property_location',true);
            $lat_lng = explode(',', $property_location);
            $prop_images        = get_post_meta( get_the_ID(), 'fave_property_images', false );
            $prop_featured       = get_post_meta( get_the_ID(), 'fave_featured', true );
            $prop_type = wp_get_post_terms( get_the_ID(), 'property_type', array("fields" => "ids") );

            $prop = new stdClass();

            $prop->id = $post_id;
            $prop->title = get_the_title();
            $prop->sanitizetitle = sanitize_title(get_the_title());
            $prop->lat = $lat_lng[0];
            $prop->lng = $lat_lng[1];
            $prop->bedrooms = get_post_meta( get_the_ID(), 'fave_property_bedrooms', true );
            $prop->bathrooms = get_post_meta( get_the_ID(), 'fave_property_bathrooms', true );
            $prop->address = get_post_meta( get_the_ID(), 'fave_property_map_address', true );
            $prop->thumbnail = get_the_post_thumbnail( $post_id, 'houzez-property-thumb-image' );
            $prop->url = get_permalink();
            $prop->prop_meta = houzez_listing_meta_v1();
            $prop->type = houzez_taxonomy_simple('property_type');
            $prop->images_count = count( $prop_images );
            $prop->price = houzez_listing_price_v1();

            foreach( $prop_type as $term_id ) {
                $icon = get_tax_meta( $term_id, 'fave_prop_type_icon');
                $retinaIcon = get_tax_meta( $term_id, 'fave_prop_type_icon_retina');

                if( !empty($icon['src']) ) {
                    $prop->icon = $icon['src'];
                } else {
                    $prop->icon = get_template_directory_uri() . '/images/map/pin-single-family.png';
                }
                if( !empty($retinaIcon['src']) ) {
                    $prop->retinaIcon = $retinaIcon['src'];
                } else {
                    $prop->retinaIcon = get_template_directory_uri() . '/images/map/pin-single-family.png';
                }
            }

            array_push($properties, $prop);

        endwhile;

        wp_reset_postdata();

        if( count($properties) > 0 ) {
            echo json_encode( array( 'getProperties' => true, 'properties' => $properties ) );
            exit();
        } else {
            echo json_encode( array( 'getProperties' => false ) );
            exit();
        }
        die();
    }


function houzez_half_map_listings() {
        //check_ajax_referer('houzez_map_ajax_nonce', 'security');
        $meta_query = array();
        $tax_query = array();
        $date_query = array();
        $allowed_html = array();
        $keyword_array =  '';

        $station = isset($_POST['station']) ? ($_POST['station']) : '';
        $from_station = isset($_POST['from_station']) ? ($_POST['from_station']) : '';
        $building_age = isset($_POST['building_age']) ? ($_POST['building_age']) : '';

        $features = isset($_POST['features']) ? $_POST['features'] : '';
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $country = isset($_POST['country']) ? ($_POST['country']) : '';
        $location = isset($_POST['location']) ? ($_POST['location']) : '';
        $area = isset($_POST['area']) ? ($_POST['area']) : '';
        $state = isset($_POST['state']) ? ($_POST['state']) : '';
        $status = isset($_POST['status']) ? ($_POST['status']) : '';
        $type = isset($_POST['type']) ? ($_POST['type']) : '';
        $labels = isset($_POST['label']) ? ($_POST['label']) : '';
        $property_id = isset($_POST['property_id']) ? ($_POST['property_id']) : '';
        $bedrooms = isset($_POST['bedrooms']) ? ($_POST['bedrooms']) : '';
        $bathrooms = isset($_POST['bathrooms']) ? ($_POST['bathrooms']) : '';
        $min_price = isset($_POST['min_price']) ? ($_POST['min_price']) : '';
        $max_price = isset($_POST['max_price']) ? ($_POST['max_price']) : '';
        $min_area = isset($_POST['min_area']) ? ($_POST['min_area']) : '';
        $max_area = isset($_POST['max_area']) ? ($_POST['max_area']) : '';
        $publish_date = isset($_POST['publish_date']) ? ($_POST['publish_date']) : '';
        $post_per_page = isset($_POST['post_per_page']) ? ($_POST['post_per_page']) : 10;
        $paged = isset($_POST['paged']) ? ($_POST['paged']) : '';
        $keyword_field = houzez_option('keyword_field');

        $search_location = isset( $_POST[ 'search_location' ] ) ? esc_attr( $_POST[ 'search_location' ] ) : false;
        $use_radius = isset( $_POST[ 'use_radius' ] ) && 'on' == $_POST[ 'use_radius' ];
        $search_lat = isset($_POST['search_lat']) ? (float) $_POST['search_lat'] : false;
        $search_long = isset($_POST['search_long']) ? (float) $_POST['search_long'] : false;
        $search_radius = isset($_POST['search_radius']) ? (int) $_POST['search_radius'] : false;

        $prop_locations = array();
        houzez_get_terms_array( 'property_city', $prop_locations );

        $beds_baths_search = houzez_option('beds_baths_search');
        $listing_view = houzez_option('halfmap_listings_layout');
        if(isset($_GET['half_map_style'])) {
            $listing_view = $_GET['half_map_style'];
        }

        $search_criteria = '=';
        if( $beds_baths_search == 'greater') {
            $search_criteria = '>=';
        }

        $query_args = array(
            'post_type' => 'property',
            'posts_per_page' => $post_per_page,
            'paged' => $paged,
            'post_status' => 'publish'
        );


        $query_args = apply_filters( 'houzez_radius_filter', $query_args, $search_lat, $search_long, $search_radius, $use_radius, $search_location );

        if ( $keyword != '') {
            if( $keyword_field == 'prop_address' ) {
                $keyword = stripcslashes($keyword);
                $meta_keywork = wp_kses($keyword, $allowed_html);
                $address_array = array(
                    'key' => 'fave_property_map_address',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => 'LIKE',
                );

                $street_array = array(
                    'key' => 'fave_property_address',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => 'LIKE',
                );

                $zip_array = array(
                    'key' => 'fave_property_zip',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => '=',
                );

                $propid_array = array(
                    'key' => 'fave_property_id',
                    'value' => $meta_keywork,
                    'type' => 'CHAR',
                    'compare' => '=',
                );

                $keyword_array = array(
                    'relation' => 'OR',
                    $address_array,
                    $street_array,
                    $propid_array,
                    $zip_array
                );
            }  else if( $keyword_field == 'prop_city_state_county' ) {
                $taxlocation[] = sanitize_title (  esc_html( wp_kses($keyword, $allowed_html) ) );

                $_tax_query = Array();
                $_tax_query['relation'] = 'OR';

                $_tax_query[] = array(
                    'taxonomy'     => 'property_area',
                    'field'        => 'slug',
                    'terms'        => $taxlocation
                );

                $_tax_query[] = array(
                    'taxonomy'     => 'property_city',
                    'field'        => 'slug',
                    'terms'        => $taxlocation
                );

                $_tax_query[] = array(
                    'taxonomy'      => 'property_state',
                    'field'         => 'slug',
                    'terms'         => $taxlocation
                );

                $tax_query[] = $_tax_query;

            } else {
                $keyword = trim( $keyword );
                if ( ! empty( $keyword ) ) {
                    $query_args['s'] = $keyword;
                }
            }
        }

        //Date Query
        if( !empty($publish_date) ) {
            $publish_date = explode('/', $publish_date);
            $query_args['date_query'] = array(
                array(
                    'year' => $publish_date[2],
                    'compare'   => '>=',
                ),
                array(
                    'month' => $publish_date[1],
                    'compare'   => '>=',
                ),
                array(
                    'day' => $publish_date[0],
                    'compare'   => '>=',
                )
            );
        }

        // Meta Queries
        $meta_query[] = array(
            'key' => 'fave_property_map_address',
            'compare' => 'EXISTS',
        );

        if( !empty($location) && $location != 'all' ) {
            $tax_query[] = array(
                'taxonomy' => 'property_city',
                'field' => 'slug',
                'terms' => $location
            );

        }

        // Property ID
        if( !empty( $property_id )  ) {
            $meta_query[] = array(
                'key' => 'fave_property_id',
                'value'   => $property_id,
                'type'    => 'char',
                'compare' => '=',
            );
        }

        if( !empty($area) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_area',
                'field' => 'slug',
                'terms' => $area
            );
        }

        if( !empty($state) ) {
            $tax_query[] = array(
                'taxonomy'      => 'property_state',
                'field'         => 'slug',
                'terms'         => $state
            );
        }

        if( !empty($status) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_status',
                'field' => 'slug',
                'terms' => $status
            );
        }
        if( !empty( $features ) ) {
            foreach ($features as $feature):
                $tax_query[] = array(
                    'taxonomy' => 'property_feature',
                    'field' => 'slug',
                    'terms' => $feature
                );
            endforeach;
        }
        if( !empty($type) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_type',
                'field' => 'slug',
                'terms' => $type
            );
        }

        if (!empty($station)) {
            $tax_query[] = array(
                'taxonomy' => 'property_station',
                'field' => 'slug',
                'terms' => $station
            );
        }

        //from Station [Nearest Station Time]
        if (!empty($from_station) ) {
            $meta_query[] = array(
                'key' => 'fave_nearest_station',
                'value' => $from_station,
                'type' => 'CHAR',
                'compare' => '=',
            );
        }

        //from Station [Built Within]
        if (!empty($building_age) ) {
            $meta_query[] = array(
                'key' => 'fave_built_within',
                'value' => $building_age,
                'type' => 'CHAR',
                'compare' => '=',
            );
        }

        if( !empty( $country ) ) {
            $meta_query[] = array(
                'key' => 'fave_property_country',
                'value'   => $country,
                'type'    => 'CHAR',
                'compare' => '=',
            );
        }

        if ( !empty( $labels ) ) {
            $tax_query[] = array(
                'taxonomy' => 'property_label',
                'field' => 'slug',
                'terms' => $labels
            );
        }

        // bedrooms logic
        if( !empty( $bedrooms ) && $bedrooms != 'any'  ) {
            $bedrooms = sanitize_text_field($bedrooms);
            $meta_query[] = array(
                'key' => 'fave_property_bedrooms',
                'value'   => $bedrooms,
                'type'    => 'CHAR',
                'compare' => $search_criteria,
            );
        }

        // bathrooms logic
        if( !empty( $bathrooms ) && $bathrooms != 'any'  ) {
            $bathrooms = sanitize_text_field($bathrooms);
            $meta_query[] = array(
                'key' => 'fave_property_bathrooms',
                'value'   => $bathrooms,
                'type'    => 'CHAR',
                'compare' => $search_criteria,
            );
        }

        // min and max price logic
        if( !empty( $min_price ) && $min_price != 'any' && !empty( $max_price ) && $max_price != 'any' ) {
            $min_price = doubleval( houzez_clean( $min_price ) );
            $max_price = doubleval( houzez_clean( $max_price ) );

            if( $min_price > 0 && $max_price > $min_price ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => array($min_price, $max_price),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN',
                );
            }
        } else if( !empty( $min_price ) && $min_price != 'any'  ) {
            $min_price = doubleval( houzez_clean( $min_price ) );
            if( $min_price > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => $min_price,
                    'type' => 'NUMERIC',
                    'compare' => '>=',
                );
            }
        } else if( !empty( $max_price ) && $max_price != 'any'  ) {
            $max_price = doubleval( houzez_clean( $max_price ) );
            if( $max_price > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_price',
                    'value' => $max_price,
                    'type' => 'NUMERIC',
                    'compare' => '<=',
                );
            }
        }

        // min and max area logic
        if( !empty( $min_area ) && !empty( $max_area ) ) {
            $min_area = intval( $min_area );
            $max_area = intval( $max_area );

            if( $min_area > 0 && $max_area > $min_area ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => array($min_area, $max_area),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN',
                );
            }

        } else if( !empty( $max_area ) ) {
            $max_area = intval( $max_area );
            if( $max_area > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => $max_area,
                    'type' => 'NUMERIC',
                    'compare' => '<=',
                );
            }
        } else if( !empty( $min_area ) ) {
            $min_area = intval( $min_area );
            if( $min_area > 0 ) {
                $meta_query[] = array(
                    'key' => 'fave_property_size',
                    'value' => $min_area,
                    'type' => 'NUMERIC',
                    'compare' => '>=',
                );
            }
        }

        $meta_count = count($meta_query);

        if( $meta_count > 0 || !empty($keyword_array)) {
            $query_args['meta_query'] = array(
                'relation' => 'AND',
                $keyword_array,
                array(
                    'relation' => 'AND',
                    $meta_query
                ),
            );
        }

        $tax_count = count($tax_query);


        $tax_query['relation'] = 'AND';


        if( $tax_count > 0 ) {
            $query_args['tax_query']  = $tax_query;
        }

        /*$query_args['orderby'] = 'meta_value_num';
        $query_args['meta_key'] = 'fave_property_price';
        $query_args['order'] = 'ASC';*/

        //$query_args = houzez_prop_sort($query_args);

        $query_args = new WP_Query( $query_args );

        $properties = array();

        ob_start();

        while( $query_args->have_posts() ): $query_args->the_post();

            $post_id = get_the_ID();
            $property_location = get_post_meta( get_the_ID(),'fave_property_location',true);
            $lat_lng = explode(',', $property_location);
            $prop_images        = get_post_meta( get_the_ID(), 'fave_property_images', false );
            $prop_featured       = get_post_meta( get_the_ID(), 'fave_featured', true );
            $prop_type = wp_get_post_terms( get_the_ID(), 'property_type', array("fields" => "ids") );

            $prop = new stdClass();

            $prop->id = $post_id;
            $prop->title = get_the_title();
            $prop->sanitizetitle = sanitize_title(get_the_title());
            $prop->lat = $lat_lng[0];
            $prop->lng = $lat_lng[1];
            $prop->bedrooms = get_post_meta( get_the_ID(), 'fave_property_bedrooms', true );
            $prop->bathrooms = get_post_meta( get_the_ID(), 'fave_property_bathrooms', true );
            $prop->address = get_post_meta( get_the_ID(), 'fave_property_map_address', true );
            $prop->thumbnail = get_the_post_thumbnail( $post_id, 'houzez-property-thumb-image' );
            $prop->url = get_permalink();
            $prop->prop_meta = houzez_listing_meta_v1();
            $prop->type = houzez_taxonomy_simple('property_type');
            $prop->images_count = count( $prop_images );
            $prop->price = houzez_listing_price_v1();

            $prop->icon = $prop->retinaIcon = get_template_directory_uri() . '/images/map/pin-single-family.png';
            foreach( $prop_type as $term_id ) {
                $icon = get_tax_meta( $term_id, 'fave_prop_type_icon');
                $retinaIcon = get_tax_meta( $term_id, 'fave_prop_type_icon_retina');

                if( !empty($icon['src']) ) {
                    $prop->icon = $icon['src'];
                } else {
                    $prop->icon = get_template_directory_uri() . '/images/map/pin-single-family.png';
                }
                if( !empty($retinaIcon['src']) ) {
                    $prop->retinaIcon = $retinaIcon['src'];
                } else {
                    $prop->retinaIcon = get_template_directory_uri() . '/images/map/pin-single-family.png';
                }
            }

            array_push($properties, $prop);

            if( $listing_view == 'grid-view-style3') {
                get_template_part('template-parts/property-for-listing-v3');
            } else {
                get_template_part('template-parts/property-for-listing');
            }


        endwhile;

        wp_reset_postdata();

        echo '<hr>';
        houzez_halpmap_ajax_pagination( $query_args->max_num_pages, $paged, $range = 2 );

        $listings_html = ob_get_contents();
        ob_end_clean();

        $encoded_query = base64_encode( serialize( $query_args->query ) );

        if( count($properties) > 0 ) {
            echo json_encode( array( 'getProperties' => true, 'properties' => $properties, 'propHtml' => $listings_html, 'query' => $encoded_query ) );
            exit();
        } else {
            echo json_encode( array( 'getProperties' => false, 'query' => $encoded_query ) );
            exit();
        }
        die();
    }



add_filter( 'houzez_theme_meta', 'houzez_child_theme_meta_filter', 9, 1 );
function houzez_child_theme_meta_filter( $meta_boxes ) {
    $houzez_prefix = 'fave_';

    //print_r($meta_boxes);

    $built_within_array = array("" => esc_html__('None', 'houzez'));
    $built_within = houzez_option('built_within');
    
    $built_within = explode(',', $built_within); 
    foreach ( $built_within as $bwi ) {
        $bwi = trim($bwi);
        $built_within_array[$bwi] = $bwi;
    }

    $nearest_station_time_array = array("" => esc_html__('None', 'houzez'));
    $nearest_station_time = houzez_option('nearest_station_time');
    
    $nearest_station_time = explode(',', $nearest_station_time); 
    foreach ( $nearest_station_time as $nst ) {
        $nst = trim($nst);
        $nearest_station_time_array[$nst] = $nst;
    }

    $rent_frequency_array = array("" => esc_html__('None', 'houzez'));
    $rent_frequency = houzez_option('rent_frequency');
    
    $rent_frequency = explode(',', $rent_frequency); 
    foreach ( $rent_frequency as $rf ) {
        $rf = trim($rf);
        $rent_frequency_array[$rf] = $rf;
    }

    $beds_add_prop_array = array("" => esc_html__('None', 'houzez'));
    $beds_add_prop = houzez_option('beds_add_prop');
    $beds_add_prop = explode(',', $beds_add_prop); 
    foreach ($beds_add_prop as $bd ) {
        $bd = trim($bd);
        $beds_add_prop_array[$bd] = $bd;
    }
    
    $baths_add_prop_array = array("" => esc_html__('None', 'houzez'));
    $baths_add_prop = houzez_option('baths_add_prop');
    $baths_add_prop = explode(',', $baths_add_prop); 
    foreach ($baths_add_prop as $bd ) {
        $bd = trim($bd);
        $baths_add_prop_array[$bd] = $bd;
    }

    $meta_boxes[0]['tabs']['cost_breakdown'] = Array (
        'label' => esc_html__('Cost Breakdown', 'houzez'),
        'icon' => 'dashicons-money',
    );
    
    $meta_boxes[0]['fields'][2]['name'] = esc_html__('Rent Frequency', 'houzez');
    $meta_boxes[0]['fields'][2]['type'] = 'select';
    $meta_boxes[0]['fields'][2]['options'] = $rent_frequency_array;

    $meta_boxes[0]['fields'][8]['type'] = 'select';
    $meta_boxes[0]['fields'][8]['options'] = $beds_add_prop_array;

    $meta_boxes[0]['fields'][9]['type'] = 'select';
    $meta_boxes[0]['fields'][9]['options'] = $baths_add_prop_array;

    $meta_boxes[0]['fields'][13] = array(
            'id' => "{$houzez_prefix}built_within",
            'name' => esc_html__('Built Within', 'houzez'),
            'type' => 'select',
            'std' => "",
            'options' => $built_within_array,
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][114] = array(
            'id' => "{$houzez_prefix}building_name",
            'name' => esc_html__('Building Name', 'houzez'),
            'placeholder' => esc_html__( 'Enter building name', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][115] = array(
            'id' => "{$houzez_prefix}floor",
            'name' => esc_html__('Floor', 'houzez'),
            'placeholder' => esc_html__( 'Enter floor (ex: 2F, 3F)', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][116] = array(
            'id' => "{$houzez_prefix}nearest_station",
            'name' => esc_html__('Nearest Station Time', 'houzez'),
            'type' => 'select',
            'std' => "",
            'options' => $nearest_station_time_array,
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][117] = array(
            'id' => "{$houzez_prefix}near_station_name",
            'name' => esc_html__('Near Station Name', 'houzez'),
            'placeholder' => esc_html__( 'Enter Nearest Station Name', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][118] = array(
            'id' => "{$houzez_prefix}train_line",
            'name' => esc_html__('Train Line', 'houzez'),
            'placeholder' => esc_html__( 'Enter Train Line', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][119] = array(
            'id' => "{$houzez_prefix}available_from",
            'name' => esc_html__('Available From', 'houzez'),
            'placeholder' => esc_html__( 'Enter Available From', 'houzez' ),
            'type' => 'date',
            'js_options' => array(
                'dateFormat'      => esc_html__( 'yy-mm-dd', 'houzez' ),
                'changeMonth'     => true,
                'changeYear'      => true,
                'showButtonPanel' => true,
            ),
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][120] = array(
            'id' => "{$houzez_prefix}guarantor",
            'name' => esc_html__('Guarantor', 'houzez'),
            'placeholder' => esc_html__( 'Enter Yes or No', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][121] = array(
            'id' => "{$houzez_prefix}lease_term",
            'name' => esc_html__('Lease Term', 'houzez'),
            'placeholder' => esc_html__( 'Enter lease term (ex: 1year)', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'property_details',
        );

    $meta_boxes[0]['fields'][122] = array(
            'id' => "{$houzez_prefix}payment_methods",
            'name' => esc_html__('Payment Methods', 'houzez'),
            'placeholder' => esc_html__( 'Enter Credit, Cash, Bank etc', 'houzez' ),
            'type' => 'text',
            'std' => "",
            'columns' => 12,
            'tab' => 'property_details',
        );


    $meta_boxes[0]['fields'][123] = array(
            'name' => esc_html__('Monthly Cost', 'houzez'),
            'type' => 'heading',
            'columns' => 12,
            'tab' => 'cost_breakdown',
        );

    $meta_boxes[0]['fields'][124] = array(
            'id' => "{$houzez_prefix}mc_rent",
            'name' => esc_html__('Rent', 'houzez'),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'cost_breakdown',
        );

    $meta_boxes[0]['fields'][125] = array(
            'id' => "{$houzez_prefix}mc_maintenence_fee",
            'name' => esc_html__('Maintenence Fee', 'houzez'),
            'type' => 'text',
            'std' => "",
            'columns' => 6,
            'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][126] = array(
        'id' => "{$houzez_prefix}mc_utilities",
        'name' => esc_html__('Utilities', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][127] = array(
        'id' => "{$houzez_prefix}mc_total_monthly_cost",
        'name' => esc_html__('Total Monthly Cost', 'houzez'),
        'placeholder' => esc_html__('Enter Total of all Monthly Cost', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );   

    $meta_boxes[0]['fields'][128] = array(
        'name' => esc_html__('Move in Cost', 'houzez'),
        'type' => 'heading',
        'columns' => 12,
        'tab' => 'cost_breakdown',
    ); 

    $meta_boxes[0]['fields'][129] = array(
        'id' => "{$houzez_prefix}mic_deposit",
        'name' => esc_html__('Deposit', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][130] = array(
        'id' => "{$houzez_prefix}mic_key_money",
        'name' => esc_html__('Key Money', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][131] = array(
        'id' => "{$houzez_prefix}min_agency_fee",
        'name' => esc_html__('Agency Fee', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][132] = array(
        'id' => "{$houzez_prefix}mic_guarantor_fee",
        'name' => esc_html__('Guarantor Fee', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][133] = array(
        'id' => "{$houzez_prefix}mic_advanced_rent_fee",
        'name' => esc_html__('Rent in Advance', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][134] = array(
        'id' => "{$houzez_prefix}mic_total_move_in_cost",
        'name' => esc_html__('Total Move in Cost', 'houzez'),
        'placeholder' => esc_html__('Enter Total of all move-in-cost', 'houzez'),
        'type' => 'text',
        'std' => "",
        'columns' => 6,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][135] = array(
        'name' => esc_html__('Additional Cost', 'houzez'),
        'type' => 'heading',
        'columns' => 12,
        'tab' => 'cost_breakdown',
    );

    $meta_boxes[0]['fields'][136] = array(
        'id' => 'additional_cost',
        'type' => 'group',
        'tab' => 'cost_breakdown',
        'clone' => true,
        'sort_clone' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Cost Name', 'houzez'),
                'id' => "{$houzez_prefix}additional_cost_name",
                'type' => 'text',
                'columns' => 6,
            ),
            array(
                'name' => esc_html__('Fee', 'houzez'),
                'id' => "{$houzez_prefix}additional_cost_fee",
                'type' => 'text',
                'columns' => 6,
            )
        )
    );

    $meta_boxes[0]['fields'][137] = array(
        'id' => "{$houzez_prefix}full_address_private",
        'name' => esc_html__('Full Address', 'houzez'),
        'type' => 'textarea',
        'std' => "",
        'columns' => 12,
        'tab' => 'property_map',
    );
    

    return $meta_boxes;
}

function houzez_child_build_taxonomies() {
    register_taxonomy('property_station', 'property', array(
            'labels' => array(
                'name'              => __('Stations', 'houzez'),
                'add_new_item'      => __('Add New Station','houzez'),
                'new_item_name'     => __('New Station','houzez')
            ),
            'hierarchical'  => true,
            'query_var'     => true,
            'show_in_rest'          => true,
            'rest_base'             => 'label',
            'rest_controller_class' => 'WP_REST_Terms_Controller',
            'rewrite'       => array( 'slug' => 'station' )
        )
    );
}

add_action( 'init', 'houzez_child_build_taxonomies', 0 );


add_filter('houzez_state_labels', 'houzez_state_labels_filter');
function houzez_state_labels_filter() {
    $labels = array(
            'name'              => __('State/Pref','houzez-theme-functionality'),
            'add_new_item'      => __('Add Property State/Pref','houzez-theme-functionality'),
            'new_item_name'     => __('New Property State/Pref','houzez-theme-functionality')
        );
    return $labels;
}

add_filter('houzez_city_labels', 'houzez_city_labels_filter');
function houzez_city_labels_filter() {
    $labels = array(
            'name'              => __('City/District','houzez-theme-functionality'),
            'add_new_item'      => __('Add New City/District','houzez-theme-functionality'),
            'new_item_name'     => __('New City/District','houzez-theme-functionality')
        );
    return $labels;
}

function houzez_resend_for_approval()
{

    global $current_user;
    $prop_id = intval($_POST['propid']);

    wp_get_current_user();
    $userID = $current_user->ID;
    $post = get_post($prop_id);

    if ($post->post_author != $userID) {
        wp_die('no kidding');
    }

    $available_listings = get_user_meta($userID, 'package_listings', true);

    if ($available_listings > 0 || $available_listings == -1) {
        $prop = array(
            'ID' => $prop_id,
            'post_type' => 'property',
            'post_status' => 'publish'
        );
        wp_update_post($prop);
        update_post_meta($prop_id, 'fave_featured', 0);

        if ($available_listings != -1) { // if !unlimited
            update_user_meta($userID, 'package_listings', $available_listings - 1);
        }
        echo json_encode(array('success' => true, 'msg' => esc_html__('Reactivated', 'houzez')));

        $submit_title = get_the_title($prop_id);

        $args = array(
            'submission_title' => $submit_title,
            'submission_url' => get_permalink($prop_id)
        );
        //houzez_email_type(get_option('admin_email'), 'admin_expired_listings', $args);


    } else {
        echo json_encode(array('success' => false, 'msg' => esc_html__('No Plans Active', 'houzez')));
        wp_die();
    }
    wp_die();

}




function houzez_get_search_template_link() {

    $search_result_page = houzez_option('search_result_page');
    if( $search_result_page == 'half_map' ) {
        $template = 'template/property-listings-map.php';
    } else {
        $template = 'template/template-search.php';
    }

    $args = array(
        'meta_key' => '_wp_page_template',
        'sort_order' => 'desc',
        'sort_column' => 'ID',
        'meta_value' => $template
    );
    $pages = get_pages($args);
    if( $pages ) {
        $add_link = get_permalink( $pages[0]->ID );
    } else {
        $add_link = home_url('/');
    }
    return $add_link;
}

function houzez_get_invoice_price ( $invoice_price ) {
    $invoice_price = doubleval( $invoice_price );
    if( $invoice_price ) {
        if ( class_exists( 'WP_Currencies' ) && isset( $_COOKIE[ "houzez_set_current_currency" ] ) ) {
            $listing_price = apply_filters( 'houzez_currency_switcher_filter', $invoice_price );
            return $listing_price;
        }
        $invoice_currency = houzez_get_currency();
        $price_decimals = 0;
        $invoice_currency_pos = houzez_option( 'currency_position' );
        $thousands_separator = houzez_option( 'thousands_separator' );
        $decimal_point_separator = houzez_option( 'decimal_point_separator' );
        //number_format() — Format a number with grouped thousands
        $final_price = number_format ( $invoice_price , $price_decimals , $decimal_point_separator , $thousands_separator );
        if(  $invoice_currency_pos == 'before' ) {
            return $invoice_currency . $final_price;
        } else {
            return $final_price . $invoice_currency;
        }
    } else {
        $invoice_currency = '';
    }
    return $invoice_currency;
}


function houzez_listing_price_v1()
{
    $output = '';
    $sale_price     = get_post_meta( get_the_ID(), 'fave_property_price', true );
    $second_price     = get_post_meta( get_the_ID(), 'fave_property_sec_price', true );
    $price_postfix  = get_post_meta( get_the_ID(), 'fave_property_price_postfix', true );
    $price_prefix  = get_post_meta( get_the_ID(), 'fave_property_price_prefix', true );

    $price_as_text = doubleval( $sale_price );
    if( !$price_as_text ) {
        if( is_singular( 'property' ) ) {
            $output .= '<span class="item-price item-price-text price-single-listing-text">'.$sale_price. '</span>';
            return $output;
        }
        $output .= '<span class="item-price item-price-text">'.$sale_price. '</span>';
        return $output;
    }

    if( !empty( $price_prefix ) ) {
        $price_prefix = '<span class="price-start">'.$price_prefix.'</span>';
    }

    if (!empty( $sale_price ) ) {

        if (!empty( $price_postfix )) {
            $price_postfix = '&#47;' . $price_postfix;
        }

        if (!empty( $sale_price ) && !empty( $second_price ) ) {

            if( is_singular( 'property' ) ) {
                $output .= '<span class="item-price">'.$price_prefix. houzez_get_property_price($sale_price) . '</span>';
                if (!empty($second_price)) {
                    $output .= '<span class="item-sub-price">';
                    $output .= $second_price;
                    $output .= '</span>';
                }
            } else {
                $output .= $price_prefix.'<span class="item-price">'. houzez_get_property_price($sale_price) . '</span>';
                if (!empty($second_price)) {
                    $output .= '<span class="item-sub-price">';
                    $output .= $second_price;
                    $output .= '</span>';
                }
            }
        } else {
            if (!empty( $sale_price )) {
                if( is_singular( 'property' ) ) {
                    $output .= '<span class="item-price">';
                    $output .= $price_prefix. houzez_get_property_price($sale_price) . $price_postfix;
                    $output .= '</span>';
                } else {
                    $output .= $price_prefix;
                    $output .= '<span class="item-price">';
                    $output .= houzez_get_property_price($sale_price) . $price_postfix;
                    $output .= '</span>';
                }
            }
        }

    }
    return $output;
}

function houzez_listing_price_v5()
{
    $output = '';
    $sale_price     = get_post_meta( get_the_ID(), 'fave_property_price', true );
    $second_price     = get_post_meta( get_the_ID(), 'fave_property_sec_price', true );
    $price_postfix  = get_post_meta( get_the_ID(), 'fave_property_price_postfix', true );
    $price_prefix  = get_post_meta( get_the_ID(), 'fave_property_price_prefix', true );

    if (!empty( $price_postfix )) {
        $price_postfix = '&#47;' . $price_postfix;
    }
    
    $output .= '<h4 class="price-left"><span>'.$price_prefix.'</span> '. houzez_get_property_price($sale_price) . '</h4>';
    if (!empty($second_price)) {
        $output .= '<p class="price-right">';
        $output .= $second_price;
        $output .= '</p>';
    }
    return $output;
}

function houzez_listing_price_for_print( $propID )
{

    $sale_price     = get_post_meta( $propID, 'fave_property_price', true );
    $second_price     = get_post_meta( $propID, 'fave_property_sec_price', true );
    $price_postfix  = get_post_meta( $propID, 'fave_property_price_postfix', true );

    $price_prefix  = get_post_meta( $propID, 'fave_property_price_prefix', true );

    $output = '';
    $price_as_text = doubleval( $sale_price );
    if( !$price_as_text ) {
        $output .= '<span class="item-price item-price-text">'.$sale_price. '</span>';
        return $output;
    }

    if( !empty( $price_prefix ) ) {
        $price_prefix = '<span class="price-start">'.$price_prefix.'</span>';
    }

    $output = '';

    if (!empty( $sale_price ) ) {

        if (!empty( $price_postfix )) {
            $price_postfix = '&#47;' . $price_postfix;
        }

        if (!empty( $sale_price ) && !empty( $second_price ) ) {

            $output .= $price_prefix. '<span class="item-price">'. houzez_get_property_price($sale_price) . '</span>';
            if (!empty($second_price)) {
                $output .= '<span class="item-sub-price">';
                $output .= $second_price;
                $output .= '</span>';
            }
        } else {
            if (!empty( $sale_price )) {
                $output .= '<span class="item-price">';
                $output .= $price_prefix.' '.houzez_get_property_price($sale_price) . $price_postfix;
                $output .= '</span>';
            }
        }

    }
    return $output;
}
function houzez_property_price_admin () {
        global $post;
        $sale_price     = get_post_meta( get_the_ID(), 'fave_property_price', true );
        $second_price     = get_post_meta( get_the_ID(), 'fave_property_sec_price', true );
        $price_postfix  = get_post_meta( get_the_ID(), 'fave_property_price_postfix', true );

        $output = '';
        $price_as_text = doubleval( $sale_price );
        if( !$price_as_text ) {
            $output .= '<b>'.$sale_price. '</b>';
            echo $output;
            return;
        }

        if (!empty( $sale_price ) ) {

            if (!empty( $price_postfix )) {
                $price_postfix = '&#47;' . $price_postfix;
            }

            if (!empty( $sale_price ) && !empty( $second_price ) ) {
                echo '<b>' . houzez_get_property_price($sale_price) . '</b><br/>';

                if (!empty( $second_price )) {
                    echo $second_price;
                }
            } else {
                if (!empty( $sale_price )) {
                    echo '<b>';
                    echo houzez_get_property_price($sale_price) . $price_postfix;
                    echo '</b>';
                }
            }

        }
    }
?>