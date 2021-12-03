<?php

  $recherche = $_GET['text'];
       
  include_once('dbMain.inc.php');

  $db = new PDO("$server:host=$host;dbname=$base", $user, $pass);

 //$connection=mysqli_connect("mysql-ndli-a-tourne.alwaysdata.net", "251234_root", "Vtp736hu", "ndli-a-tourne_main");

 $name = $_POST['name-select'];
 $sql = "SELECT * FROM PERSONNE"; //changer ça
 $st = $db->prepare($sql);
 $st->execute();
 foreach ($st as $ligne){
    echo $ligne['Id']."\t";
    echo $ligne['Nom']."\t";
    echo $ligne['Prenom']."\t";
    echo $ligne['DateNaissance']."\t";
    echo $ligne['DateMort']."<br />";
 }

 $db = null;
