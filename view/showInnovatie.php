<?php 

 if(isset($_POST['selectCategorie'])){
 
    if($innovaties){

        foreach($innovaties as $Innovatie){
            echo '<br>';
            echo 'Innovatie nummer: ', $Innovatie['ID'] . '<br>';
            echo 'Maker: ', $Innovatie['user'] .'<br>';
            echo 'Innovatie: ', $Innovatie['innovatie'] . '<br>';
            echo 'Innovatie categorie: ', $Innovatie['categorie'] . '<br>';
            echo 'Datum gemaakt: ', $Innovatie['datum'] . '<br>';
        }

    }
 }
else if(isset($_POST['selectDatum'])){

    if($innovaties){

        foreach($innovaties as $Innovatie){
            echo '<br>';
            echo 'Innovatie nummer: ', $Innovatie['ID'] . '<br>';
            echo 'Maker: ', $Innovatie['user'] .'<br>';
            echo 'Innovatie: ', $Innovatie['innovatie'] . '<br>';
            echo 'Innovatie categorie: ', $Innovatie['categorie'] . '<br>';
            echo 'Datum gemaakt: ', $Innovatie['datum'] . '<br>';
        }
    }
}




?>