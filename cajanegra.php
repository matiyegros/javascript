<!DOCTYPE html>
<html>
<body>

<?php 
function calcularDescuento($precio, $aniosCliente) { 
 if ($precio <= 0) { 
 return "Error: el precio debe ser mayor a cero"; 
 } 
 if ($aniosCliente < 0) { 
 return "Error: los anos como cliente no pueden ser negativos";  } 
 if ($aniosCliente >= 10) { 
 $descuento = 0.20; // 20% 
 } elseif ($aniosCliente >= 5) { 
 $descuento = 0.10; // 10% 
 } elseif ($aniosCliente >= 1) { 
 $descuento = 0.05; // 5% 
 } else { 
 $descuento = 0; // nuevo cliente 
 } 
 return $precio - ($precio * $descuento); 
 }
 echo calcularDescuento(15000,5);
?>
 
</body>
</html>