<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 29/01/2019
 * Time: 14:38
 */
include "MyList.php";

$listInteger = new MyList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(12);
$listInteger->add(10);
$listInteger->add(4);
$listInteger->remove(2);
var_dump($listInteger->toArray());
$listInteger->sort();
var_dump($listInteger->toArray());
$listInteger->clear();
var_dump($listInteger->toArray());
$listInteger->add(455);
echo "<br>".$listInteger->get(0);