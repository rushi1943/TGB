<?php
global $post, $hide_fields, $homey_local;
$layout_order = homey_option('listing_form_sections');
$layout_order = $layout_order['enabled'];
$i = 0;
$style = 'visibility: hidden; height: 0;';
if ($layout_order) { 
    foreach ($layout_order as $key=>$value) {
        $i++;
        if($i == 2 && $key == 'media') {
            $style = 'visibility: visible;';
        }
    }
}
?>
<div class="form-step form-step-gal1" style="<?php echo esc_attr($style); ?>">
    <!--step information-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title"><?php echo esc_html(homey_option('ad_section_media')); ?></h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
				<?php $room_type = homey_get_terms('room_type'); ?>

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
				<?php } ?>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('Categories', 'homey'); ?>
                        </label>
                        <select name="listing_category" class="selectpicker" id="listing_category" data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_html__('Select trip categories. The more specific, the better.', 'homey'); ?></option>
                            <?php
                            $listing_category = get_terms (
                                array(
                                    "listing_category"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_category', $listing_category, -1);
                            ?>
                        </select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('Animal Type(s)', 'homey'); ?>
                        </label>
                        <select name="listing_animal[]" multiple class="selectpicker" id="listing_animal" data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_html__('Ex. Mountains, Lake, Ocean', 'homey'); ?></option>
                            <?php
                            $listing_animal = get_terms (
                                array(
                                    "listing_animal"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_animal', $listing_animal, -1);
                            ?>
                        </select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('Terrain', 'homey'); ?>
                        </label>
                        <select name="listing_terrain[]" multiple class="selectpicker" id="listing_terrain" data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_html__('Ex. Mountains, Lake, Ocean', 'homey'); ?></option>
                            <?php
                            $listing_terrain = get_terms (
                                array(
                                    "listing_terrain"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_terrain', $listing_terrain, -1);
                            ?>
                        </select>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('Weapons/Equipment Used', 'homey'); ?>
                        </label>
                        <select name="listing_weapons[]" multiple class="selectpicker" id="listing_weapons" data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_html__('Ex. Rifle, Bow', 'homey'); ?></option>
                            <?php
                            $listing_weapons = get_terms (
                                array(
                                    "listing_weapons"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_weapons', $listing_weapons, -1);
                            ?>
                        </select>
					</div>
				</div>			
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control control--checkbox radio-tab"><?php echo esc_html__('Transportation', 'homey'); ?>
                        </label>
                        <select name="listing_transport[]" multiple class="selectpicker" id="listing_transport" data-live-search="false" data-live-search-style="begins">
                            <option selected="selected" value=""><?php echo esc_html__('Ex. Speed boat, Mule …', 'homey'); ?></option>
                            <?php
                            $listing_transport = get_terms (
                                array(
                                    "listing_transport"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );

                            homey_get_taxonomies_with_id_value( 'listing_transport', $listing_transport, -1);
                            ?>
                        </select>
					</div>
				</div>
                <div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control"><?php echo esc_html__('Upload relevant pictures and videos', 'homey'); ?>
                        </label>
					</div>
                    <div class="upload-property-media">
                        <div id="homey_gallery_dragDrop" class="media-drag-drop">
                            <div class="upload-icon">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </div>
                            <h4>
                                <?php echo homey_option('ad_drag_drop_img'); ?><br>
                                <span><?php echo esc_attr(homey_option('ad_image_size_text')); ?></span>
                            </h4>
                            <button id="select_gallery_images" href="javascript:;" class="btn btn-secondary"><i class="fa fa-cloud-upload"></i> <?php echo esc_attr(homey_option('ad_upload_btn')); ?></button>
                        </div>
                        <div id="plupload-container"></div>
                        <div id="homey_errors"></div>

                        <div class="upload-media-gallery">
                            <div id="homey_gallery_container" class="row">
                            
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($hide_fields['video_url'] != 1) { ?>
                <hr class="row-separator"> 
                <h3 class="sub-title"><?php echo esc_attr(homey_option('ad_video_heading')); ?></h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="video_url"><?php echo esc_attr(homey_option('ad_video_url')); ?></label>
                            <input type="text" class="form-control" name="video_url" placeholder="<?php echo esc_attr(homey_option('ad_video_placeholder')); ?>">
                        </div>
                    </div>
                </div>
                <?php } ?>                
                <?php if($hide_fields['additional_rules'] != 1) { ?>
                <div class="row">
                    <div class="col-sm-12 col-sm-12">
                        <div class="form-group">
                            <label for="additional_rules"><?php echo esc_attr(homey_option('ad_add_rules_info_optional')); ?></label>
                            <textarea name="additional_rules" class="form-control" id="rules" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php if($hide_fields['cancel_policy'] != 1) { ?>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="cancel"><?php echo esc_attr(homey_option('ad_cancel_policy')).homey_req('cancellation_policy'); ?></label>
						<textarea name="cancellation_policy" class="form-control" <?php homey_required('cancellation_policy'); ?> placeholder="<?php echo esc_attr(homey_option('ad_cancel_policy_plac')); ?>" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>