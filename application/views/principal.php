<?php 
  /**
   * Dashboard de Natillapp
   * Autor: Jorge Eliécer Muñoz Herrera
   * Github: http://bit.ly/GitJorge
   * 2018
   */
  ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("includes/metaHeader.php");?>
    <title>DashBoard Natillapp</title>
    <?php include("includes/cssFiles.php");?>
  </head>
<body class="fixed-header dashboard menu-pin menu-behind">
    <!-- BEGIN SIDEBPANEL-->
    <?php include("includes/menuBar.php");?>
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
<div class="page-container ">
    <!-- START HEADER -->
    <?php include("includes/menuHeader.php");?>
    <!-- END HEADER -->

    <!-- START PAGE CONTENT WRAPPER -->
    <?php include("includes/contentWrapper.php");?>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<!-- END QUICKVIEW-->
<?php include("includes/quickView.php");?>
    <!--START QUICKVIEW -->

    <!-- START OVERLAY -->
    <?php include("includes/overlay.php");?>
    <!-- END OVERLAY -->
<!-- BEGIN JS -->
<?php include("includes/jsFiles.php");?>
<?php include("includes/jsDashboard.php");?>
<!-- END JS -->
</body>