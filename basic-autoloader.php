<?php
/**
 * Created by PhpStorm.
 * User: ShaneBarker
 * Date: 27/01/2016
 * Time: 12:36
 */

function basicAutoloader($className) {

    $classLocation = str_replace('_', DIRECTORY_SEPARATOR, $className);

    $file = 'libs/classes/' . $classLocation . '.php';

    require $file;
}


spl_autoload_register('basicAutoloader');
