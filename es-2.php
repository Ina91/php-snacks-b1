<!-- Passare come parametri GET name, mail ed age e
verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una
 chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
  altrimenti “Accesso negato”-->
<?php
  $name = $_GET['nome'];
  $email = $_GET['email'];
  $age = $_GET['eta'];

 for( strlen($name) > 3 && stripos($email,'@') == true && stripos($email,'.') == true  && is_int($age) ){

     var_dump('Accesso riuscito');
 }else {
      var_dump('Accesso negato');
 }
?>
