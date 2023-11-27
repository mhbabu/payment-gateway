( () => {
	"use strict";

	const copyBtn = document.querySelector( '.copy-aff-link' );
	copyBtn?.addEventListener( 'click', ev => {
		const codeInput = document.querySelector( '#ref-code' );
		navigator.clipboard.writeText( codeInput.value );
		toastr.success( 'Affiliate link coppied to clipboard.' );
	} )
} )();


function sendRequestForm() {
	"use strict";

	document.getElementById( "send_request_button" ).disabled = true;
	document.getElementById( "send_request_button" ).innerHTML = "Please Wait";


	var formData = new FormData();
	formData.append( 'affiliate_bank_account', $( "#affiliate_bank_account" ).val() );
	formData.append( 'amount', $( "#amount" ).val() );

	$.ajax( {
		type: "post",
		url: "/dashboard/user/affiliates/send-request",
		data: formData,
		contentType: false,
		processData: false,
		success: function ( data ) {
			toastr.success( 'Request Sent Succesfully' );
			setTimeout( function () {
				location.reload();
			}, 900 );
		},
		error: function ( data ) {
			toastr.error( 'You cannot withdrawal with this amount. Please check.' )
			document.getElementById( "send_request_button" ).disabled = false;
			document.getElementById( "send_request_button" ).innerHTML = "Send Request";
		}
	} );
	return false;
};


