<?php

class Model_user {
	function getName() {
	    return $_GET['name'];
	}

	function getGender() {
	    $gender = ['male','female'];

	    return $gender[mt_rand(0,1)];
	}	
}
