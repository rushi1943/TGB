<?php
/**
 * Template Name: Create A Business Template
 */
get_header();
global $post;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


$sidebar_meta = homey_get_sidebar_meta($post->ID);
$sticky_sidebar = homey_option('sticky_sidebar');

if($sidebar_meta['homey_sidebar'] != 'yes') {
    $content_classes = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';

} elseif($sidebar_meta['homey_sidebar'] == 'yes' && $sidebar_meta['sidebar_position'] == 'right') {
    $content_classes = 'col-xs-12 col-sm-12 col-md-8 col-lg-8';
    $sidebar_classes = 'col-xs-12 col-sm-12 col-md-4 col-lg-4';

} elseif($sidebar_meta['homey_sidebar'] == 'yes' && $sidebar_meta['sidebar_position'] == 'left') {
    $content_classes = 'col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4';
    $sidebar_classes = 'col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8';
}
?>

<section class="main-content-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="page-title">
                    <div class="block-top-title">
                        <?php get_template_part('template-parts/breadcrumb'); ?>
                        <h1 class="listing-title"><?php the_title(); ?></h1>
                    </div><!-- block-top-title -->
                </div><!-- page-title -->
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row">
            <div class="<?php echo esc_attr($content_classes); ?>">
            <div class="page-wrap">
            <div class="article-main">
                    	<?php
						// Start the loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							// End the loop.
						endwhile;
						?>
              <script src="https://js.stripe.com/v3/"></script>
              <form action="#" method="post" id="business-payment-form">
                        
                <!-- Create A Business Form -->
                    <!-- STEP 1 Start -->
                    <div>
                      <label>Country</label>
                      <select id="country" name="create_business[country]" class="form-control">
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                      </select>    
                    </div>

                    <div>
                      <label>Your Name</label>
                      <input placeholder="Enter Trip Name" name="create_business[trip_name]" type="text"/>
                    </div>

                    <div>
                      <label>Business Name</label>
                      <input placeholder="Enter Business Name" name="create_business[business_name]" type="text"/>
                    </div>

                    <div>
                      <label>Email Address</label>
                      <input placeholder="Email Address" id="email_address_for_registration" name="create_business[email_address]" type="email"/>
                      <span id="email_address_validation_message"></span>
                      <span id="email_address_validation_loader" style="display:none">Loader</span>
                    </div>

                    <!--- Autocomplete Address Section-->
                    <div>
                      <label>Address 1</label>
                      <input id="autocomplete" placeholder="123 Main St" name="create_business[address_1]" onFocus="geolocate()" type="text"/>
                    </div>

                    <div>  
                      <label>Address 2</label>
                      <input class="field" id="street_number" placeholder="Suite 1000" name="create_business[address_2]" disabled="true"/>
                    </div>

                    <!--
                        <label>Route</label>
                        <input class="field" id="route" placeholder="Route" disabled="true"/>
                    -->
                    
                    <div>
                      <label>City</label>
                      <input class="field" id="locality" placeholder="City" name="create_business[city]" disabled="true"/>
                    </div>

                    <div>  
                      <label>State</label>
                      <input class="field" id="administrative_area_level_1" placeholder="State" name="create_business[state]" disabled="true"/>
                    </div>

                    <div>  
                      <label>Zip code</label>
                      <input class="field" id="postal_code" placeholder="000000" name="create_business[zip_code]" disabled="true"/>
                    </div>

                    <!--
                    <label>Country</label>
                    <input class="field" id="country" disabled="true"/>
                    -->
                      
                    <!--- Autocomplete Address Section End-->
                    <div>
                      <label>Phone Number</label>
                      <input type="tel" placeholder="xxx-xxx-xxxx" name="create_business[phone_number]">
                    </div>

                    <div>  
                      <label>URL</label>
                      <input placeholder="http://www.trip.com" name="create_business[url]" type="url"/>
                    </div>

                    <div>  
                      <label>Description</label>
                      <textarea name="create_business[description]" placeholder="Include business details, descriptions, qualifications, and special notes for the user…"></textarea>
                    </div>
                    <!-- STEP 1 End-->

                    <!-- STEP 2 Start -->
                    <div>
                      <label>Are you associated with a parent company or lodge?</label>    
                      <input type="radio" name="create_business[company_type]" value="yes"> Yes<br>
                      <input type="radio" name="create_business[company_type]" value="no"> No<br>
                      <input type="radio" name="create_business[company_type]" value="parent"> I am a Parent Company
                    </div>

                    <h4>(If Yes) please complete below fields:</h4>

                    <div id="lodges_name">
                      <label>Name</label>
                      <?php 
                          $args = array(
                              'blog_id'      => $GLOBALS['blog_id'],
                              'role'         => 'lodges',
                              'role__in'     => array(),
                              'role__not_in' => array(),
                              'meta_key'     => '',
                              'meta_value'   => '',
                              'meta_compare' => '',
                              'meta_query'   => array(),
                              'date_query'   => array(),        
                              'include'      => array(),
                              'exclude'      => array(),
                              'orderby'      => 'login',
                              'order'        => 'ASC',
                              'offset'       => '',
                              'search'       => '',
                              'number'       => '',
                              'count_total'  => false,
                              'fields'       => 'all',
                              'who'          => '',
                          ); 
                          $lodgeusers = get_users( $args ); 
                        ?>
                      <select id="lodge_name" name="create_business[lodge_name]" class="form-control">
                          <?php
                            if(!empty($lodgeusers)){
                              foreach ( $lodgeusers as $user ) {
                                echo '<option value="'.$user->ID.'">' . esc_html( $user->display_name ) . '</option>';
                              }  
                            }else{
                                echo '<option value="-1">No Lodges Found</option>';
                            }
                          ?>
                      </select>    
                    </div>

                    <div id="lodges_address">  
                      <label>Address</label>
                      <input placeholder="Parent Co/Lodge Address" name="create_business[lodge_address]" type="text"/>
                    </div>

                    <div id="lodges_website">  
                      <label>Website</label>
                      <input placeholder="Parent Co/Lodge Website" name="create_business[lodge_website]" type="url"/>
                    </div>


                    <div>
                      <label>Do your trips include accommodation at this venue?</label>    
                      <input type="radio" name="create_business[accommodation]" value="yes"> Yes<br>
                      <input type="radio" name="create_business[accommodation]" value="no"> No<br>
                      <input type="radio" name="create_business[accommodation]" value="some">Some
                    </div>

                    <div id="guides_selection">
                      <label>Guide Name(s)</label>
                      <input type="checkbox" name="create_business[more_guides]" value="yes"> This business employs more than one guide<br>
                      <input placeholder="Enter Guide Name" class="select_guides" type="text" data-id="guide_one" />
                      <input placeholder="Enter Guide Name" name="create_business[guide_names][]" type="hidden" value="0" id="guide_one"/>

                      <input placeholder="Enter Guide Name" class="select_guides" type="text" data-id="guide_two"/>
                      <input placeholder="Enter Guide Name" name="create_business[guide_names][]" type="hidden" value="0" id="guide_two"/>

                      <input placeholder="Enter Guide Name" class="select_guides" type="text" data-id="guide_three"/>
                      <input placeholder="Enter Guide Name" name="create_business[guide_names][]" type="hidden" value="0" id="guide_three"/>
                    </div>

                    <!-- STEP 2 End -->

                    <!-- STEP 3 Start -->
                    <div>
                      <label>Choose a plan</label>    
                      <input type="radio" name="create_business[business_plan]" value="plan_G1GRX95erdcw2x" required> Free yearly (0)<br>
                      <input type="radio" name="create_business[business_plan]" value="plan_G1GSXIpZKK9Eu8" required> Professional Yearly (19.99)<br>
                      <input type="radio" name="create_business[business_plan]" value="plan_G1GSGbmIAsCZaY" required>Guide yearly (9.99)
                    </div>
                    <!-- STEP 3 End -->

                    <!-- STEP 4 Start -->
                    <div id="preview_plan">
                      PREVIEW PLAN
                    </div>
                    <div id="paymen_options">
                      STRIPE PAYMENT OPTION
                          <div class="form-row">
                            <label for="card-element">
                              Credit or debit card
                            </label>
                            <div id="stripe-card-element">
                              <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                          </div>

                          <button>Submit Payment</button>
                        
                    </div>
                    <!-- STEP 4 End -->
                <!-- Create A Business Form End-->
              </form>  
            </div>
            </div><!-- grid-listing-page -->
            </div>

            <?php if($sidebar_meta['homey_sidebar'] == 'yes') { ?>
            <div class="<?php echo esc_attr($sidebar_classes); if( $sticky_sidebar['page_sidebar'] != 0 ){ echo ' homey_sticky'; }?>">
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <?php } ?>

        </div><!-- .row -->
    </div>   <!-- .container -->
    
    
</section><!-- main-content-area listing-page grid-listing-page -->


<script>
//alert(tgb.ajaxURL);
var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  //route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'long_name',
  //country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    //console.log(addressType);
    //console.log(place.address_components[i][componentForm[addressType]]);
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3i6c7peX3MOH5C4vj1oNVGwkMJwbQekU&libraries=places&callback=initAutocomplete"
        async defer></script>
<?php get_footer(); ?>

    