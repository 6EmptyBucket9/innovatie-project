<?php 

  class Controller{

  function opslaanInnovatie(){

    require_once("../model/innovatie.php");
    if(isset($_POST['user']) && isset($_POST['innovatie']) 
    && isset($_POST['categorie']) && isset($_POST['datum'])){
  
      $user = filter_input(INPUT_POST, 'user');
      $innovaties = filter_input(INPUT_POST, 'innovatie');
      $categorie = filter_input(INPUT_POST, 'categorie');
      $datum = filter_input(INPUT_POST, 'datum');
  
      $innovatie = new Innovatie();
  
      $innovatie->setUser($user);
      // echo $innovatie->getUser(),"<br />";

      $innovatie->setInnovatie($innovaties);
      // echo  $innovatie->getInnovatie(),"<br />";
      
      $innovatie->setCategorie($categorie);
      // echo  $innovatie->getCategorie(),"<br />";

      $innovatie->setDatum($datum);
      // echo $innovatie->getDatum(),"<br />";

     $innovatie->flush();

  }
  }

  function opslaanCategorie(){

    require_once("../model/categorieMake.php");
    if(isset($_POST['maakCategorie'])){
  
      $categorieën = filter_input(INPUT_POST, 'maakCategorie');
  
      $categorie = new CategorieMake();
    
      $categorie->setNaam($categorieën);
 
     $categorie->flush();

  }
  }
  function veranderInnovatie(){
    require_once("../model/innovatie.php");
    if(isset($_POST['innovatieId']) && isset($_POST['userVerander']) 
    && isset($_POST['categorieVerander']) && isset($_POST['innovatieVerander']) && isset($_POST['datumVerander'])){
      $innovatie_id = filter_input(INPUT_POST, 'innovatieId');
      $user = filter_input(INPUT_POST, 'userVerander');
      $innovaties = filter_input(INPUT_POST, 'innovatieVerander');
      $categorie = filter_input(INPUT_POST, 'categorieVerander');
      $datum = filter_input(INPUT_POST, 'datumVerander');
  
      $innovatie = new Innovatie();
       
      $innovatie->setID($innovatie_id);

      $innovatie->setUser($user);
      // echo $innovatie->getUser(),"<br />";

      $innovatie->setInnovatie($innovaties);
      // echo  $innovatie->getInnovatie(),"<br />";
      
      $innovatie->setCategorie($categorie);
      // echo  $innovatie->getCategorie(),"<br />";

      $innovatie->setDatum($datum);
      // echo $innovatie->getDatum(),"<br />";

     $innovatie->flushChange();

  }
  }

  function getCategorie(){
    global $pdo;

    $sql = 'SELECT * 
    FROM categorieen';

   $statement = $pdo->query($sql);

   $categorieën = $statement->fetchAll(PDO::FETCH_CLASS, "Categorie");

   return $categorieën;

  }

  function getDatum(){
    require_once('../model/datum.php');
    global $pdo;

    $sql = 'SELECT ID, datum
    FROM innovaties';

   $statement = $pdo->query($sql);

   $datums = $statement->fetchAll(PDO::FETCH_CLASS, "Datum");

   return $datums;
  }

  
  function getUser(){
    global $pdo;

    $sql = 'SELECT ID, naam
    FROM user';

   $statement = $pdo->query($sql);
  
   $users = $statement->fetchAll(PDO::FETCH_CLASS, "User");
   
   return $users;

  }

  function getID(){
    include("../model/innovatie.php");
    global $pdo;
  
    $sql = 'SELECT *
    FROM innovaties';

   $statement = $pdo->query($sql);

   $innovatiesId = $statement->fetchAll(PDO::FETCH_CLASS, "Innovatie");

   return $innovatiesId;

  }
  
  

  






}
?>