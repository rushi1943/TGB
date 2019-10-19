<?php 
global $homey_local;
?>
<div class="homey-extra-prices">
<hr class="row-separator">
<h3 class="sub-title"><?php echo esc_html__('Setup Extra Services Price', 'homey'); ?></h3>

<div id="more_extra_services_main" class="custom-extra-prices">
    <div class="more_extra_services_wrap">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label for="name"><?php echo $homey_local['ex_name']; ?></label>
                    <input type="text" name="extra_price[0][name]" class="form-control" placeholder="<?php echo $homey_local['ex_name_plac']; ?>">
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label for="price"> <?php echo $homey_local['ex_price']; ?> </label>
                    <input type="text" name="extra_price[0][price]" class="form-control" placeholder="<?php echo $homey_local['ex_price_plac']; ?>">
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="form-group">
                    <label for="type"> <?php echo $homey_local['ex_type']; ?> </label>
                        
                    <select name="extra_price[0][type]" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                        <option value="single_fee"><?php echo $homey_local['ex_single_fee']; ?></option>
                        <option value="per_night"><?php echo $homey_local['ex_per_night']; ?></option>
                        <option value="per_guest"><?php echo $homey_local['ex_per_guest']; ?></option>
                        <option value="per_night_per_guest"><?php echo $homey_local['ex_per_night_per_guest']; ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <button type="button" data-remove="0" class="remove-extra-services btn btn-primary btn-slim"><?php esc_html_e('Delete', 'homey'); ?></button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-xs-12 text-right">
        <button type="button" id="add_more_extra_services" data-increment="0" class="btn btn-primary btn-slim"><i class="fa fa-plus"></i> <?php echo esc_html__('Add More'); ?></button>
    </div>
</div>
</div>