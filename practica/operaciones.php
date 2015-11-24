<?php
$pedido[0][0]=$_POST["Pizza"];
$pedido[0][1]=$_POST["cantidad"];
$pedido[0][2]=$_POST["Pago"];
$pedido[0][3]=$_POST["nombre"];
$pedido[0][4]=$_POST["direccion"];
$pedido[0][5]=$_POST["telefono"];
$pedido[0][6]=$_POST["precio"];

echo "<center>";
echo "<table border='3' bgcolor=blue>";
echo "<b><font size=10 color=green>Bienvenidos a Pizza Italiana</b></font>";
echo "<tr bgcolor=orange style=color.blue>";

//El tamaño el opcional ya que igual compila correctamente

echo "<tr><td width=200>cliente </td><td width=100>".$pedido[0][3]."</td><br></br>";
echo "<tr><td><font size=5 color=orange>direccion</font></td><td>".$pedido[0][4]."</td>";
echo "<tr><td><font size=5 color=orange>cantidad</font></td><td>".$pedido[0][1]."</td>";
echo "<tr><td>telefono</td><td>".$pedido[0][5]."</td>";
echo "<tr><td>Pago</td><td>";

echo $pedido[0][2];

$total=$pedido[0][1]*$pedido[0][6];
echo "<tr><td>Total</td><td>".$total."</td>";
echo "</table>";
echo "</center>";
?>