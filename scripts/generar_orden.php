<?php
session_start();
include '../class/database.php';
$db = new database();
$db->conectarDB();
if(isset($_SESSION['carrito'])){
    header('Location: ../views/carrito2.php');
}
$arreglo=$_SESSION['carrito'];














//$random = $db->aleatorio();
//ORDEN VENTA
$query="INSERT INTO orden_venta(id_venta,cliente_orden_venta_FK) values ('$random','$_SESSION[id]')";
$query=$db->ejecuta($query);

//DETALLE ORDEN VENTA
for($i=0;$i<count($arreglo);$i++){

    $si="SELECT * from detalle_productos where id_detalle_producto=$arreglo[$i]['id']";
    $no=$db->ejecuta($si);
    $produ=$no->detalle_producto_detalle_producto_FK;
    $chi="INSERT INTO detalle_orden_venta(orden_venta_detalle_orden_FK,producto_orden_venta_FK,cantidad_producto_orden_venta,precio_detalle_orden) values ('$random','$produ',$arreglo[$i]['Cantidad'],$arreglo[$i]['Precio'] )";
    $chi=$db->ejecuta($query);
}
//header("refresh:3; ../views/mis_ordenes.php");

        echo "<div class='alert alert-success' style='margin-top: 5%'>Departamento registrado</div>";
        

?>