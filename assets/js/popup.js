function popup( name, id ) {
	var template = $( '#popup-template-' + name ).html();

	$( 'body' ).addClass( 'popup-open' );
	$( '#popup-box' ).css( { opacity : 0, marginTop : -50 } );
	$( '#popup' ).show();
	$( '#popup .overlay' ).css( { opacity : 0 } ).animate( { opacity : 1 }, 100 );

	$.getJSON( '/patient/json/' + id, function( data ) {
		var html = Mustache.to_html( template, data );
		$( '#popup-box' ).html( html ).animate( { opacity : 1, marginTop : 0 }, 100 );
	});
}

function close_popup() {
	$( '#popup' ).animate( { opacity : 0 }, 100, function() {
		$( this ).hide().css( { opacity : 1 } );
		$( 'body' ).removeClass( 'popup-open' );
	});
}