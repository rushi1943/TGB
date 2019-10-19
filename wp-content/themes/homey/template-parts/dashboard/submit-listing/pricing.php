<?php
global $homey_local, $hide_fields, $homey_booking_type;

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
<div class="form-step">
    <!--step information-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title"><?php echo esc_html(homey_option('ad_pricing_label')); ?></h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <?php //if($hide_fields['instant_booking'] != 1) { ?>
                <div class="<?php echo esc_attr($instance_classes); ?>">
                    <div class="form-group">
                        <label>Trip Dates & Time</label>
                        <input type="text" name="trip_date" id="trip_date" class="form-control" >
                    </div>
                </div>
                <?php //} ?>
				
				<div class="col-sm-12 col-xs-12">
					<label for="night-price"><?php echo esc_html__('Price', 'homey'); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">                        
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_price_all_date')); ?>
                            <input type="checkbox" name="listing_price_all_date" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_run_deal')); ?>
                            <input type="checkbox" name="listing_run_deal" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<input type="text" name="listing_price" class="form-control" id="listing_price" placeholder="<?php echo esc_attr(homey_option('ad_listing_price_plac'));?>">
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_attr(homey_option('ad_listing_participants')); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab">
                            <?php echo esc_attr(homey_option('ad_listing_unlimited_participants')); ?>
                            <input type="checkbox" name="listing_unlimited_participants" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="listing_participants" class="form-control" id="listing_participants" placeholder="<?php echo esc_attr(homey_option('ad_participants_plac'));?>">
                    </div>
                </div>
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_html__('Age', 'homey'); ?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_age_all'));?>
                            <input type="checkbox" name="listing_age_all" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_attr(homey_option('ad_listing_age_family_friendly'));?>
                            <input type="checkbox" name="listing_age_family_friendly" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<input type="text" name="listing_age" class="form-control"  id="listing_age" placeholder="<?php echo esc_attr(homey_option('ad_listing_age_plac'));?>">
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label for="list_participat"><?php echo esc_attr(homey_option('listing_loadge_label'));?></label>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('
						Yes', 'homey'); ?>
                            <input type="radio" name="listing_loadge" value="1">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('
						No', 'homey'); ?>
                            <input type="radio" name="listing_loadge" value="0">
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
						<textarea name="listing_loadge_description" class="form-control" id="listing_loadge_description" placeholder="<?php echo esc_html__('Hotel contact info, booking code, pricing differences, room options, etc.', 'homey'); ?>">
						</textarea>
					</div>
				</div>
				
            </div>
        </div>
    </div>
</div>