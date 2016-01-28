<?php

function psrZeroAutoload($className) {
    include __DIR__ . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
}

spl_autoload_register('psrZeroAutoload');