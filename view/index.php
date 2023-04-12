<?php 
require '../controller/controller.php';
require '../model/categorie.php';
require '../model/connect.php';
require '../model/user.php';

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
     $controller = new Controller();
     $categorie = new Categorie();

     $categorieën = $controller->getCategorie();
     $users = $controller->getUser();
     $innovatiesId = $controller->getID();
     $datums = $controller->getDatum();


     //if(isset($_POST['innovatieMakeBTN'])){}
     //else if(isset($_POST['innovatieVeranderBTN'])){}
 
     
    $controller->veranderInnovatie();
     
    $controller->opslaanInnovatie();

    $controller->opslaanCategorie();
        



     $innovaties = $categorie->searchInnovatie();




     include 'formInnovatie.php';
    //  include 'selectCategorie.php';
     include 'showInnovatie.php';
    ?>

</body>
</html>