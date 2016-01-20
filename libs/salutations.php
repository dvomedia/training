<?php
define(GREETING, 'YO!');

function getGreeting($alternativeGreeting = '') {
    if (empty($alternativeGreeting)) {
        return GREETING;
    }

    return $alternativeGreeting;
}

