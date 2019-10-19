<?php
global $homey_local, $hide_fields, $listing_data;
$class = '';
if(isset($_GET['tab']) && $_GET['tab'] == 'features') {
    $class = 'in active';
}
?>

<div id="features-tab" class="tab-pane fade <?php echo esc_attr($class); ?>">
    <div class="block-title visible-xs">
        <h3 class="title"><?php echo esc_attr(homey_option('ad_features')); ?></h3>
    </div>
    <div class="block-body">

        <?php if($hide_fields['animals'] != 1) { ?>
        <div class="listing-form-row">
            <div class="house-features-list">
                <label class="label-title"><?php echo esc_attr(homey_option('ad_animals')); ?></label>

                <?php
                $animals_terms_id = array();
                $animals_terms = get_the_terms( $listing_data->ID, 'listing_animal' );
                if ( $animals_terms && ! is_wp_error( $animals_terms ) ) {
                    foreach( $animals_terms as $animal ) {
                        $animals_terms_id[] = intval( $animal->term_id );
                    }
                }

                $animals = get_terms( 'listing_animal', array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false ) );

                if (!empty($animals)) {
                    
                    foreach ($animals as $animal) {

                        if ( in_array( $animal->term_id, $animals_terms_id ) ) {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_animal[]" id="animal-' . esc_attr( $animal->slug ). '" value="' . esc_attr( $animal->term_id ). '" checked />';
                                echo '<span class="contro-text">'.esc_attr( $animal->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                        } else {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_animal[]" id="animal-' . esc_attr( $animal->slug ). '" value="' . esc_attr( $animal->term_id ). '">';
                                echo '<span class="contro-text">'.esc_attr( $animal->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                        }
                    }
                }
                ?>

            </div>
        </div>
        <?php } ?>

        <?php if($hide_fields['terrains'] != 1) { ?>
        <div class="listing-form-row">
            <div class="house-features-list">
                <label class="label-title"><?php echo esc_attr(homey_option('ad_terrains')); ?></label>
                <?php
                $terrains_terms_id = array();
                $terrains_terms = get_the_terms( $listing_data->ID, 'listing_terrain' );
                if ( $terrains_terms && ! is_wp_error( $terrains_terms ) ) {
                    foreach( $terrains_terms as $terrain ) {
                        $terrains_terms_id[] = intval( $terrain->term_id );
                    }
                }

                $terrains = get_terms( 'listing_terrain', array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false ) );

                if (!empty($terrains)) {
                    
                    foreach ($terrains as $terrain) {
                        if ( in_array( $terrain->term_id, $terrains_terms_id ) ) {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_terrain[]" id="terrain-' . esc_attr( $terrain->slug ). '" value="' . esc_attr( $terrain->term_id ). '" checked />';
                                echo '<span class="contro-text">'.esc_attr( $terrain->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                        } else {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_terrain[]" id="terrain-' . esc_attr( $terrain->slug ). '" value="' . esc_attr( $terrain->term_id ). '">';
                                echo '<span class="contro-text">'.esc_attr( $terrain->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                            
                        }
                    }
                }
                ?>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>