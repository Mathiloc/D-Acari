



<?php
if($_POST){

    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
    $sentencia=$pdo->prepare("INSERT INTO `venta` 
                        (`ID_Venta`, `ClaveTransaccion`, `PagoDatos`, `Fecha_Venta`, `CorreoConfirmacion`, `Monto_Total`, `Status`, `Metodo_Pago`, `IGV`, `Importe_Total`) 
    VALUES (NULL,:ClaveTransaccion, NULL,NOW(),:CorreoConfirmacion,:Monto_Total, 'pendiente', NULL, NULL, NULL);");
    

    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":CorreoConfirmacion",$Correo);
    $sentencia->bindParam(":Monto_Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION['CARRITO'] as $indice=>$producto){
    $sentencia=$pdo->prepare("INSERT INTO 
    `detalle_venta` (`ID_Detalle_Venta`, `ID_Venta`, `ID_Producto`, `Precio_Unitario`, `Cantidad`, `Descarga`) 
    VALUES (NULL, :ID_Detalle_Venta,:ID_Producto,:Precio_Unitario,:Cantidad, '0');");

$sentencia->bindParam(":ID_Detalle_Venta",$idVenta);
$sentencia->bindParam(":ID_Producto",$producto['ID']);
$sentencia->bindParam(":Precio_Unitario",$producto['PRECIO']);
$sentencia->bindParam(":Cantidad",$producto['CANTIDAD']);
$sentencia->execute();


    }
    // echo "<h3>".$total."<h3>";
}
 

 ?>
 <script src="https://www.paypal.com/sdk/js?client-id=YOUR_SANDBOX_CLIENT_ID&currency=PEN"></script>
 <style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>
 <div class="jumbotron text-center">
    
    <h1 class="display-4">¡Paso Final !</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con Paypal la cantidad de:
        <h4><?php echo number_format($total,2) ?></h4>
        <div id="paypal-button-container">Pagar</div>
    </p>
    <p>Los productos Seran enviados a su domicilio una vez que se procese el pago <br/>
    <strong>(Para aclaraciones : uhprezoscar@gmail.com)</strong>
    </p>
 </div>




<?php include 'templates/pie.php'?>