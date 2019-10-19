<?php
global $post, $hide_fields, $homey_local, $listing_data, $listing_meta_data;
$video_url = get_post_meta($listing_data->ID, 'homey_video_url', true);
$video_url = isset($video_url) ? $video_url : '';
$additional_rules = $listing_meta_data['homey_additional_rules'][0]; 
$cancellation_policy = $listing_meta_data['homey_cancellation_policy'][0]; 
$class = $class2 = '';
if(isset($_GET['tab']) && $_GET['tab'] == 'media') {
    $class = 'in active';
    $style = 'visibility: visible; height: auto';
} else {
    $style = 'visibility: hidden; height: 0; position: absolute;';
}
/*if(isset($_GET['tab']) && $_GET['tab'] == 'calendar') {
    $class2 = 'tab-pane';
}*/
?>
<div id="media-tab" style="<?php echo $style; ?>" class="fade <?php echo esc_attr($class).' '.$class2; ?>">
    <div class="block-title visible-xs">
        <h2 class="title"><?php echo esc_attr(homey_option('ad_section_media')); ?></h2>
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
								<input type="radio" name="room_type" <?php homey_required('room_type'); ?> <?php checked( homey_get_listing_tax_id($listing_data->ID, 'room_type'), $room->term_id ); ?>  value="<?php echo esc_attr($room->term_id); ?>">
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
                    <select name="listing_category[]" class="selectpicker" multiple id="listing_category" data-live-search="false" data-live-search-style="begins">
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
                    <select name="listing_terrain[]"  multiple class="selectpicker" id="listing_terrain" data-live-search="false" data-live-search-style="begins">
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
                            <?php
                            $listing_images = get_post_meta( $listing_data->ID, 'homey_listing_images', false );

                            $featured_image_id = get_post_thumbnail_id( $listing_data->ID );
                            $listing_images[] = $featured_image_id;
                            $listing_images = array_unique($listing_images);

                            if( !empty($listing_images[0])) {
                                foreach ($listing_images as $listing_image_id) {

                                    $is_featured_image = ($featured_image_id == $listing_image_id);
                                    $featured_icon = ($is_featured_image) ? 'fa-star' : 'fa-star-o';

                                    $listing_thumb = wp_get_attachment_image_src( $listing_image_id, 'homey-listing-thumb' );

                                    $img_available = wp_get_attachment_image($listing_image_id, 'thumbnail');

                                    if( !empty($img_available)) {

                                        echo '<div class="col-sm-2 col-xs-4 listing-thumb">';
                                        echo '<figure class="upload-gallery-thumb">';
                                        echo wp_get_attachment_image($listing_image_id, 'thumbnail');
                                        echo '</figure>';
                                        echo '<div class="upload-gallery-thumb-buttons">';
                                            echo '<button class="icon-featured" data-thumb="'.$listing_thumb[0].'" data-listing-id="' . intval($listing_data->ID) . '"  data-attachment-id="' . intval($listing_image_id) . '"><i class="fa '.$featured_icon.'"></i></button>';
                                            echo '<button class="icon-delete" data-listing-id="' . intval($listing_data->ID) . '"  data-attachment-id="' . intval($listing_image_id) . '"><i class="fa fa-trash-o"></i></button>';
                                            echo '<input type="hidden" class="listing-image-id" name="listing_image_ids[]" value="' . intval($listing_image_id) . '"/>';
                                            if ($is_featured_image) {
                                                echo '<input type="hidden" class="featured_image_id" name="featured_image_id" value="' . intval($listing_image_id) . '">';
                                            }
                                        echo '</div>';
                                        echo '<span style="display: none;" class="icon icon-loader"><i class="fa fa-spinner fa-spin"></i></span>';
                                        echo '</div>';

                                    }
                                }
                            }
                            ?>
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
                        <input type="text" class="form-control" name="video_url" value="<?php echo esc_url($video_url); ?>" placeholder="<?php echo esc_attr(homey_option('ad_video_placeholder')); ?>">
                    </div>
                </div>
            </div>
            <?php } ?>            
            <?php if($hide_fields['additional_rules'] != 1) { ?>
            <div class="row">
                <div class="col-sm-12 col-sm-12">
                    <div class="form-group">
                        <label for="additional_rules"><?php echo esc_attr(homey_option('ad_add_rules_info_optional')); ?></label>
                        <textarea name="additional_rules" class="form-control" id="rules" rows="3"><?php echo ($additional_rules); ?></textarea>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if($hide_fields['cancel_policy'] != 1) { ?>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="cancel"><?php echo esc_attr(homey_option('ad_cancel_policy')).homey_req('cancellation_policy'); ?></label>
                        <textarea name="cancellation_policy" class="form-control" <?php homey_required('cancellation_policy'); ?> placeholder="<?php echo esc_attr(homey_option('ad_cancel_policy_plac')); ?>" id="cancellation_policy" rows="3"><?php echo ($cancellation_policy); ?></textarea>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>