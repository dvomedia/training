<?php

class Service_Weather
{
    protected $currentWeather;
    protected $possibleWeather = ['Sun', 'Rain', 'Wind', 'Snow', 'Fog'];

    /**
     * Get the current weather once and then store
     *
     * @return string
     */
    public function todaysWeather()
    {
        if (null === $this->currentWeather) {
            $this->currentWeather = $this->randomWeather();
        }

        return $this->currentWeather;
    }

    private function randomWeather() {
        return $this->possibleWeather[mt_rand(0,count($this->possibleWeather)-1)];
    }


}