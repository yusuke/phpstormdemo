<?php

/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 5/30/15
 * Time: 13:36
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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }



}