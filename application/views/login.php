<?php 
/**
 * Vista de Login en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/metaHeader.php") ?>
    <title>Login en Natillapp</title>
    <?php include("includes/cssFiles.php") ?>
</head>
<body>

<div class="container">
    
<div class="col-md-6 offset-3">
    <!-- Card -->
<div class="card">
    <!-- Card body -->
    <div class="card-body">
    <img src="<?php echo base_url();?>assets/img/natillapp_logo.svg" alt="" class="img-responsive center-block img-logo">
        <!-- Material form register -->
        <?php 
$atributos=array("class"=>"form-horizontal form-label-left");
echo form_open("login", $atributos);
?>
            <p class="h4 text-center py-3">Iniciar Sesión</p>
            <!-- Material input email -->
            <div class="md-form"> 
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" name="usuario" id="materialFormCardEmailEx" class="form-control" required>
                <label for="materialFormCardEmailEx" class="font-weight-light">Tu Correo o Usuario</label>
            </div>
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" name="clave" id="materialFormCardPasswordEx" class="form-control"  required>
                <label for="materialFormCardPasswordEx" class="font-weight-light">Tu Clave</label>
            </div>
            <div class="text-center py-4 mt-3">
                <button  type="submit" name="enviar" class="btn btn-cyan">Iniciar Sesión</button>
            </div>
        </form>
        <!-- Material form register -->
    </div>
    <!-- Card body -->
</div>
<!-- Card -->
</div>
</div>

<?php include("includes/jsFiles.php") ?>
</body>
</html>