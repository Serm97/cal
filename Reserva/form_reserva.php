<?php include "../template/menu.php";
include "../template/conect.php"; ?>
<div>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Deligth</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
       <style>
       #label{
        font-family: Georgia;
        font-size: 18px;
        font-weight: bold;: 
    }
</style>
</head>
</div>
<div>
	

    <div class="container">

       <h1 class="text-center" style="font-weight: bold;"><img src="images/logo.png" width="80" height="80" class="" alt=""> Formulario de Reservas </h1>


       <form class="container col-8" action="carga_reserva.php" method="post" >
        <div class="form-group">
            <label class="col-form-label" for="formGroupExampleInput" id="label">Datos Personales</label>
            
            <div class="row">
                <div class="form-group col-md-4">
                    <div class="input-group-addon">Documento</div>
                    <input type="number" class="form-control is-valid" id="" placeholder="N° de Identidad" name="dni"  maxlength="999999999999" required>
                </div>
                <div class="form-group col-md-8">
                    <div class="input-group-addon">Nombre</div>
                    <input type="text" class="form-control is-valid" id="" placeholder="Indique su Nombre" name="nombres" required>
                </div>
            </div>  
            <div class="row">
                <div class="form-group col-md-8">
                    <div class="input-group-addon">Correo</div>
                    <input type="email" class="form-control is-valid" id="" placeholder="Indique su Correo Electronico" name="correo" required>
                    <small id="passwordHelpInline" class="text-muted">
                        <i class="fa fa-envelope-open" aria-hidden="true"></i>
                        Le enviaremos una copia del formulario de reserva completo a su dirección de email.
                    </small>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group-addon">Telefono</div>
                    <input type="text" class="form-control is-valid" id="" placeholder="Indique N° de Contacto" name="telefono" maxlength="10" required>

                </div>
            </div>

            <label class="col-form-label" for="formGroupExampleInput" id="label">Datos Reserva</label>
            <div class="row">
                <div class="form-group col-md-6 ">
                    <div class="input-group-addon">Fecha Entrada</div>
                    <input type="datetime-local" class="form-control is-valid" id="inicio" placeholder="Fecha Entrada" name="f_entrada" required>
                </div>
                
                <div class="form-group col-md-6">
                    <div class="input-group-addon">Fecha Salida</div>
                    <input type="datetime-local" class="form-control is-valid" id="fin" placeholder="Fecha Salida"  name="f_salida" required>
                </div>
                
                <div class="form-group col-md-9">
                    <div class="input-group-addon">Tipo de Habitación</div>
                    <select id="inputState" class="form-control custom-select is-valid" name="tipo_habitacion" required>
                        <?php 
                        $sql = "SELECT * FROM tipo_habitacion ORDER BY cod_tipo_habitacion";
                        $statement=$con->prepare($sql);
                        if($statement->execute());
                        echo "<option value='' selected>Seleccionar...</option>";
                        while ($result = $statement->fetch()) {
                           echo "<option value='".$result['cod_tipo_habitacion']."'>".$result['descrip_habitacion']."</option>";
                       }
                       ?> 
                   </select>
               </div>
               <div class="form-group col-md-3">   
                <div class="input-group-addon">Tipo de Pago  </div>
                <select class="custom-select form-control is-valid" id="inlineFormCustomSelect" name="tipo_pago" enchange="submit()" name="tipo_pago" required>
                    <?php 
                    $sql = "SELECT * FROM tipo_pago ORDER BY cod_tipo_pago";
                    $statement=$con->prepare($sql);
                    if($statement->execute()); 
                    echo "<option value='' selected>Seleccionar...</option>";
                    while ($result = $statement->fetch()) {
                        echo "<option value='".$result['cod_tipo_pago']."'>".$result['descrip_tipo_pago']."</option>";
                    }   
                    ?>
                </select>
            </div>

            <div class="container">
                <?php include "modal_productos.php"; ?>
            </div>   
        </div>
        <button type="reset" class="form-group btn btn-secondary btn-sm">Limpiar</button>
        <input type="submit" name="cargar" class="form-group btn btn-primary btn-lg btn-block active" value="Confirmar Reserva">
    </div>   
    


</form>

</div>

<br><br> 
</div>
<?php include "../pie.php"; ?>   