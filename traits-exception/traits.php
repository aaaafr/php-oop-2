<?php

$products = [
    new Product('Acer', 'Lorem ipsum dolor sit amet.', 300.99),
    new Product('HP', 'Lorem ipsum dolor sit amet.', 100.99),
    new Product('Asus', 'Lorem ipsum dolor sit amet.', 450.99),
    new Product('Macbook', 'Lorem ipsum dolor sit amet.', 1300.99),
    new Product('Sony', 'Lorem ipsum dolor sit amet.', 200.99),
    new Product('Lenovo', 'Lorem ipsum dolor sit amet.', 500.99),
  ];

  $cars = [
    new Car('Tesla X', 'lorem ipsum', 300000, 3000, 'Electric'),
    new Car('Ford Fiesta', 'lorem ipsum', 40000, 3000, 'Petrol'),
    new Car('Giulietta', 'lorem ipsum', 20000, 3000, 'Hybrid'),
    new Car('Audi Q2', 'lorem ipsum', 80000, 3000, 'Electric'),
    new Car('Fiat 500', 'lorem ipsum', 50000, 3000, 'Electric'),

];


class Product
{
  public $name;
  public $desc;
  public $price;

  public function __construct(string $name, string $description, float $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  public function description()
  {

    return $this->description;
  }

  public function name(){
      return $this->name;
  }
}

class Car extends Product
{
    function __construct($name, $desc, $price, $engine, $fuel)
    {
      parent::__construct($name, $desc, $price);
      $this->engine = $engine;
      $this->fuel = $fuel;
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP TRAIT</title>
</head>
<body>
<?php
    foreach($products as $product) : ?>
    <h1><?=$product->name();?></h1>
    
    <?php endforeach;?>

    <?php
    foreach($cars as $car) : ?>
    <h1><?=$car->name();?></h1>
    
    <?php endforeach;?>
    

</body>
</html>
