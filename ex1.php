<?php
   echo" <h1>Exercício 2</h1>";
    $elementos = array(2,3,4,10,8,16);

    function numerosPositivos($numeros){
        for($n=0;$n<count($numeros);$n++){
         if($numeros[$n]%2==0){
            echo "<br>";
              echo $numeros[$n];
            }
        }
      
      }

      numerosPositivos($elementos);

?>



<?php
  echo "<h1>Exercício 3</h1>";
   $soma_elementos= array(10,20,34,12);
    function soma ($somaDeElementos){
    $soma =0;
    $contador=0;
   do{
      $soma += $somaDeElementos[$contador];
      $contador++;
   } while($contador<count($somaDeElementos));
  echo "A soma do array e igual a:".$soma;
 }
 soma($soma_elementos);
?>


<?php
   echo "<h1>Exercício 4</h1>";
     $alturas = array(1.76,2.50,1.66,1.27,1.89 ,2.10);
      for($n=0;$n<count($alturas);$n++){
          if($alturas[$n]<1.70){
            echo "Altura das pessoas altas".$alturas[$n];
            echo"<br>";
          }elseif($alturas[$n]<155||$alturas[$n]<1.70){
            echo "Altura das pessoas com altura media".$alturas[$n];
            echo"<br>";

          } elseif($alturas[$n]<155){
             echo"Pessoas baixinhas".$alturas[$n];
              echo"<br>";
          };

        
      }

?>