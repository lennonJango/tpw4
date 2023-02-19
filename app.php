<?php

$srt = "Comecando a programar em php";
echo $srt;

?>

<?php
echo "<h1> Estrutura de repetições </h1>";

       $nr = 0;
         while($nr<=5){
    echo "nr:" . $nr;
           $nr++;
         }
$carros = array("Portugal" => "Mazda", "Africa do sul" => "Golf", "Estados unidos" => "Mercedes");


  foreach($carros as $carName =>$carroNome){

    echo "<br>";
    echo "nome do carro : " . $carroNome .", o seu pais de origem ".$carName;
  }
?>