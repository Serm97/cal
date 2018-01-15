<?php
include "../menu.php";
include "../conect.php";
?>
<div>
    <div class="container " >
        <br>
        <h1 class="text-center" style="font-weight: bold;">REGISTRO PERSONAL </h1>
        <form name="form-reg-per" action="adminPersonal.php" method="post" class="container col-8">
            <div class="form-group">
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="txtNombre" class="input-group-addon">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre Completo" maxlength="255" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtDocumento" class="input-group-addon">Documento:</label>
                        <input type="number" class="form-control" name="txtDocumento" id="txtDocumento" placeholder="Documento de Identidad" maxlength="999999999999" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="ddlTipoEmpleado" class="input-group-addon">Tipo Empleado:</label>
                        <select name="ddlTipoEmpleado" id="ddlTipoEmpleado" class="form-control"  required>
                            <?php
                            $sql  = 'SELECT cod_tipo_empleado,descrip_tipo_empleado FROM tipo_empleado';
                            $statement=$con->prepare($sql);
                            if($statement->execute());
                            echo "<option value='0'>-- Seleccione --</option>";
                            while ($result = $statement->fetch()){
                                echo "<option value='".$result['cod_tipo_empleado']."'>".$result["descrip_tipo_empleado"]."</option>";
                            }
                            /*$sql = "SELECT * FROM tipo_pago ORDER BY cod_tipo_pago";
                            $res = mysql_query($sql);
                            while ($fila=mysql_fetch_row($res)) {
                                echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                            } */
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtTelefono" class="input-group-addon">Telefono:</label>
                        <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" placeholder="Numero de Telefono o Celular" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="txtDireccion" class="input-group-addon">Direccion:</label>
                        <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" placeholder="Direccion" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtFechaIngreso" class="input-group-addon">Fecha Ingreso:</label>
                        <input type="date" class="form-control" name="txtFechaIngreso" id="txtFechaIngreso" placeholder="Fecha de ingreso" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="txtSueldo" class="input-group-addon">Sueldo:</label>
                        <input type="number" class="form-control" name="txtSueldo" id="txtSueldo" placeholder="Sueldo a devengar" required>
                    </div>
                    <div class="form-group col-md-6">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="reset" value="Limpiar" class="btn btn-dark">
                        <input type="submit" value="Registrar" name="agregarPersona" class="btn btn-primary">
                    </div>
                    <div class="form-group col-md-6">

                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<?php include "../pie.php"; ?>
