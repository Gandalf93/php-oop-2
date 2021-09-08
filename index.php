<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. -->
<!-- Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c); -->
<!-- BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'Premium.php';
require_once 'Products.php';
require_once 'User.php';

$mario = new User('Mario','Rossi','mariorossi@gmail.com');
$mario->setShipping('true');

$luisa = new User('Luisa','Verdi','luisaverdi@gmail.com');
$luisa->setShipping('false');

$anna = new User('Anna','Mari','annamari@gmail.com');
$anna->setShipping('true');



?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <h2><?php echo $mario->getFullName();?></h2>
      <p><?php echo $mario->getShipping(); ?></p>

      <h2><?php echo $luisa->getFullName();?></h2>
      <p><?php echo $luisa->getShipping(); ?></p>

      <h2><?php echo $anna->getFullName();?></h2>
      <p><?php echo $anna->getShipping(); ?></p>
  </body>
  </html>