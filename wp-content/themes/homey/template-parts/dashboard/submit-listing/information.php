<?php
global $homey_local, $hide_fields;
$openning_hours_list = homey_option('openning_hours_list');
$openning_hours_list_array = explode( ',', $openning_hours_list );

$add_location_lat = homey_option('add_location_lat');
$add_location_long = homey_option('add_location_long');
$geo_country_limit = homey_option('geo_country_limit');
$geocomplete_country = '';
if( $geo_country_limit != 0 ) {
    $geocomplete_country = homey_option('geocomplete_country');
}
?>
<div class="form-step">
    <!--step information-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title"><?php echo esc_html(homey_option('ad_section_info'));?></h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <?php if($hide_fields['country'] != 1) { ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="country"><?php echo esc_attr(homey_option('ad_country')).homey_req('country'); ?></label>
                        <select name="listing_country" class="selectpicker" id="listing_country" <?php homey_required('listing_country'); ?> data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_attr(homey_option('ad_listing_country_plac')); ?></option>
                            <?php
                            $listing_country = get_terms (
                                array(
                                    "listing_country"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_country', $listing_country, -1);
                            ?>

                        </select>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php /*$room_type = homey_get_terms('room_type'); ?>
            <?php if($hide_fields['room_type'] != 1) { ?>
            <div class="row">
                <div class="col-sm-12 col-xs-12"><label> <?php echo esc_attr(homey_option('ad_room_type')).homey_req('room_type'); ?> </label></div>
                <?php if(!empty($room_type)) { ?>

                    <?php foreach($room_type as $room) { ?>    
                    <div class="col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="control control--radio radio-tab">
                                <input type="radio" name="room_type" <?php homey_required('room_type'); ?> value="<?php echo esc_attr($room->term_id); ?>">
                                <span class="control-text"><?php echo esc_attr($room->name); ?></span>
                                <span class="control__indicator"></span>
                                <span class="radio-tab-inner"></span>
                            </label>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <?php }*/ ?>

            <div class="row">
                <?php if($hide_fields['listing_title'] != 1) { ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="listing_title"><?php echo esc_attr(homey_option('ad_title')).homey_req('listing_title'); ?></label>
                        <input type="text" name="listing_title" id="listing_title" class="form-control" <?php homey_required('listing_title'); ?> placeholder="<?php echo esc_attr(homey_option('ad_title_plac'));?>">
                    </div>
                </div>                
                <?php } ?>

                <?php if($hide_fields['listing_address'] != 1) { ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="listing_address"><?php echo esc_attr(homey_option('ad_address')).homey_req('listing_address'); ?>1</label>
                        <input type="text" autocomplete="false" name="listing_address" <?php homey_required('listing_address'); ?> class="form-control" id="listing_address" placeholder="<?php echo esc_attr(homey_option('ad_address_placeholder')); ?>">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="listing_address2"><?php echo esc_attr(homey_option('ad_address')); ?>2</label>
                        <input type="text" autocomplete="false" name="listing_address2" class="form-control" id="listing_address2" placeholder="<?php echo esc_attr(homey_option('ad_address_placeholder')); ?>">
                    </div>
                </div>                
                <?php } ?>

                <?php if($hide_fields['city'] != 1) { ?>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="city"><?php echo esc_attr(homey_option('ad_city')).homey_req('city'); ?></label>
                        <input type="text" autocomplete="false" name="locality" id="city" <?php homey_required('city'); ?> class="form-control" placeholder="<?php echo esc_attr(homey_option('ad_city_placeholder')); ?>">
                    </div>
                </div>
                <?php } ?>

                <?php if($hide_fields['state'] != 1) { ?>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="state"><?php echo esc_attr(homey_option('ad_state')).homey_req('state'); ?></label>
                        <input type="text" autocomplete="false" name="administrative_area_level_1" id="countyState"  class="form-control" id="state" <?php homey_required('state'); ?> placeholder="<?php echo esc_attr(homey_option('ad_state_placeholder')); ?>">

                    </div>
                </div>
                <?php } ?>

                <?php if($hide_fields['zipcode'] != 1) { ?>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="zip"><?php echo esc_attr(homey_option('ad_zipcode')).homey_req('zip'); ?></label>
                        <input type="text" autocomplete="false" name="zip" <?php homey_required('zip'); ?> class="form-control" id="zip" placeholder="<?php echo esc_attr(homey_option('ad_zipcode_placeholder')); ?>">
                    </div>
                </div>
                <?php } ?>

                <?php if($hide_fields['listing_phone'] != 1) { ?>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="listing_phone"> <?php echo esc_attr(homey_option('ad_listing_phone')); ?> </label>
                        <input type="text" class="form-control" name="listing_phone" id="listing_phone"  placeholder="<?php echo esc_attr(homey_option('ad_phone_plac'));?>">
                    </div>
                </div>
                <?php } ?>                


                <?php if($hide_fields['listing_url'] != 1) { ?>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="listing_url"> <?php echo esc_attr(homey_option('ad_listing_url')); ?> </label>
                        <input type="text" class="form-control" name="listing_url" id="listing_url"  placeholder="<?php echo esc_attr(homey_option('ad_url_plac'));?>">
                    </div>
                </div>
                <?php } ?>

                <?php if($hide_fields['description'] != 1) { ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description"><?php echo esc_attr(homey_option('ad_des')); ?></label>
                        <?php 
                        // default settings - Kv_front_editor.php
                        $content = '';
                        $editor_id = 'description';
                        $settings =   array(
                            'wpautop' => true, // use wpautop?
                            'media_buttons' => false, // show insert/upload button(s)
                            'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                            'textarea_rows' => '10', // rows="..."
                            'tabindex' => '',
                            'editor_css' => '', //  extra styles for both visual and HTML editors buttons, 
                            'editor_class' => '', // add extra class(es) to the editor textarea
                            'teeny' => false, // output the minimal editor config used in Press This
                            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
                            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                            'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
                        );
                        wp_editor( $content, $editor_id, $settings ); ?>
                    </div>
                </div>
                <?php } ?>

                <?php //if($hide_fields['url'] != 1) { ?>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="url">Guide</label>
                        <label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_more_guid')); ?>
                            <input type="checkbox" name="list_more_guid" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>                        
                        <select name="listing_guid[]" class="selectpicker" id="listing_guid" data-live-search="true" data-live-search-style="begins" multiple="">
                            <option selected="selected" value="">Select Guid</option>
                            <?php
                            $args = array(
                                        //'role'         => '',
                                        'orderby'      => 'login',
                                        'order'        => 'ASC',
                                        'fields'       => array('ID','user_login')
                                     ); 
                            $users = get_users( $args ); 
                            foreach ($users as $key => $value) {
                                echo '<option value="'.$value->ID.'">'.$value->user_login.'</option>';
                            }
                        ?>
                        </select>                        
                    </div>
                </div>
                <?php //} ?>
            </div>
        </div>
    </div>

    <?php if($hide_fields['section_openning'] != 1) { ?>
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title"><?php echo esc_attr(homey_option('ad_section_openning')); ?></h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label for="property-title"><?php echo esc_attr(homey_option('ad_mon_fri')); ?></label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="mon_fri_open" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['open_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['open_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="mon_fri_close" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['close_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['close_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="control control--checkbox radio-tab">
                                <input name="mon_fri_closed" type="checkbox">
                                <span class="contro-text"><?php echo esc_attr(homey_option('ad_close')); ?></span>
                                <span class="control__indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label for="property-title"><?php echo esc_attr(homey_option('ad_sat')); ?></label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="sat_open" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['open_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['open_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="sat_close" class="selectpicker" id="property-type" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['close_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['close_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="control control--checkbox radio-tab">
                                <input name="sat_closed" type="checkbox">
                                <span class="contro-text"><?php echo esc_attr(homey_option('ad_close')); ?></span>
                                <span class="control__indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label for="property-title"><?php echo esc_attr(homey_option('ad_sun')); ?></label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="sun_open" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['open_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['open_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <select name="sun_close" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="<?php echo esc_attr($homey_local['close_time_label']); ?>">
                                <option value=""><?php echo esc_attr($homey_local['close_time_label']); ?></option>
                                <?php 
                                foreach ($openning_hours_list_array as $hour) {
                                    echo '<option value="'.trim($hour).'">'.trim($hour).'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="control control--checkbox radio-tab">
                                <input name="sun_closed" type="checkbox">
                                <span class="contro-text"><?php echo esc_attr(homey_option('ad_close')); ?></span>
                                <span class="control__indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } // End openning Hours ?>
</div>