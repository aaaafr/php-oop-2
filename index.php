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

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/database/db.php';




//   var_dump($products);
//   var_dump($users);

  $card = new CreditCard(1234567, '12/2023', 123);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <?php
    foreach($products as $product) : ?>
    <h1><?=$product->name();?></h1>
    
    <?php endforeach;?>

    <?php
    foreach($users as $user) :
    if(method_exists($user, 'isPremium') && $user->isPremium()) : ?>
        <h3><?= $user->name() ?></h3>
        <p>Sei un utente Premium, hai diritto al <?php echo $user->discount()?> % di sconto</p>
        <p><?= $user->insertCreditCard($card)?></p>
    <?php endif; ?>
    <?php endforeach;?>
</body>
</html>
