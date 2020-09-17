<?php

/*  Display popup setting panel on contact form 7 FORM */





// add the filter for new panel

add_filter( 'wpcf7_editor_panels', 'filter_wpcf7_editor_panels', 10, 1 ); 



// Display Popup Setting panel in contact form 7 editor

function filter_wpcf7_editor_panels( $panels ) { 

     $panels_popup = array(

			'popup-panel' => array(

				'title' => __( 'Popup Setting', 'contact-form-7' ),

				'callback' => 'wpcf7_editor_panel_popup',

			),

		);

    $panels = array_merge($panels,$panels_popup);

    return $panels; 

}; 

         

//popup general settings



// Start popup panel 

function wpcf7_editor_panel_popup()

{ 



//get form id

$formid = $_REQUEST['post'];

// POPUP ADMINPANEL FORMAT

?>

<h2>General Settings</h2>

<fieldset>

	<legend>You can Enable/Disable this Form popup and also you can you other setting related to popup.</legend>

	<p>

		<label>

			<input type="checkbox" name="enabled_popup_val" value="popupenable" <?php if (isset($_REQUEST['post'])){if (get_post_meta( $formid, 'enabled-popup', true ) == $formid) {echo ' checked="checked"';}} ?>>Enable/Disable this Form popup

		</label>

	</p>

	<table class="form-table">

		<tbody>

			<tr>

			<th scope="row">

			<label>Popup Text</label>

			</th>

			<td>

				<input type="text" name="popup_message" class="regular-text" id="popup_message" value="<?php echo get_post_meta( $formid, 'popup_message', true );?>">

			</td>

			</tr>

			<tr>

			<th scope="row">

			<label>Popup Text Color</label>

			</th>

			<td>

				<input type="text" name="popup_text_color" class="regular-text" id="popup_text_color" value="<?php echo get_post_meta( $formid, 'popup_text_color', true );?>">

			</td>

			</tr>

			<tr>

			<th scope="row">

				<label>Popup Width</label>

			</th>

			<td>

				<input type="text" name="m_popup_width" class="small-text" value="<?php echo get_post_meta( $formid, 'm_popup_width', true );?>">

				<span class="description">Value must be like: 500px / auto / 50%</span>

			</td>

			</tr>

			<tr>

			<th scope="row">

				<label>Auto Hide after</label>

			</th>

			<td>

				<input type="text" name="m_popup_duration" class="medium-text" value="<?php echo get_post_meta( $formid, 'm_popup_duration', true );?>">

				<span class="description">Duration in milliseconds eg. 5000 (Popup will hide after 5 Seconds).</span>

			</td>

			</tr>

			<tr>

			<th scope="row">

				<label>Background Color</label>

			</th>

			<td>

				<input type="text" name="popup_background_color" class="regular-text" value="<?php echo get_post_meta( $formid, 'popup_background_color', true );?>">

			</td>

			</tr>

			<tr>

			<th scope="row">

				<label>Background Image</label>

			</th>

			<td>

				<input type="text" name="popup_background_img" class="regular-text" value="<?php echo get_post_meta( $formid, 'popup_background_img', true );?>">

			</td>

			</tr>

			<tr>

			<th scope="row">

				<label>Button Text</label>

			</th>

			<td>

				<input type="text" name="popup_button_text" class="regular-text" value="<?php echo get_post_meta( $formid, 'popup_button_text', true );?>">

			</td>

			</tr>
			<tr>

			<th scope="row">

				<label>Button background color</label>

			</th>

			<td>

				<input type="text" name="popup_button_background_color" class="regular-text" value="<?php echo get_post_meta( $formid, 'popup_button_background_color', true );?>">

			</td>

			</tr>

		</tbody>

	</table>

</fieldset>

<?php }

// End popup panel 