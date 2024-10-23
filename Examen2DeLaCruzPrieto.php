<?php
echo "** ARREGLO PRECIOS **", "<br>";
$arraydatos = array("500", "400", "200", "700", "100");
$arrayIVA = array();
$arrayTotalIVA = array();
$arraySubtotal = array();
$arrayTotalSUB = array();
$arrayDescuento = array();
$arrayDescuentoTotal = array();
$arrayTotal = array();

for ($i=0; $i<=4; $i++)
{
	$arraydatos[]=$arraydatos[$i];
	echo $arraydatos[$i];
	echo"<br>";

}
echo "** ARREGLO IVA **", "<br>";
$arraydatos = array("500", "400", "200", "700", "100");
$arrayIVA = array("0.16");
$arrayTotalIVA = array();
$arraySubtotal = array();
$arrayTotalSUB = array();
$arrayDescuento = array();
$arrayDescuentoTotal = array();
$arrayTotal = array();

for ($i=0; $i<=4; $i++) 
{
	$arrayTotalIVA[]=$arraydatos[$i]*$arrayIVA[$i];
	echo $arrayTotalIVA[$i];
	echo"<br>";
}
echo "** ARREGLO SUBTOTAL **", "<br>";
$arraydatos = array("500", "400", "200", "700", "100");
$arrayIVA = array("0.16");
$arrayTotalIVA = array("80","64","32","112","16");
$arraySubtotal = array();
$arrayTotalSUB = array();
$arrayDescuento = array();
$arrayDescuentoTotal = array();
$arrayTotal = array();

for ($i=0; $i<=4; $i++)
{
	$arrayTotalSUB[]=$arraydatos[$i]+$arrayTotalIVA[$i];
	echo $arrayTotalSUB[$i];
	echo"<br>";
}
echo "** ARREGLO DESCUENTOS **", "<br>";
$arraydatos = array("500", "400", "200", "700", "100");
$arrayIVA = array("0.16");
$arrayTotalIVA = array("80","64","32","112","16");
$arraySubtotal = array();
$arrayTotalSUB = array();
$arrayDescuento = array("0.10");
$arrayDescuentoTotal = array("58","46.4","23.2","81.2","11.6");
$arrayTotal = array();


for ($i=0; $i<=4; $i++)
{
	$arrayDescuentoTotal[]=$arraySubtotal[$i]*$arrayDescuento[$i];
	echo $arrayDescuentoTotal[$i];
	echo"<br>";
}
echo "** ARREGLO TOTAL **", "<br>";
$arraydatos = array("500", "400", "200", "700", "100");
$arrayIVA = array("0.16");
$arrayTotalIVA = array("80","64","32","112","16");
$arraySubtotal = array();
$arrayTotalSUB = array();
$arrayDescuento = array("0.10");
$arrayDescuentoTotal = array("58","46.4","23.2","81.2","11.6");
$arrayTotal = array();


for ($i=0; $i<=4; $i++)
{
	$arrayTotal[]=$arraydatos[$i]-$arrayDescuentoTotal[$i];
	echo $arrayTotal[$i];
	echo"<br>";
}
?>