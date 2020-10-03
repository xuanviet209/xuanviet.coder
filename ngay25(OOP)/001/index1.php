<?php

class Fruit {

  public $name;

  public $color;

  public $weight;



}



$mango = new Fruit();

echo $mango->name = 'Mango'; // OK

echo "<br>" .$mango->color = 'Yellow'; // ERROR

echo "<br>" .$mango->weight = '300'; // ERROR

?> 