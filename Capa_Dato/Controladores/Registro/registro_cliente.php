<?php


   if(isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $apellido= $_POST ['apellido'];
        $documento= $_POST ['documento'];
        $fecha_nacimiento= $_POST ['fecha_nacimiento'];
        $telefono= $_POST ['telefono'];
        $correo= $_POST ['correo'];
        $contrasena= $_POST ['contrasena'];

        $insertarDatos = "INSERT INTO cliente (ID_Cliente,Tipo_Documento,Documento_Cliente,Nombre_Cliente,Apellido_Cliente,Fecha_Nacimiento,Correo,Contraseña_Cliente,Telefono,Direccion,Ruc_Cliente,Razon_Social)
        VALUES('','','$documento','$nombre','$apellido','$fecha_nacimiento','$correo','$contrasena','$telefono','','','')";
        $ejecutarInsertar = mysqli_query ($conn,$insertarDatos);
        if ($ejecutarInsertar) {
         echo "Registro exitoso";
     } else {
         echo "Error: " . mysqli_error($conn);
     }
 
   }
?>
