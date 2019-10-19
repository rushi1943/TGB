<?php
global $homey_local, $homey_prefix;

$get_animals = array();
$get_animals = isset ( $_GET['animal'] ) ? $_GET['animal'] : $get_animals;

if( taxonomy_exists('listing_animal') ) {
    $animals = get_terms(
        array(
            "listing_animal"
        ),
        array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
        )
    );
    $animals_count = count($get_animals);
    $checked_animal = '';
    $count = 0;
    if (!empty($animals)) { ?>

        <div class="filters-wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <div class="filters">
                        <strong><?php echo esc_attr(homey_option('srh_animals')); ?></strong>
                    </div>
                </div>
                <div class="animals-list col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    <?php
                    $total_animals = count($animals);
                    foreach ($animals as $animal):
                        $count++;

                        if (in_array($animal->slug, $get_animals)) {
                            $checked_animal = $animal->slug;
                        }

                        if($count == 1) {
                            echo '<div class="filters">';
                        }

                        if($count == 7) {
                            echo '<div class="collapse" id="collapseanimals">
                                    <div class="filters">';
                        }
                            echo '<label class="control control--checkbox">';
                                echo '<input name="animal[]" type="checkbox" '.checked( $checked_animal, $animal->slug, false ).' value="' . esc_attr( $animal->slug ) . '">';
                                echo '<span class="contro-text">'.esc_attr( $animal->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';

                        if( ($count == 6) || ($count < 6 && $count == $total_animals) ) {    
                            echo '</div>';
                        }

                        if( ($count > 6) && ($count == $total_animals) ) {
                            echo '</div></div>';
                        }

                    endforeach;
                    ?>
                </div>

                <?php if($total_animals > 6 ) { ?>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <div class="filters">
                        <a role="button" data-toggle="collapse" data-target="#collapseanimals" aria-expanded="false" aria-controls="collapseanimals">
                            <span class="filter-more-link"><?php echo esc_attr($homey_local['search_more']); ?></span> 
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i> 
                        </a>
                    </div>
                </div>
                <?php } ?>

            </div><!-- featues row -->
        </div><!-- .filters-wrap -->

    <?php    
    }
}
?>