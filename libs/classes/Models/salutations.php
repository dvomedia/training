<?php
define(GREETING, 'YO!');

class Models_salutations
{
    function getGreeting($alternativeGreeting = '')
    {
        if (empty($alternativeGreeting)) {
            return GREETING;
        }

        return $alternativeGreeting;
    }
}

