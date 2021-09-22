<?php 

$data = [
    [
        'title'=>"<h2>Come state implementando la recente decisione della relativa al diritto all'oblio?</h2>",
        'paragraphs'=> [
            '1' => '<p> La recente decisione della <a href=""> Corte di giustizia dell\'Unione europea (CGUE)</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>',
            '2' => '<p> La recente decisione della <a href=""> Corte di giustizia dell\'Unione europea (CGUE)</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>',
            '3' => '<p> La recente decisione della <a href=""> Corte di giustizia dell\'Unione europea (CGUE)</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>',
            '4' => '<p> La recente decisione della <a href=""> Corte di giustizia dell\'Unione europea (CGUE)</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>',
            '5' => '<p> La recente decisione della <a href=""> Corte di giustizia dell\'Unione europea (CGUE)</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>'
            
        ]
    ],
 

]



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
   <?php

   foreach($data as $item ){
       echo $item['title'];
       
       foreach($item['paragraphs'] as $key => $p){
           echo $p;
       }
   }

   
   
   ?>
    
</body>
</html>