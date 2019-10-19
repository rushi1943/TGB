<?php
global $homey_prefix, $hide_fields, $homey_local, $listing_data, $listing_meta_data, $homey_booking_type;

$trip_date = homey_get_field_meta('trip_date');
$listing_price_all_date = homey_get_field_meta('listing_price_all_date');
$listing_run_deal = homey_get_field_meta('listing_run_deal');
$listing_price = homey_get_field_meta('listing_price');
$listing_unlimited_participants = homey_get_field_meta('listing_unlimited_participants');
$listing_participants = homey_get_field_meta('listing_participants');
$listing_age_family_friendly = homey_get_field_meta('listing_age_family_friendly');
$listing_age_all = homey_get_field_meta('listing_age_all');
$listing_age = homey_get_field_meta('listing_age');
$listing_loadge = homey_get_field_meta('listing_loadge');
$listing_loadge_description = homey_get_field_meta('listing_loadge_description');

$num_additional_guests = homey_get_field_meta('num_additional_guests');
$cleaning_fee = homey_get_field_meta('cleaning_fee');
$cleaning_fee_type = homey_get_field_meta('cleaning_fee_type'); 
$city_fee = homey_get_field_meta('city_fee'); 
$city_fee_type = homey_get_field_meta('city_fee_type');
$security_deposit = homey_get_field_meta('security_deposit');
$tax_rate = homey_get_field_meta('tax_rate');
$price_postfix = homey_get_field_meta('price_postfix');

$class = '';
if(isset($_GET['tab']) && $_GET['tab'] == 'pricing') {
    $class = 'in active';
}

if($homey_booking_type == 'per_hour') {
    $daily_hourly_label = homey_option('ad_hourly_text');
} else {
    $daily_hourly_label = homey_option('ad_daily_text');
}

if($hide_fields['price_postfix'] != 1) {
    $instance_classes = 'col-sm-12 col-xs-12';
    $postfix_classes = 'col-sm-6 col-xs-12';
} else {
    $instance_classes = 'col-sm-6 col-xs-12';
    $postfix_classes = 'col-sm-6 col-xs-12';
}

?>
<div id="pricing-tab" class="tab-pane fade <?php echo esc_attr($class);?>">
    <div class="block-title visible-xs">
        <h3 class="title"><?php echo esc_attr(homey_option('ad_pricing_label'));?></h3>
    </div>
    <div class="block-body">
        <div class="row">
                <?php //if($hide_fields['instant_booking'] != 1) { ?>
                <div class="<?php echo esc_attr($instance_classes); ?>">
                    <div class="form-group">
                        <label>Trip Dates & Time</label>
                        <input type="text" name="trip_date"  class="form-control" id="trip_date" value="<?php echo esc_attr($trip_date); ?>">
                    </div>
                </div>                
                <?php //} ?>
				<div class="col-sm-12 col-xs-12">
					<label for="night-price"><?php echo esc_html__('Price', 'homey'); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">                        
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_price_all_date')); ?>
                            <input type="checkbox" name="listing_price_all_date" <?php checked( $listing_price_all_date, 1 ); ?> value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_run_deal')); ?>
                            <input type="checkbox" <?php checked( $listing_run_deal, 1 ); ?> name="listing_run_deal" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<input type="text" name="listing_price" class="form-control" id="listing_price" value="<?php echo esc_attr($listing_price); ?>"placeholder="<?php echo esc_attr(homey_option('ad_listing_price_plac'));?>">
					</div>
				</div>				
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_attr(homey_option('ad_listing_participants')); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab">
                            <?php echo esc_attr(homey_option('ad_listing_unlimited_participants')); ?>
                            <input type="checkbox" <?php checked( $listing_unlimited_participants, 1 ); ?> name="listing_unlimited_participants" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<input type="text" name="listing_participants" class="form-control" id="listing_participants" value="<?php echo esc_attr($listing_participants); ?>" placeholder="<?php echo esc_attr(homey_option('ad_participants_plac'));?>">
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_html__('Age', 'homey'); ?></label>
				</div>
                <div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_age_all'));?>
                            <input type="checkbox" name="listing_age_all" <?php checked( $listing_age_all, 1 ); ?> value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_age_family_friendly'));?>
                            <input type="checkbox" name="listing_age_family_friendly" <?php checked( $listing_age_family_friendly, 1 ); ?> value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<input type="text" name="listing_age" class="form-control"  id="listing_age" value="<?php echo esc_attr($listing_age); ?>" placeholder="<?php echo esc_attr(homey_option('ad_listing_age_plac'));?>">
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_html__('Does this trip include lodging?', 'homey'); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('
						Yes', 'homey'); ?>
                            <input type="radio" name="listing_loadge" <?php checked( $listing_loadge, '1' ); ?> value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>						
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('
						No', 'homey'); ?>
						<input type="radio" name="listing_loadge" <?php checked( $listing_loadge, '0' ); ?> value="0">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('
						(If Yes) please include lodging details & instructions:', 'homey'); ?>
                        </label>
						<textarea name="listing_loadge_description" class="form-control" id="listing_loadge_description" placeholder="<?php echo esc_html__('Hotel contact info, booking code, pricing differences, room options, etc.', 'homey'); ?>"><?php echo esc_attr($listing_loadge_description); ?></textarea>                        
					</div>
				</div>
            </div>
        </div>
</div>