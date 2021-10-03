<form action="<?php echo base_url(); ?>usuario/do_create" method="post" autocomplete="off">

    <div class="row">
        <div class="col-sm-6">
            <label for="">Nombre de usuario</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="col-sm-4">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" id="contra" name="contra">
        </div>
        <div class="col-sm-2">
            <button onclick="mostrarContrasena()" type="button" class="btn btn-info" style="margin-top: 30px"">
                <i id=" icono" class="fa fa-eye" aria-hidden="true"></i>
            </button>
        </div>
        <div class="col-sm-6">
            <label for="">Propietario</label>
            <input type="text" class="form-control" name="duenio">
        </div>
        <div class="col-sm-6 col-xs-12">
            <label for="">Rol</label>
            <select name="rol" id="" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Gerente</option>
            </select>
        </div>
        <div class="col-sm-12">
            <button style="float:right; margin-top:30px; margin-bottom:20px" type="submit"
                class="btn btn-success">Guardar</button>
        </div>
    </div>

</form>

<script>
function mostrarContrasena() {
    var tipo = document.getElementById("contra");
    var icono = document.getElementById("icono");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}
</script>