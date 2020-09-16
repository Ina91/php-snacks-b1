<!-- Passare come parametri GET name, mail ed age e
verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una
 chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
  altrimenti “Accesso negato”-->
<?php
  $name = $_GET['nome'];
  $email = $_GET['email'];
  $age = $_GET['eta'];

 if((strlen($name) > 3 ) && (strpos($email,'@') !==false) && (strpos($email,'.') !==false)  && is_int($age) ){
        $text= 'Accesso riuscito';
 }else {
      $text= 'Accesso negato';
 }
 echo "$text " ;
 echo "$email $name $age ";
?>
