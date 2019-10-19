<?php
global $post, $homey_local;
$animals   = wp_get_post_terms( get_the_ID(), 'listing_animal', array("fields" => "all"));
$terrains  = wp_get_post_terms( get_the_ID(), 'listing_terrain', array("fields" => "all"));

if(!empty($animals) || !empty($terrains)) { ?>
<div id="features-section" class="features-section">
    <div class="block">
        <div class="block-section">
            <div class="block-body">
                <div class="block-left">
                    <h3 class="title"><?php echo esc_attr(homey_option('sn_features')); ?></h3>
                </div><!-- block-left -->
                <div class="block-right">
                    <?php if(!empty($animals)) { ?>
                    <p><strong><?php echo esc_attr(homey_option('sn_animals')); ?></strong></p>
                    <ul class="detail-list detail-list-2-cols">
                        <?php foreach($animals as $animal): ?>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo esc_attr($animal->name); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php } ?>

                    <?php if(!empty($terrains)) { ?>
                    <p><strong><?php echo esc_attr(homey_option('sn_terrains')); ?></strong></p>
                    <ul class="detail-list detail-list-2-cols">
                        <?php foreach($terrains as $terrain): ?>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo esc_attr($terrain->name); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php } ?>

                </div><!-- block-right -->
            </div><!-- block-body -->
        </div><!-- block-section -->
    </div><!-- block -->
</div>
<?php } ?>