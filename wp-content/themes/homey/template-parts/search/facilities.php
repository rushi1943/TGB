<?php
global $homey_local, $homey_prefix;

$get_terrains = array();
$get_terrains = isset ( $_GET['terrain'] ) ? $_GET['terrain'] : $get_terrains;

if( taxonomy_exists('listing_terrain') ) {
    $terrains = get_terms(
        array(
            "listing_terrain"
        ),
        array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
        )
    );
    $terrains_count = count($get_terrains);
    $checked_terrain = '';
    $count = 0;
    if (!empty($terrains)) { ?>

        <div class="filters-wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <div class="filters">
                        <strong><?php echo esc_attr(homey_option('srh_terrains')); ?></strong>
                    </div>
                </div>
                <div class="terrains-list col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    <?php
                    $total_terrains = count($terrains);
                    foreach ($terrains as $terrain):
                        $count++;

                        if (in_array($terrain->slug, $get_terrains)) {
                            $checked_terrain = $terrain->slug;
                        }

                        if($count == 1) {
                            echo '<div class="filters">';
                        }

                        if($count == 7) {
                            echo '<div class="collapse" id="collapseterrains">
                                    <div class="filters">';
                        }
                            echo '<label class="control control--checkbox">';
                                echo '<input name="terrain[]" type="checkbox" '.checked( $checked_terrain, $terrain->slug, false ).' value="' . esc_attr( $terrain->slug ) . '">';
                                echo '<span class="contro-text">'.esc_attr( $terrain->name ).'</span>';
                                echo '<span class="control__indicator"></span>';
                            echo '</label>';

                        if( ($count == 6) || ($count < 6 && $count == $total_terrains) ) {    
                            echo '</div>';
                        }

                        if( ($count > 6) && ($count == $total_terrains) ) {
                            echo '</div></div>';
                        }

                    endforeach;
                    ?>
                </div>

                <?php if($total_terrains > 6 ) { ?>
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <div class="filters">
                        <a role="button" data-toggle="collapse" data-target="#collapseterrains" aria-expanded="false" aria-controls="collapseterrains">
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