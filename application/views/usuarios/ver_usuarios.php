<?php // var_dump($usuarios);?>
<div>
    <button style="float:right;" type="button" class="btn btn-outline-success">
        Agregar &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </button>
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