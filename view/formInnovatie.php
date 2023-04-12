<?php
// <input type='submit' name='innovatieShowBTN' id='innovatieShowBTN' value='Laat gemaakte innovaties zien'></form><br>";
if(isset($_POST['innovatieMakeBTN'])){
  echo '<form action="index.php" method="post">
  <input type="submit" name="innovatieHideBTN" id="innovatieHideBTN" value="Close form"></form><br>

  <form action="index.php" method="post">
  <label for="titleMaak">Maak innovatie aan:</label><br>
  <label for="user">User:</label><br>
  <select name="user" id="user">';

  foreach ($users as $user) {
      echo "<option value='".$user->getId()."'>".$user->getNaam()."</option>";
      }
  echo "
  </select><br>
  <label for='categorie'>Categorie:</label><br>
  <select name='categorie' id='categorie'>";
      foreach ($categorieën as $categorie) {
      echo "<option value='".$categorie->getId()."'>".$categorie->getNaam()."</option>";
      }
  echo '
  </select><br>
  <label for="innovatie">Innovatie:</label><br>
  <input type="text" id="innovatie" name="innovatie"><br>
  <label for="datum">Datum:</label><br>
  <input type="date" id="datum" name="datum"><br>
  <input type="submit">
  </form><br>'; 
 

}

else if(isset($_POST['categorieMaakBTN'])){
    
    echo '
    <form action="index.php" method="post">
    <input type="submit" name="innovatieHideBTN" id="innovatieHideBTN" value="Close form"><br>
    <label for="maakCategorie">Nieuwe categorie:</label><br>
    <input type="text" name="maakCategorie" id="maakCategorie"><br>
    <input type="submit"</form>
 ';


}

else if(isset($_POST['innovatieVeranderBTN'])){
  // verander innovatie begin
  echo '
  <form action="index.php" method="post">
  <input type="submit" name="innovatieHideBTN" id="innovatieHideBTN" value="Close form"><br>
  <label for="titleVerander">Verander een innovatie:</label><br>
  <label for="innovatieId">Innovatie Id:</label><br>
  <select name="innovatieId" id="innovatieId">';
  foreach ($innovatiesId as $innovatieId) {
   
      echo "<option value='".$innovatieId->getInnovatie()."'>".$innovatieId->getID()."</option>";
      }
    
  echo '</select><br>

  <label for="userVerander">User:</label><br>
  <select name="userVerander" id="userVerander">';
  foreach ($users as $user) {
      echo "<option value='".$user->getId()."'>".$user->getNaam()."</option>";
      }
  echo "
  </select><br>
  <label for='categorieVerander'>Categorie:</label><br>
  <select name='categorieVerander' id='categorieVerander'>";
      foreach ($categorieën as $categorie) {
      echo "<option value='".$categorie->getId()."'>".$categorie->getNaam()."</option>";
      }
  echo '
  </select><br>
  <label for="innovatieVerander">Innovatie:</label><br>
  <input type="text" id="innovatieVerander" name="innovatieVerander"><br>
  <label for="datumVerander">Datum:</label><br>
  <input type="date" id="datumVerander" name="datumVerander"><br>
  <input type="submit">
  </form><br>'; 
    }
    else{


  echo "
  <form action='index.php' method='post'>
  <input type='submit' name='innovatieMakeBTN' id='innovatieMakeBTN' value='Maak een innovatie'></form><br>
  <form action='index.php' method='post'>
  <input type='submit' name='categorieMaakBTN' id='categorieMaakBTN' value='Maak een categorie aan'></form><br>
  <form action='index.php' method='post'>
  <input type='submit' name='innovatieVeranderBTN' id='innovatieVeranderBTN' value='Verander een innovatie'></form><br>


  <form action='index.php' method='post'>
  <select name='selectCategorie' id='selectCategorie'>";
      foreach ($categorieën as $categorie) {
      echo "<option value='".$categorie->getId()."'>".$categorie->getNaam()."</option>";
      }
      
  echo "</select><br><input type='submit' value='Selecteer de categorie van gemaakte innovatie'></form><br>

       <form action='index.php' method='post'>
        <select name='selectDatum' id='selectDatum'>";
         foreach ($datums as $datum) {
         echo "<option value='".$datum->getId()."'>".$datum->getDatum()."</option>";
         }
          echo "</select><br><input type='submit' value='Selecteer de datum van gemaakte innovatie'></form>";
};


//   }

 ?>