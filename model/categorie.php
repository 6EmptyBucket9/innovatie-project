<?php 
 
 class Categorie{
    private $ID;
    private $Naam;
    private $innovaties;

    function getId()
    {

      return $this->ID;
    }

    function setId($ID){
      return $this->ID=$ID;
    }
    
    function getNaam()
    {

      return $this->Naam;
    }
    function setNaam($Naam){
      return $this->Naam=$Naam;
    }

    function getInnovaties($categorie)
    {
       global $pdo;

        $sql = 'SELECT innovaties.ID, user.Naam as user, innovatie, categorieen.naam as categorie, datum 
        FROM innovaties
        INNER JOIN categorieen ON innovaties.categorie = categorieen.ID
        INNER JOIN user ON innovaties.user = user.ID
        WHERE categorie = :cat';

      $statement = $pdo->prepare($sql);

      $statement->execute([
        ':cat' => $categorie
      ]);

      $this->innovaties = $statement->fetchAll(PDO::FETCH_ASSOC);
  
      return $this->innovaties;
      
    }
  

    function searchInnovatie()
    {
     

      if(isset($_POST['selectCategorie']))
      {
        
        $selectedCategorie = filter_input(INPUT_POST, 'selectCategorie');
        // $selectedDatum = filter_input(INPUT_POST, 'selectDatum');
        $innovaties = $this->getInnovaties($selectedCategorie);
    
        return $innovaties;
      }
      else if(isset($_POST['selectDatum'])){
         $selectedDatum = filter_input(INPUT_POST, 'selectDatum');
         $innovaties = $this->getInnovaties($selectedDatum);
         return $innovaties;

      }
    }

   
     }
    



?>