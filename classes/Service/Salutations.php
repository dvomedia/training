<?php

class Service_Salutations
{
    const GREETING = 'YO!';

    public function getGreeting($alternativeGreeting = '')
    {
        if (empty($alternativeGreeting)) {
            return GREETING;
        }

        return $alternativeGreeting;
    }

}
