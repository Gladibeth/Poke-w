/*  Display Popup when Contact Form 7 successfully submitted  */



document.addEventListener( 'wpcf7mailsent', function( event ) {

	var currentformid = event.detail.contactFormId;

	var popup_id = event.detail.apiResponse.popup_id;
	var str = event.detail.apiResponse.popup_background_color; 
	//Store popup background color and search , is aveliable or not if not aveliable then it is normal color or gradient color
    var n = str.search(",");
    if( n > 1)
    {
    	if(event.detail.apiResponse.popup_background_img  === "")
    	{
    		var color_code = 'linear-gradient('+ event.detail.apiResponse.popup_background_color + ')';
    	}
    	else
    	{
    		var color_code = event.detail.apiResponse.popup_background_color + '  url("' + event.detail.apiResponse.popup_background_img + '")right top / cover no-repeat';
    	}
    }
    else
    {
    	var color_code = event.detail.apiResponse.popup_background_color + '  url("' + event.detail.apiResponse.popup_background_img + '")right top / cover no-repeat';
    }
	 if (popup_id != null && popup_id != '') {  
			//popup box

			swal({

			  // set popup background color and image	

			  background: color_code,

			  // set popup message

			  title: '<span style="color:' + event.detail.apiResponse.popup_text_color +'">'+event.detail.apiResponse.popup_message+'</span>',

			  confirmButtonColor: event.detail.apiResponse.popup_button_background_color,


			  confirmButtonText: event.detail.apiResponse.popup_button_text,

			  // set popup width

			  width: event.detail.apiResponse.m_popup_width,

			  //set popup duration time in seconds 

			  timer: event.detail.apiResponse.m_popup_duration,


			})

	 }



}, false );

