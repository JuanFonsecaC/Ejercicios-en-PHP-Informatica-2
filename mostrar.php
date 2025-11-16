<?php
if($_GET)
echo  "bienvenido a mi sitio web, tu nombre es: " .$_GET['nombre']." " .$_GET['apellido']."<br>";
echo  "tu edad es: ".$_GET['edad']."<br>"."<br>";
echo  "el primer numero escogido fue: ".$_GET['num1']."<br>";
echo  "el segundo numero escogido fue: ".$_GET['num2']."<br>";
echo  "el tercer numero escogido fue: ".$_GET['num3']."<br>";
echo  "el signo escogido fue: ".$_GET['sig']."<br>"."<br>";
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$num3=$_GET['num3'];
$sig=$_GET['sig'];
$cont=0;
$mult1=$num1*$num2;
echo "el resultado de la primera multiplicacion es: ".$mult1."<br>";
$mult2=$num2*$num3;
echo "el resultado de la segunda multiplicacion es: ".$mult2."<br>"."<br>";
$prom=(($mult1+$mult2)/2);
echo "el resultado de la promedio de las multiplicaciones es: ".$prom."<br>"."<br>";
$divi1=$num1/$num2;
echo "el resultado de la primera division es: ".$divi1."<br>";
$divi2=($num2/$num3)*$num1;
echo "el resultado de la segunda division es: ".$divi2."<br>";
$divi3=(($num1+($num2*$num3))/$num1);
echo "el resultado de la tercera division es: ".$divi3."<br>"."<br>";
$rest1=$num1-$num3;
echo "el resultado de la primera resta es: ".$rest1."<br>"."<br>";
function tablauno ($num1) { for($cont=1;$cont<=10;$cont++)
    echo "<br>".$num1.'*'.$cont.'='.$cont*$num1;
}
tablauno($num1);
function tablados ($num2) { for($cont=1;$cont<=10;$cont++)
    echo "<br>".$num2.'*'.$cont.'='.$cont*$num2;
}
tablados($num2);
function tablatres ($num3) { for($cont=1;$cont<=10;$cont++)
    echo "<br>".$num3.'*'.$cont.'='.$cont*$num3;
}
tablados($num3);

function tablacuatro ($sig, $num1, $num2)
{
    if ($sig=="+")
{
    echo "<br>la operacion escogida fue suma: <br>";
    echo $num1."+".$num2."=".$num1+$num2;
}
    if ($sig=="-")
{
    echo "<br>la operacion escogida fue resta: <br>";
    echo $num1."-".$num2."=".$num1-$num2;
}
    if ($sig=="/")
{
    echo "<br>la operacion escogida fue division: <br>";
    echo "<br>".$num1."/".$num2."=".$num1/$num2;
}
    if ($sig=="*")
{
    echo "<br>la operacion escogida fue multiplicacion: <br>";
    echo "<br>".$num1."*".$num2."=".$num1*$num2;
}
}
tablacuatro ($sig, $num1, $num2);
echo "<br>"."gracias por visitar este sitio, vuelva pronto. ";




?>



