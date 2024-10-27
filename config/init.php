<?php

// Start Session
session_start();

require_once "config.php";

// Include Helpers
require_once 'helpers/system_helper.php';

function autoload( $class_name ) {
	require_once "lib/" . $class_name . ".php";
}

spl_autoload_register( 'autoload' );