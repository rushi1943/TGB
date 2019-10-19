<?php
global $homey_local, $hide_fields;
?>
<div class="form-step">
    <!--step information-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title"><?php echo esc_attr(homey_option('ad_features')); ?></h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">

            <?php if($hide_fields['animals'] != 1) { ?>
            <div class="listing-form-row">
                <div class="house-features-list">
                    <label class="label-title"><?php echo esc_attr(homey_option('ad_animals')); ?></label>

                    <?php
                    $animals = get_terms( 'listing_animal', array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false ) );

                    if (!empty($animals)) {
                        $count = 1;
                        foreach ($animals as $animal) {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_animal[]" id="animal-' . esc_attr( $animal->slug ). '" value="' . esc_attr( $animal->term_id ). '">';
                                echo '<span class="contro-text">'.esc_attr( $animal->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                            $count++;
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
                    $terrains = get_terms( 'listing_terrain', array( 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false ) );

                    if (!empty($terrains)) {
                        $count = 1;
                        foreach ($terrains as $terrain) {
                            echo '<label class="control control--checkbox">';
                                echo '<input type="checkbox" name="listing_terrain[]" id="terrain-' . esc_attr( $terrain->slug ). '" value="' . esc_attr( $terrain->term_id ). '">';
                                echo '<span class="contro-text">'.esc_attr( $terrain->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';
                            $count++;
                        }
                    }
                    ?>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>