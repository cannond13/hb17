<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Main</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-xs-3">

      <?php $this->load->view('users/login_view'); ?>

  </div>
  <div class="col-xs-9">

    <?php $this->load->view($main_view); ?>

  </div>
</div>

</body>
</html>
