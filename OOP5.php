<?php


// Construct

class Product     // bij classes moeten de eerste letter met een hoofdletter beginnen.
{
    public $name;

    public $prijs;

    public function __Construct($name, $prijs)
    {
        $this->name = ucfirst($name);
        $this->prijs = $prijs;
    }


    public function formatPrijs()    // tweede woord zijn eerste letter moet een hoofd letter zijn.
    {
        return number_format($this->prijs, decimals: 2);
    }
}

$frisdrank1 = new Product( name: "redbull", prijs: 2);


$frisdrank2 = new Product( name: "redbull_light", prijs: 3);
$frisdrank2->prijs = 4;


echo $frisdrank1->formatPrijs()." ";
echo $frisdrank1->name."<br>";
// echo $frisdrank1->prijs."<br>";

echo $frisdrank2->formatPrijs()." ";
echo $frisdrank2->name;
// echo $frisdrank2->prijs;










?>