<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $pageTitle; ?> &mdash; SiBorang</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/modules/fontawesome/css/all.min.css'); ?>">

    <!-- CSS Libraries -->    

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <?php $this->load->view('template/header'); ?>

        <div class="main-sidebar sidebar-style-2">
            <?php $this->load->view('template/sidebar'); ?>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?php echo $pageContent; ?>
        </div>
        
        <?php $this->load->view('template/footer'); ?>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo base_url('assets/modules/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/modules/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/stisla.js'); ?>"></script>
    
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->    
    
    <!-- Template JS File -->
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>
