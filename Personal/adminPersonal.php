<?php
include "../conect.php";
if ($_POST['agregarPersona']){
    $documento = $_POST['txtDocumento'];
    $tipoEmpleado = $_POST['ddlTipoEmpleado'];
    $nombre = $_POST['txtNombre'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $fechaIngreso = $_POST['txtFechaIngreso'];
    $sueldo = $_POST['txtSueldo'];

    $sql = "INSERT INTO empleado ( dni_empleado,cod_tipo_empleado,nombre_empleado,telefono_empleado,direccion_empleado,fecha_ingreso_empleado,sueldo_empleado)";
    $sql = $sql." VALUES ($documento,$tipoEmpleado,'$nombre',$telefono,'$direccion','$fechaIngreso',$sueldo)";
    //echo $sql;
    $statement=$con->prepare($sql);
    try{
        if ($statement->execute()){
            $mensaje="Persona guardada correctamente";
            header("Location:".$_SESSION["URL"]."agregarPersonal.php?success=done&message=".$mensaje);
        }
     }catch(\Exception $ex){
        header("Location:".$_SESSION["URL"]."agregarPersonal.php?success=false&message=".$ex->getMessage());
     }


}