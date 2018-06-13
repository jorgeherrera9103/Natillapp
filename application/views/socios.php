<?php
/**
   * Vista del Socio de Natillapp
   * Autor: Jorge Eliécer Muñoz Herrera
   * Github: http://bit.ly/GitJorge
   * 2018
   */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/metaHeader.php");?>
    <title>DashBoard Natillapp</title>
    <?php include("includes/cssFiles.php");?>
<?php
if (isset($css_files)) { 
  foreach ($css_files as $rutascss) {
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $rutascss?>">
    <?php  
  }
}
?>
</head>
<body class="fixed-header menu-pin menu-behind">
    <!-- BEGIN SIDEBPANEL-->
    <?php include("includes/menuBar.php");?>
    <!-- END SIDEBPANEL-->
     <!-- START PAGE-CONTAINER -->
     <div class="page-container ">
        <!-- START HEADER -->
    <?php include("includes/menuHeader.php");?>
    <!-- END HEADER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>./principal">Natillapp</a></li>
                  <li class="breadcrumb-item active">Socios Natillapp</li>
                </ol>
                <!-- END BREADCRUMB -->
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <?php echo $tabla ?>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2017 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    </div>
    <!-- END PAGE CONTAINER -->

<?php include("includes/jsFiles.php");?>
<?php 
if (isset($js_files)) {
  foreach ($js_files as $rutasjs) {
    ?>
    <script type="text/javascript" src="<?php echo $rutasjs;?>"></script>
    <?php
  }
}
?>
  </body>
</html>







