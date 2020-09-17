<?php

/* Save Popup General Settings*/



// add the action for save popupdata

add_action( 'wpcf7_after_save', 'action_wpcf7_after_save', 10, 1 ); 



// Save popup general settings on post meta

function action_wpcf7_after_save( $instance) { 

	$formid = $instance->id;

	// check Enable or Disable Form popup if popup form is enable then formid store otherwise null value pass

	if(!empty($_POST['enabled_popup_val']))

	{

		$enabled_popup_id = $formid;

	}

	else

	{

		$enabled_popup_id = "";

	}

	// Add or Update popup general settings

	update_post_meta( $formid, 'enabled-popup', $enabled_popup_id );

	$popup_message_data = sanitize_text_field($_POST['popup_message']);

	update_post_meta( $formid, 'popup_message', $popup_message_data );

	$popup_text_color_data = sanitize_text_field($_POST['popup_text_color']);

	update_post_meta( $formid, 'popup_text_color', $popup_text_color_data );

	$m_popup_width_data = sanitize_text_field($_POST['m_popup_width']);

   	update_post_meta( $formid, 'm_popup_width', $m_popup_width_data );

   	$m_popup_duration_data = sanitize_text_field($_POST['m_popup_duration']);

   	update_post_meta( $formid, 'm_popup_duration', $m_popup_duration_data );

   	$popup_background_color_data = sanitize_text_field($_POST['popup_background_color']);

   	update_post_meta( $formid, 'popup_background_color', $popup_background_color_data );

   	$popup_background_img_data = sanitize_text_field($_POST['popup_background_img']);

   	update_post_meta( $formid, 'popup_background_img', $popup_background_img_data );

   	$popup_button_text_data = sanitize_text_field($_POST['popup_button_text']);

   	update_post_meta( $formid, 'popup_button_text', $popup_button_text_data );

   	$popup_button_background_color_data = sanitize_text_field($_POST['popup_button_background_color']);

   	update_post_meta( $formid, 'popup_button_background_color', $popup_button_background_color_data );

}; 

         





