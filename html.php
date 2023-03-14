<?php

	require_once __DIR__ . '/vendor/autoload.php';


	use Stichoza\GoogleTranslate\GoogleTranslate;
	
	$von = $_POST['eins'];
	$bis = $_POST['zwei'];
	$message = $_POST['drei'];

	if ($von == 'ATD') {
		echo GoogleTranslate::trans($message , $bis, );
	} else {
		echo GoogleTranslate::trans($message, $bis, $von);
	}

?>