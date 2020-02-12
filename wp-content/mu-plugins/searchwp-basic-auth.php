<?php

/**
 * SearchWP Basic Authentication
 * @see https://searchwp.com/news/hooktags/http-basic-authentication/
 *
 */
function ea_searchwp_basic_auth( $credentials ) {

	if( false === strpos( home_url(), 'wpengine' ) )
		return $credentials;

	$credentials = array(
		'username' => 'demo',
		'password' => 'f676c8db7600'
	);

	return $credentials;
}

add_filter( 'searchwp_basic_auth_creds', 'ea_searchwp_basic_auth' );
