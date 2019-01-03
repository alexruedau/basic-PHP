<?php
echo '<h1>Ejercicios con Operadores</h1><br>';
echo '<h2>Ejercicio 1</h2>';
echo '<p>Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.</p>';
echo $a = 32+3; echo '<br>'; //imprime 35
echo $b = 3*(2+3); echo '<br>'; //3*5 = 15 --- Imprime 15

echo '<h2>Ejercicio 2</h2>';
echo '<p>Tomando en cuenta que tenemos una variable llamada $valor, ¿Cómo sería un condicional para las siguientes opciones?</p>';

echo '<h3>$valor = "10";</h3>';
echo '<p><b>$valor es mayor que 5 pero menor que 10</b></p>';
$valor = '10';
if ($valor > 5 && $valor < 10){
  echo "$valor es mayor que 5 y menor que 10<br><hr>";
} else {
  echo "$valor no cumple la condición<br><hr>";
}
/////////////////////////////////////
echo '<p><b>$valor es mayor o igual a 0 pero menor o igual a 20</b></p>';
if ($valor >= 0 && $valor <= 20){
  echo "$valor es mayor o igual a cero pero menor o igual a 20<br><hr>";
} else {
  echo "$valor no cumple la condición<br><hr>";
}
/////////////////////////////////////
echo '<p><b>$valor es igual a “10” asegurando que el tipo de dato sea cadena</b></p>';
if ($valor === '10'){
  echo "$valor es una cadena<br><hr>";
} else {
  echo "$valor no cumple la condición<br><hr>";
}
/////////////////////////////////////
echo '<p><b>$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15</b></p>';
if (($valor > 0 && $valor < 5)||($valor > 10 && $valor < 15)){
  echo "$valor cumple una de las dos condiciones<br><hr>";
} else {
  echo "$valor no cumple ninguna condición<br><hr>";
}
?>
