<?php

/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 5/30/15
 * Time: 11:52
 */
class Person
{
    protected $name;
    protected $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


}