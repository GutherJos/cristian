<?php // var_dump($usuarios);?>

<?php if ($this->session->flashdata('flash_message') != ""): ?>
<div class="col-md-12">
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('flash_message'); ?>
    </div>
</div>
<?php endif;?>

<div>
    <a href="#" onclick="showAjaxModal('<?php echo base_url(); ?>Usuario/new/');">
        <button style="float:right;" type="button" class="btn btn-outline-warning">
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
            <td><?php echo ($usuario->rol == 1) ? 'Administrador' : 'Gerente'; ?></td>
            <td>
                <center>
                    <a href="#"
                        onclick="showAjaxModal('<?php echo base_url(); ?>Usuario/update/<?php echo $usuario->id_usuario; ?>');">
                        <button type="button" class="btn btn-outline-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </a>

                    &nbsp; &nbsp;

                    <a onClick="return confirm('Seguro desea eliminar el Usuario?')"
                        href="<?php echo base_url(); ?>Usuario/delete/<?php echo $usuario->id_usuario; ?>">
                        <button type="button" class="btn btn-outline-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </a>
                </center>
            </td>

        </tr>
        <?php $cnt++;endforeach;?>
    </tbody>
</table>
<script>
function showAjaxModal(url) {

    jQuery('#exampleModal').modal('show', {
        backdrop: 'true'
    });
    $.ajax({
        url: url,
        success: function(response) {
            jQuery('#exampleModal .modal-body').html(response);
        }
    });
}
</script>