<?php

class Model_User
{

    public function getName()
    {
        return $_GET['name'];
    }

    public function getGender()
    {
        $gender = ['male', 'female'];

        return $gender[mt_rand(0, 1)];
    }
}