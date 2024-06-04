<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "Ejercicio 1 <br> ";
    $numero=4;
    echo "<br> Tabla de multiplicar de $numero <br> ";
   for ($i = 1; $i <= 10; $i++) {
    $resultado= $numero*$i;
    echo" $numero * $i =$resultado <br>";

   } 
   

   echo "<br>Ejercicio 2 <br> ";
   $mes=3;
   $dia = 3;
switch ($dia) {
case 1:
echo "<br> Estamos en enero <br>";
echo" Estamos en verano <br> ";
break;
case 2:
echo "<br> Estamos en febrero <br>";
echo" Estamos en verano <br> ";
break;
case 3:
echo "<br> Estamos en marzo <br>";
echo" Estamos en otoño <br>";
break;
case 4:
echo "<br> Estamos en abril <br>";
echo" Estamos en otoño <br> ";
break;
case 5:
echo "<br> Estamos en mayo <br>";
echo" Estamos en otoño  <br>";
break;
case 6:
echo "<br> Estamos en junio <br>";
echo" Estamos en invierno  <br>";
break;
case 7:
echo "<br> Estamos en julio <br>";
echo" Estamos en invierno  <br> ";
break;
case 8:
echo "<br> Estamos en agosto  <br>";
echo" Estamos en invierno   <br>";
break;
case 9:
echo "<br> Estamos en septiembre  <br>";
echo" Estamos en primavera  <br>";
break;
case 10:
echo "<br> Estamos en octubre  <br>";
echo" Estamos en primavera  <br>";
break;
case 11:
echo " <br> Estamos en noviembre  <br>";
echo" Estamos en primavera";
break;
case 12:
echo "<br>Estamos en diciembre  <br>";
echo" Estamos en verano   <br>";
break;
default:
echo "<br>Número de mes no válido";
break;
}

echo "<br>Ejercicio 3 <br> ";

$numero=45;


  
    if ($numero >0){
    $suma=0;
   
    for ($i = 1; $i <= $numero; $i++) {
   
        $suma += $i;
   
   
    } 
     echo" <br> La suma de los enteros desde 1 hasta $numero es = $suma <br>";
   }
    else{
        echo" ERROR:El número  tiene que ser positivo";
    }





 


    
    ?>
</body>
</html>