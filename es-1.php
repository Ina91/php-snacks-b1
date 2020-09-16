/*Creiamo un array contenente le partite di basket di un’ipotetica
 tappa del calendario. Ogni array avrà una squadra di casa e una
 squadra ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60*/

 <?php
    $partita = [
        'Squadra_Casa' => 'Olimpia Milano',
        'Squadra_Ospite' => 'Cantù',
        'Punteggio_Casa'=> 55,
        'Punteggio_Ospite'=>60
        ];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
       <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Es-1_Basket</title>
       </head>
       <body>
           <h1>Partite di Basket</h1>
           <div class="">
               <?php echo $partita['Squadra_Casa'].'-'.$partita['Squadra_Ospite'].' | '.$partita['Punteggio_Casa'].'-'.$partita['Punteggio_Ospite'] ?>
           </div>
       </body>
</html>
