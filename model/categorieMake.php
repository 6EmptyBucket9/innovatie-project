<?php 
 
 class CategorieMake{
    
    private $Naam;
 
    function getNaam()
    {

      return $this->Naam;
    }
    function setNaam($Naam){
      return $this->Naam=$Naam;
    }

  
    function flush(){
      if(!empty($this->Naam)){
          global $pdo;
        
          $sql = 'INSERT INTO categorieen(naam) VALUES(:naam)';
  
          $statement = $pdo->prepare($sql);
         
          $statement->execute([
              ':naam' => $this->Naam,
          ]);
  

      echo 'Categorie: '.$this->Naam. ' is toegevoegd<br>';
      }
  
     }
    
  }




?>