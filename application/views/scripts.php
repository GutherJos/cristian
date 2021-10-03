<?php if ($this->session->flashdata('flash_message') != ""): ?>
<script type="text/javascript">
toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
</script>
<?php endif;?>
<script src="https://kit.fontawesome.com/d528b1e4fb.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/scripts/main.8d288f825d8dffbbe55e.js">
</script>