<?php
echo "<h2>Ejercicio 1</h2>";
$arreglo = [
  'keyStr1' => 'lado',
	0 => 'ledo',
  'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];
foreach ($arreglo as $elementoASC) {
	echo $elementoASC . ', ';
}
echo "<br> decirlo al revés lo dudo. <br>";

rsort($arreglo);
foreach ($arreglo as $elementoDESC) {
    echo $elementoDESC . ', ';
}
echo "<br> ¡Qué trabajo me ha costado! <br>";

echo "<br><h2>Ejercicio 2</h2>";

$paises = [
  'Francia' => ['Paris', 'Lille', 'Bordeaux'],
	'Alemania' => ['Berlín', 'Bremen', 'Düsseldorf']
];


foreach ($paises as $pais=>$ciudades) {
  echo '<b>' . $pais . '</b>: ';
  foreach ($ciudades as $ciudad) {
    echo $ciudad . ', ';
  }
  echo "<br>";
}

echo "<br><h2>Ejercicio 3</h2>";
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

sort($valores);

for ($i = 0; $i < 3; $i++) {
    echo $valores[$i] . ', ';
}

rsort($valores);
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    echo $valores[$i] . ', ';
}
?>
