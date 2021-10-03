<?php // var_dump($usuarios);?>

<?php if ($this->session->flashdata('flash_message') != ""): ?>
<div class="col-md-12">
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('flash_message'); ?>
    </div>
</div>
<?php endif;?>

<div>
    <a href="<?php echo base_url(); ?>Usuario/new">
        <button style="float:right;" type="button" class="btn btn-outline-success">
            Agregar &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </button>
    </a>
</div>
<hr>
<table id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Propietario</th>
            <th>Rol</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $cnt = 1;foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->propietario; ?></td>
            <td><?php echo ($usuario->rol == 1) ? 'Administrador' : 'empleado'; ?></td>
            <td>
                <center><button type="button" class="btn btn-outline-warning">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                </center>
            </td>

        </tr>
        <?php $cnt++;endforeach;?>
    </tbody>
</table>

<div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-example-modal-lg" role="dialog"
    tabindex="-1" id="exampleModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top:50px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Actualizar datos del Usuario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">
                        &times;</span></button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>