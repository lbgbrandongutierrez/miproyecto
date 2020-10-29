<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login </title>    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
    
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>SISTEMA DE VENTAS Y COMPRA</h2>
        </div>
       
        <div class="login-box-body">
            <?php echo validation_errors(); ?>
            <?php if ($this->session->flashdata('error')):?>
             <div class="alert alert-danger">
                 <p><?php echo $this->session->flashdata('error'); ?></p>
             </div> 
             <?php endif; ?>  
            <p class="login-box-msg">Introduzca sus datos de ingreso</p>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="text" required="required" pattern="[A-Za-z]+" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" required="required" pattern="[A-Za-z]+" maxlength="20" class="form-control" placeholder="Password" name="clave" id="clave">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                   
                </div>
            </form>

        </div>
     
    </div>

<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>