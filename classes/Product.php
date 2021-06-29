
<?php

/**
 * Product Class
 * @author Fabio <email@email.com>
 * @copyright 2021 Fabio
 */
class Product
{
  public $name;
  public $desc;
  public $price;
  public $instock;
  public $img;
  /**
   * Product Constructor
   *
   * @param string $name The product name
   * @param string $desc Product description
   * @param float $price
   * @param boolean $instock
   * @param string $img
   */
  public function __construct(string $name, string $desc, float $price, bool $instock = false, string $img = 'https://picsum.photos/300')
  {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
    $this->instock = $instock;
    $this->img = $img;
  }

  public function name(){
      return $this->name;
  }
}