<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="<?php echo base_url(); ?>assets/assets2/css/main.8d288f825d8dffbbe55e.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Bienvenidos,</div>
                                            <span>Ingrese los datos que se le solicitan.</span>
                                        </h4>
                                        <?php if ($this->session->flashdata('error')): ?>
                                        <div class="col-md-12">
                                            <div class="alert alert-danger" role="alert">
                                                Usuario o contraseñsa incorrecto
                                            </div>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    <form action="<?php echo base_url(); ?>login/auth" method="POST" autocomplete="off">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="username"
                                                        placeholder="Usuario..." type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input
                                                        placeholder="Contraseña..." type="password" name="pass"
                                                        class="form-control"></div>
                                            </div>
                                        </div>


                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Iniciar Sesion</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © GUTHER <?php echo date('Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/scripts/main.8d288f825d8dffbbe55e.js">
    </script>
</body>

</html>