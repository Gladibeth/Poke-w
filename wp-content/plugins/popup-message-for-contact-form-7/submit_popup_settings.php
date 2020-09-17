<?php 



// add the filter  for submit setting to popup

add_filter( 'wpcf7_ajax_json_echo', 'filter_wpcf7_ajax_json_echo', 10, 2 ); 



// Pass popupdata to event using wpcf7_ajax_json_echo filter

function filter_wpcf7_ajax_json_echo( $items, $result ) { 

    	$formid = $_REQUEST['_wpcf7'];

    	$items["popup_id"] = get_post_meta( $formid, 'enabled-popup', true );

      // Check popup message if text is not available then it pass default text

    	if( ! empty(get_post_meta( $formid, 'popup_message', true )))

   		{

  			$items["popup_message"] = get_post_meta( $formid, 'popup_message', true );

  		}

   		else

  		{

  			$items["popup_message"] = "Form has been submitted successfully.";

		  }

      // Check popup width if width is not available then it pass default width

      if( ! empty(get_post_meta( $formid, 'm_popup_width', true )))

      {

        $items["m_popup_width"] = get_post_meta( $formid, 'm_popup_width', true );

      }

      else

      {

        $items["m_popup_width"] = "500px";

      }

      // Check popup duration time if duration time is not available then it pass default duration time

      if( ! empty(get_post_meta( $formid, 'm_popup_duration', true )))

      {

        $items["m_popup_duration"] = get_post_meta( $formid, 'm_popup_duration', true );

      }

      else

      {

        $items["m_popup_duration"] = "100000000000";

      }

      // Check popup background color if color is not available then it pass default color

      if( ! empty(get_post_meta( $formid, 'popup_background_color', true )))

      {

        $items["popup_background_color"] = get_post_meta( $formid, 'popup_background_color', true );

      }

      else

      {

        $items["popup_background_color"] = "#fff";

      }

      // Check popup background img if img is not available then it pass blank value

      if( ! empty(get_post_meta( $formid, 'popup_background_img', true )))

      {

        $items["popup_background_img"] = get_post_meta( $formid, 'popup_background_img', true );

      }

      else

      {

        $items["popup_background_img"] = "";

      }
      // Check popup text color if color is not available then it pass default color
       if( ! empty(get_post_meta( $formid, 'popup_text_color', true )))

      {

        $items["popup_text_color"] = get_post_meta( $formid, 'popup_text_color', true );

      }

      else

      {

        $items["popup_text_color"] = "#000";

      }
      // Check popup button text if text is not available then it pass default text
       if( ! empty(get_post_meta( $formid, 'popup_button_text', true )))

      {

        $items["popup_button_text"] = get_post_meta( $formid, 'popup_button_text', true );

      }

      else

      {

        $items["popup_button_text"] = "Ok";

      }
       // Check popup button background color if color is not available then it pass default color
       if( ! empty(get_post_meta( $formid, 'popup_button_background_color', true )))

      {

        $items["popup_button_background_color"] = get_post_meta( $formid, 'popup_button_background_color', true );

      }

      else

      {

        $items["popup_button_background_color"] = "#3085d6";

      }



    return $items; 

}; 

         

