<?php

/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 6/27/15
 * Time: 15:33
 */
class PersonImpl implements Person
{
    protected $name;
    protected $age;

    /**
     * PersonImpl constructor.
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


    function isYoung()
    {
        return $this->age < 20;
    }
}