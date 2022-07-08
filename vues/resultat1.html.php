<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
  <?php  include "../fonction.inc.php" ?>    <?php 
    
    if( empty($_GET)){
    ?>
    
    <header>
       <h1> 🕊 Au Pois Gourmand </h1>
    </header>
   


  <div class="row">
    <div class="col-6">
    <div class="card">
  <img src="../img/rome.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Formule Rome</h5>
    <p class="card-text">Tomates buratina <br>
           Rizotto aux asperges <br>
           Panna cotta</p>
           
    <a href="?formule=Formule Rome&img=rome.jpg&Nems=Panna cotta" class="btn btn-primary" >Choisir</a>
  </div>
</div>
    </div>
    <div class="col-6">
    <div class="card" >
  <img src="../img/nyork.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Formule New-York</h5>
    <p class="card-text">César salade <br>
          Cheese burger <br>
           Cheesecake</p>
           <a href="?formule=Formule New-York&img=nyork.jpg&Nems=Cheese burger" class="btn btn-primary" >Choisir</a>
  </div>
</div>
    </div>
   
  </div>
  <div class="row">
    <div class="col">
    <div class="card" >
  <img src="../img/delhi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Formule Delhi</h5>
    <p class="card-text">Poppadoms <br>
           Agneau byriani <br>
          Lassi mangue</p>
           <a href="?formule=Formule Delhi&img=delhi.jpg&Nems=Lassi mangue" class="btn btn-primary" >Choisir</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" >
  <img src="../img/hanoi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Formule Hanoi</h5>
    <p class="card-text">Nems aux crevettes <br>
           Poulet saté <br>
           Perles de coco</p>
           <a href="?formule=Formule Hanoi&img=hanoi.jpg&Nems=Nems au crevettes" class="btn btn-primary" >Choisir</a>
  </div>
</div>
    </div>
   
  </div>
  <footer>
      <h2>
          🕊......🕊......🕊......🕊......🕊. Au Pois Gourmand
      </h2>

  </footer>
</div>
<?php 

} else {
    ?>
    <div class="container">

    <header>
       <h1> 🕊 Au Pois Gourmand </h1>
    </header>
   

    
    
    <div class="card">
  <h5 class="card-header">Merci <?php echo $_GET['Nems']  ?> pour votre commande !</h5>
  <div class="card-body">
  <img src="../img/<?php echo $_GET['img']  ?>" class="card-img-top" alt="...">
    <p class="card-text">Votre <?php echo $_GET["formule"]  ?> arrive dans quelques instants...</p>
    <a href="./resultat1.html.php" class="btn btn-primary">Choisir un autre menu</a>
  </div>
</div>

  <footer>
      <h2>
          🕊......🕊......🕊......🕊......🕊. Au Pois Gourmand
      </h2>
  </footer>
</div>
<?php
}
?>




</body>
</html>


