<?php
include "../conect.php";
if ($_POST['agregarProducto']){
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $cantidad = $_POST['txtCantidad'];
    $precio = $_POST['txtPrecio'];


    $sql = "INSERT INTO producto (nombre_producto,descrip_producto,cantidad_producto,precio_producto) ";
    $sql = $sql." VALUES ('$nombre','$descripcion',$cantidad,$precio)";
    //echo $sql;
    $statement=$con->prepare($sql);
    try{
        if ($statement->execute()){
            $mensaje="Producto guardada correctamente";
            header("Location:".$_SESSION["URL"]."agregarProducto.php?success=done&message=".$mensaje);
        }
    }catch(\Exception $ex){
        header("Location:".$_SESSION["URL"]."agregarProducto.php?success=false&message=".$ex->getMessage());
    }
}
if ($_POST['actualizarProducto']){
    $codigo = $_POST['txtCodigo'];
    $nombre = $_POST['txtNombre'];
    $descripcion = $_POST['txtDescripcion'];
    $cantidad = $_POST['txtCantidad'];
    $precio = $_POST['txtPrecio'];
    $sql = "UPDATE producto SET nombre_producto='".$nombre."',descrip_producto='".$descripcion."',cantidad_producto=$cantidad,precio_producto=$precio WHERE cod_producto=$codigo";
     $statement=$con->prepare($sql);
    try{
        if ($statement->execute()){
            $mensaje="Producto editado correctamente";
            header("Location:".$_SESSION["URL"]."agregarProducto.php?success=done&message=".$mensaje);
        }
    }catch(\Exception $ex){
        header("Location:".$_SESSION["URL"]."editarProducto.php?success=false&message=".$ex->getMessage());
    }
}