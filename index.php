<!-- Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online; ad esempio, 
ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
 oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, 
l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); -->



<?php

class Product{
    public $name;
    public $desc;
    public $price;

    function __construct($name, $desc, $price)
    {
      $this->name = $name;
      $this->desc = $desc;
      $this->price = $price;
    }
  
}

class Tech extends Product{
    function __construct($name, $desc, $price, $type)
    {
        parent::__construct($name, $desc, $price);
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

}

$computer = new Product('MacBook', 'Lorem ipusm dolor sit amet', 2000);
// var_dump($computer);

$ipad = new Tech('Ipad', 'Lorem ipsum', 600, 'Mini');
var_dump($ipad);
var_dump($ipad->getType());


class User{
    public $name;
    public $desc;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->desc = $age;
    }


    public function getDiscount($age){
        if($age > 65){
            return 'Ha diritto ad uno sconto del 10%';
        }else{
            return 'Prezzo pieno';
        }
    }
}

class Credit extends User{
    function __construct($name, $age, $card)
    {
        parent::__construct($name, $age, $card);
        $this->card = $card;
    }
}


$c = new Credit('Abb', 90, 123456);
var_dump($c);
var_dump($c->getDiscount($age));


