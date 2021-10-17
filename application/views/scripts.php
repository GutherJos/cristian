   <!--------------------------------SCRIPT MODAL---------------------------------------------------->




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"
       integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/d528b1e4fb.js" crossorigin="anonymous"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/scripts/main.8d288f825d8dffbbe55e.js">
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toastr.js">
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets2/scripts/toastr.js">
   </script>
   <?php if ($this->session->flashdata('flash_message') != ""): ?>
   <script type="text/javascript">
toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
   </script>
   <?php endif;?>
   <?php if ($this->session->flashdata('flash_error') != ""): ?>
   <script type="text/javascript">
toastr.error('<?php echo $this->session->flashdata("flash_error"); ?>');
   </script>
   <?php endif;?>
   <?php if ($this->session->flashdata('flash_warning') != ""): ?>
   <script type="text/javascript">
toastr.info('<?php echo $this->session->flashdata("flash_warning"); ?>');
   </script>
   <?php endif;?>