<?php
/**
 * Created by PhpStorm.
 * User: yusuke
 * Date: 5/30/15
 * Time: 17:22
 */
$person = new Person("yusuke", 18);

echo $person->isYoung();

if (!$person->isYoung()) {

}
