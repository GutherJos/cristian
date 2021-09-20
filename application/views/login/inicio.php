<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesion</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="row" style="border-style: solid; border-radius: 20px; margin: 50px 150px 50px 150px; padding: 50px;">
		<form action="<?php echo base_url();?>login/auth" method="POST">
			<center><h3>Iniciar Sesion</h3></center>

			<?php if($this->session->flashdata('error')): ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
					  Usuario o contraseñsa incorrecto
					</div>
				</div>
			<?php endif; ?>
			<div class="col-md-12">
				<label>Nombre de usuario:</label>
			<input type="text" class="form-control" name="username">
			</div>
			<div class="col-md-12">
			<label>Contraseña:</label>
			<input class="form-control" type="password" name="pass">
			</div>
			<div class="col-md-12">
				<center><button class="btn btn-info" style="margin-top: 40px" type="submit">Iniciar Sesion</button></center>
			</div>
			
		</form>
	</div>

	<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>