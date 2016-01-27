<?php

function basicAutoloader($className) {

	$classNameLocation = str_replace('_', DIRECTORY_SEPARATOR, $className);
	$file = 'libs/Classes/' . $classNameLocation . '.php';

	require $file;
}

spl_autoload_register('basicAutoloader');