<?php
   function divisao($dividendo , $divisor){
try {
       if($divisor == 0){
         throw new RangeException("O divisor não pode ser zero");

   }
      $resultado = $dividendo / $divisor;
      echo "Resultado:" .  "$resultado";

}
catch (Exception $e){
    echo $e -> getMessage();
} finally {
    echo "<br/>Tratando a exceção";
}

   }

   divisao(10, 2);
?>
