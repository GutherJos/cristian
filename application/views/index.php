<?php 
$titulo_modulo =  $this->session->userdata('titulo_modulo');
$page_name =  $this->session->userdata('page_name');
$folder_name = $this->session->userdata('folder_name');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Educacion | <?php echo $titulo_modulo;?></title>
	<?php include('topcss.php');?>
</head>
<body>

	<?php include('navigation.php');?>

	<div style="border-style: solid; border-radius: 20px; margin: 200px 150px 50px 150px; padding: 30px;">
		
		<center> <h5 class="mb-0" style="align-items: center;"><?php echo $titulo_modulo; ?></h5></center>


		<?php if($folder_name != null){
			include $folder_name . '/' . $page_name . '.php';
		} 
		else{
			include $page_name . '.php';
		}?>

	</div>

	<?php include('scripts.php'); ?>
</body>
</html>