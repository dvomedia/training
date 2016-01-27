<?php

define(GREETING, 'YO!');

class Model_salutations {
	
	function getGreeting($alternativeGreeting = '') {
	if (empty($alternativeGreeting)) {
	    return GREETING;
	}

	return $alternativeGreeting;
	}
	
}

