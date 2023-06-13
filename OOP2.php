<?php

class product
{
    public $name = "een bepaald soort frisdrank";
}

$frisdrank1 = new product();
$frisdrank1->name = "RedBull";

$frisdrank2 = new product();
$frisdrank2->name = "RedBull_light";

$frisdrank3 = new product();


echo $frisdrank1->name."<br>";
echo $frisdrank2->name."<br>";
echo $frisdrank3->name."<br>";

$frisdrank1->name = "fanta"."<br>";
echo $frisdrank1->name;

var_dump($frisdrank1);
var_dump($frisdrank2);

?>