<?php require_once 'partials/data/faqs.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <img src="img/google.svg" alt="">
            <span>Privacy e termini</span>
        </div>
        <div class="header-bottom">
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>termini di servizio</li>
                <li>Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
        </div>
        <hr>
    </header>
   <main>
       <div class="container">
           <?php
           foreach($faqs as $item ){ ?>
               <h2><?php echo  $item['title'] ; ?></h2> 
               <?php foreach($item['paragraphs'] as $p){
                   echo $p;
               } ?>
           <?php } ?>
           
       </div>
   </main>
   <footer>
      <div class="container">
          <ul>
              <li>Google</li>
              <li>Tutto su google</li>
              <li>Privacy</li>
              <li>Termini</li>
          </ul>
      </div> 
   </footer>
    
</body>
</html>