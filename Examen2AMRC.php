<?php
/* CBTIS 89
programa que almacena los precios de 5 articulos
cristhian molina ramos
programacion T.M.
*/
$arrayprecios=array(500,400,200,700,100);
$longitud= count($arrayprecios);
$arrayiva=array();
$arraysubtotal=array();
$arreglodescuento=array();
$arraytotal=array();

for($i=0; $i<$longitud; $i++) {
	echo "arreglo iva<br>";
}
for($i=0; $i<$longitud; $i++){
echo $arrayiva [$i],"<br>";
echo "arreglo subtotal<br>";
}
for($i=0; $i<$longitud; $i++){
echo $arraysubtotal [$i],"<br>";
echo "arreglo descuento<br>";
}
for($i=0; $i<$longitud; $i++){
	$arraydescuento=[$i]+$arraydescuento /10
	echo $arraydescuento [$i],"<br>";
	echo "arreglo total<br>";
}
for($i=0; $i<$longitud; $i++){
echo $arraytotal [$i],"<br>";
}
?>