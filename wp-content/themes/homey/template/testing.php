<?php
/**
 * Template Name: Unit Testing
 */
get_header();

$post_id = 260;
$author_id = get_post_field( 'post_author', $post_id );
$host_reservation_payment_type = get_user_meta($author_id, 'host_reservation_payment', true);
$offsite_payment = homey_option('off-site-payment');

if($offsite_payment == 1 && !empty($host_reservation_payment_type)) {
	echo $host_reservation_payment_type;
} else {
	echo 'sfdssf';
}


get_footer(); 
?>