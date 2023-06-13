<?php

class Product     // bij classes moeten de eerste letter met een hoofdletter beginnen.
{
    public $name;

    public $prijs;

    public function formatPrijs()    // tweede woord zijn eerste letter moet een hoofd letter zijn.
    {
        return number_format($this->prijs, decimals: 2);
    }
}

$frisdrank1 = new Product();
$frisdrank1->name = "RedBull";
$frisdrank1->prijs = 2;


$frisdrank2 = new Product();
$frisdrank2->name = "RedBull_light";
$frisdrank2->prijs = 3;


echo $frisdrank1->formatPrijs()." ";
echo $frisdrank1->name."<br>";

echo $frisdrank2->formatPrijs()." ";
echo $frisdrank2->name;

?>