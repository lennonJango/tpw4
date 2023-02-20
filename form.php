<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Formulário</title>
    </head>
 <html>
 <body>
      <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nome: <input type="text" name='user'>
         <input type="submit" name="btn">
  <?php

      if($_SERVER['REQUEST_METHOD'] =="POST"){
         $nome = $_POST["user"];
          if(empty($nome)){
             echo "Nenhum dado inserido";
          }else{
            echo "<br>";

              echo $nome;
          }

      }

    ?>
    
    </form>

 </body>   
 </html>