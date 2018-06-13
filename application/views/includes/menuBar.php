<?php 
  /**
   * MenuBar del Dashboard de Natillapp
   * Autor: Jorge Eliécer Muñoz Herrera
   * Github: http://bit.ly/GitJorge
   * 2018
   */
  ?>
<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url();?>assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url();?>assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url();?>assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url();?>assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo base_url();?>assets/img/natillapp_logo.svg" alt="logo" class="brand" data-src="<?php echo base_url();?>assets/img/natillapp_logo.svg" data-src-retina="<?php echo base_url();?>assets/img/natillapp_logo.svg" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="<?php echo base_url();?>./principal"class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 Actualizaciones</span>
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>



          <li>
            <a href="javascript:;"><span class="title">Socios</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-grid"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo base_url();?>./Socios">Listado Socios</a>
                <span class="icon-thumbnail">L S</span>
              </li>
              <li class="">
                <a href="<?php echo base_url();?>./Socios/index/add">Nuevo Socio</a>
                <span class="icon-thumbnail">N S</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Cuotas</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo base_url();?>./Cuota">Listado Cuotas</a>
                <span class="icon-thumbnail">L S</span>
              </li>
              <li class="">
                <a href="<?php echo base_url();?>./Cuota/index/add">Nueva Cuota</a>
                <span class="icon-thumbnail">N S</span>
              </li>
            </ul>
          </li>

            <li>
            <a href="javascript:;"><span class="title">Préstamos</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="fa fa-money"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo base_url();?>./Prestamo">Listado Préstamos</a>
                <span class="icon-thumbnail">L S</span>
              </li>
              <li class="">
                <a href="<?php echo base_url();?>./Prestamo/index/add">Nuevo Prestamo</a>
                <span class="icon-thumbnail">N S</span>
              </li>
            </ul>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->