<?php 
  
  class Innovatie{
    private $ID;
    private $user;
    private $innovatie;
    private $categorie;
    private $datum;

    function getID(){
        return $this->ID;
    }

    
    function setID($ID){
         $this->ID=$ID;
    }


    function getUser(){
        return $this->user;
    }

    function setUser($user){
        $this->user=$user;
   }


    function getInnovatie(){
        return $this->innovatie;
    }

    function setInnovatie($innovatie){
        $this->innovatie=$innovatie;
   }


    function getCategorie(){
        return $this->categorie;
    }

    function setCategorie($categorie){
        $this->categorie=$categorie;
   }

    function getDatum(){
        return $this->datum;
    }

    function setDatum($datum){
        $this->datum=$datum;
   }

   function flush(){
    if(!empty($this->user) && !empty($this->innovatie) && !empty($this->categorie) && !empty($this->datum)){
        global $pdo;

        $sql = 'INSERT INTO innovaties(user, datum, categorie, innovatie) VALUES(:user, :datum, :categorie, :innovatie)';

        $statement = $pdo->prepare($sql);

        $statement->execute([
            ':user' => $this->user,
            ':innovatie' => $this->innovatie,
            ':categorie' => $this->categorie,
            ':datum' => $this->datum
        ]);

    $innovatie_id = $pdo->lastInsertId();
    $this->ID = $innovatie_id;

    echo 'Het id van de nieuwe innovatie ' . $innovatie_id . ' is toegevoegd<br>';
    }

   }

   
   function flushChange(){
    if(!empty($this->ID) & !empty($this->user) && !empty($this->innovatie) && !empty($this->categorie) && !empty($this->datum)){
        global $pdo;

        $sql = 'UPDATE innovaties
                SET  user = :user, innovatie = :innovatie, categorie = :categorie, datum = :datum
                WHERE innovaties.ID = :id ';

        $statement = $pdo->prepare($sql);
       

        $statement->execute([
            ':id' => $this->ID,
            ':user' => $this->user,
            ':innovatie' => $this->innovatie,
            ':categorie' => $this->categorie,
            ':datum' => $this->datum
        ]);
        
        echo 'Innovatie is veranderd<br>';
    }

    
}
  }

?>