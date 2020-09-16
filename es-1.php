<!--Creiamo un array contenente le partite di basket di un’ipotetica
 tappa del calendario. Ogni array avrà una squadra di casa e una
 squadra ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60 -->

 <?php
    $partita = [
        [
            'Squadra_Casa' => 'Olimpia Milano',
            'Squadra_Ospite' => 'Cantù',
            'Punteggio_Casa'=> 55,
            'Punteggio_Ospite'=>60
        ],
        [
            'Squadra_Casa' => 'Ravenna',
            'Squadra_Ospite' => 'Bologna',
            'Punteggio_Casa'=> 92,
            'Punteggio_Ospite'=>65
        ],
        [
            'Squadra_Casa' => 'Cattolica',
            'Squadra_Ospite' => 'Rimini',
            'Punteggio_Casa'=> 87,
            'Punteggio_Ospite'=>61
        ]
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
           <ul>
                   <?php for ($i=0; $i<count($partita); $i++){
                       ?>
                       <li>
                           <?php echo $partita[$i]['Squadra_Casa'].'-'.$partita[$i]['Squadra_Ospite'].' | '.$partita[$i]['Punteggio_Casa'].'-'.$partita[$i]['Punteggio_Ospite']; ?>
                       </li>
                       <?php

                   }?>
           </ul>
       </body>
</html>
