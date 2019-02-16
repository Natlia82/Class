<?php
/**
 *
 */
 /*класс машина*/
class machine
{
 public $brand;
 public $model;
 public $year = 2019;
 public $color = 'white';
 public $price;

  public function __construct($brand, $model, $year, $price, $color='white')
  {
    $this->brand=$brand;
    $this->model=$model;
    $this->year=$year;
    $this->color=$color;
    $this->price=$price;
  }

 public function getprice() {
   $god = 2019 - $this->year;
   $price = $this->price;
    if ($god < 5) {
     $price = $price * 0.8;
       } elseif ($god >=5 and $god < 10) {
     $price = $price * 0.5;
   } else $price = $price * 0.3;

   return $price;

 }

}

$AudiObject= new machine('Audi', 'Q7', '2019', '200');
$AudiObject -> getprice();

$BmvObject= new machine('BMV', 'Q7', '2018', '350', 'black');
$BmvObject -> getprice();

/*класс телевиз*/
class TV
{
 public $model;
 public $year = 2019;
 public $size;
 public $price;

  public function __construct($model, $year, $price, $size)
  {
    $this->model=$model;
    $this->year=$year;
    $this->size=$size;
    $this->price=$price;
  }

 public function gettv() {
   $god = 2019 - $this->year;
   $price = $this->price;
    if ($god < 5) {
     $price = $price * 0.9;
       } elseif ($god >=5 and $god < 10) {
     $price = $price * 0.8;
   } else $price = $price * 0.7;

   return $price;

 }

}

$SamsungObject= new TV('Samsung', '2019', '20', '16000');
$SamsungObject -> gettv();

$LGObject= new TV('LG', '2018', '82', '20000');
$LGObject -> gettv();

/*Шариковая ручка*/
class Ballpointpen
{
 public $name;
 public $inkcolor;
 public $properties;
 public $price;

  public function __construct($name, $inkcolor, $properties, $price)
  {
    $this->name=$name;
    $this->inkcolor=$inkcolor;
    $this->properties=$properties;
    $this->price=$price;
  }

 public function getBallpointpen() {

   $price = $this->price;
   return $price;

 }

}

$parkerObject= new Ballpointpen('parker', 'black', 'ball', '200');
$parkerObject->getBallpointpen();

$gelObject= new Ballpointpen('gel', 'red', 'gel', '350');
$gelObject -> getBallpointpen();

/*Товар*/
class goods
{
 public $name;
 public $information;
 public $color;
 public $price;

  public function __construct($name, $information, $color, $price)
  {
    $this->name=$name;
    $this->information=$information;
    $this->color=$color;
    $this->price=$price;
  }

 public function getprice() {
   $price = $this->price * 0.1;
   return $price;

 }

}

$ballObject= new goods('ball', 'ball to play', 'blue', '350');
$ballObject -> getprice();

$hoopObject= new goods('hoop', 'child', 'green', '120');
$hoopObject -> getprice();

/*Утка*/
class duck
{
 public $name;
 public $view;
 public $age;
 public $price;

  public function __construct($name, $view, $age, $price)
  {
    $this->name=$name;
    $this->view=$view;
    $this->age=$age;
    $this->price=$price;
  }

 public function getprice() {
   $price = $this->price * 0.1;
   return $price;

 }

}

$MallardObject= new goods('Mallard', 'wild', '1', '200');
$MallardObject -> getprice();

$GreyduckObject= new goods('Grey duck', 'wild', '2', '150');
$GreyduckObject -> getprice();

 ?>
