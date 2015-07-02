<?php
	require_once( "$_SERVER[DOCUMENT_ROOT]/patients/$_GET[patient].php" );


	header( 'Content-Type: application/json' );

	echo json_encode( $patient );


	exit;