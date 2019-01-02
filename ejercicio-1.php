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
?>
