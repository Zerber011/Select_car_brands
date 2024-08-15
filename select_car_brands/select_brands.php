<?php

$selected_brand = "";

if(isset($_GET["brand"])){
    $selected_brand = $_GET["brand"];
}

$cars = [
    "Audi" => ["A8", "Q5", "Q7"],
    "Mercedes" => ["A2", "SLK", "GLA"],
    "BMW" => ["d320", "X5", "X6"],
    "Opel" => ["C", "D", "Insignia"]
];

foreach($cars as $brand => $autos){
   
    if($selected_brand == $brand || $selected_brand == "ALL"){
     echo "<h4> $brand </h4>";
     
     foreach($autos as $auto){
      echo "<p> $auto </p>";
         }
    }
}
 





