<!DOCTYPE html>
<html lang="en" class="app">
    <head>  
        <meta charset="utf-8" />
        <title>ADEL | Membros</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

        <script type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/adel/css/matrix-style.css" />
        <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/icon.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/font.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/css/app.css" type="text/css" />  
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/js/datepicker/datepicker.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/js/slider/slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/js/chosen/chosen.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/js/spinner/jquery.bootstrap-touchspin.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adel/js/typehead/typehead.css" type="text/css" />

        <!--[if lt IE 9]>
          <script src="js/ie/html5shiv.js"></script>
          <script src="js/ie/respond.min.js"></script>
          <script src="js/ie/excanvas.js"></script>
        <![endif]-->
    </head>
    <body class="" >
        <section class="vbox">
            <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
                <div class="navbar-header aside-md dk">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="<?php echo base_url(); ?>" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>assets/adel/images/logo.png" class="m-r-sm" alt="scale">
                        <span class="hidden-nav-xs">ADEL</span>
                    </a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                        <i class="fa fa-cog"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control input-sm no-border" placeholder="Buscar Membro">            
                        </div>
                    </div>
                </form>
            </header>
            <section>
                <section class="hbox stretch">
                    <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">          
                        <section class="vbox">
                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                    <div class="clearfix wrapper dk nav-user hidden-xs">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="thumb avatar pull-left m-r">                        
                                                    <img src="<?php echo base_url(); ?>assets/adel/images/a0.png" class="dker" alt="...">
                                                    <i class="on md b-black"></i>
                                                </span>
                                                <span class="hidden-nav-xs clear">
                                                    <span class="block m-t-xs">
                                                        <strong class="font-bold text-lt">Leidiane</strong> 
                                                        <b class="caret"></b>
                                                    </span>
                                                    <span class="text-muted text-xs block">Secretaria</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>                


                                    <!-- nav -->                 
                                    <nav class="nav-primary hidden-xs">
                                        <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Iniciar</div>
                                        <ul class="nav nav-main" data-ride="collapse">
                                            <li >
                                                <a href="<?php echo base_url(); ?>" class="auto">
                                                    <i class="i i-statistics icon">
                                                    </i>
                                                    <span class="font-bold">Home</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                   
                                                    <i class="i i-stack icon">
                                                    </i>
                                                    <span class="font-bold">Cadastros</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li >
                                                        <a href="<?php echo base_url(); ?>index.php/membros/" class="auto">                                                        
                                                            <i class="i i-dot"></i>

                                                            <span>Membro</span>
                                                        </a>
                                                    </li>
                                                    <li >
                                                        <a href="<?php echo base_url(); ?>index.php/apresentacao/" class="auto">                                                        
                                                            <i class="i i-dot"></i>

                                                            <span>Recem Nacidos</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li >
                                                <a href="#" class="auto">
                                                    <span class="pull-right text-muted">
                                                        <i class="i i-circle-sm-o text"></i>
                                                        <i class="i i-circle-sm text-active"></i>
                                                    </span>
                                                   
                                                    <i class="i i-stack icon">
                                                    </i>
                                                    <span class="font-bold">Relatorios</span>
                                                </a>
                                                <ul class="nav dk">
                                                    <li >
                                                        <a href="<?php echo base_url(); ?>index.php/membros/relatorioGeral/" class="auto">                                                        
                                                            <i class="i i-dot"></i>

                                                            <span>Geral</span>
                                                        </a>
                                                    </li>
                                                    <li >
                                                        <a href="<?php echo base_url(); ?>index.php/membros/relatorioPorCargo" class="auto" target="_blank">                                                        
                                                            <i class="i i-dot"></i>

                                                            <span>Por Cargo</span>
                                                        </a>
                                                    </li>
                                                    <li >
                                                        <a href="<?php echo base_url(); ?>index.php/membros/relatorioAniversariantes" class="auto" target="_blank">                                                        
                                                            <i class="i i-dot"></i>

                                                            <span>Aniversariantes Mês</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>



                                        </ul>
                                        <div class="line dk hidden-nav-xs"></div>



                                    </nav>
                                    <!-- / nav -->
                                </div>
                            </section>

                            <footer class="footer hidden-xs no-padder text-center-nav-xs">
                                <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                                    <i class="i i-logout"></i>
                                </a>
                                <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                                    <i class="i i-circleleft text"></i>
                                    <i class="i i-circleright text-active"></i>
                                </a>
                            </footer>
                        </section>
                    </aside>
<section>
                        <section class="hbox stretch">
                            <section id="content">
                                <section class="vbox">
                                    <section class="scrollable padder">
                                        
                                        <?php if ($this->session->flashdata('error') != null) { ?>
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <?php echo $this->session->flashdata('error'); ?>
                                            </div>
                                        <?php } ?>

                                        <?php if ($this->session->flashdata('success') != null) { ?>
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($view)) {
                                            echo $this->load->view($view);
                                        } ?>
                                    </section>
                                </section>
                                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                            </section>
                        </section>
                    </section>


                </section>
            </section>
        </section>

        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/adel/js/bootstrap.js"></script>
        <!-- App -->
        <script src="<?php echo base_url(); ?>assets/adel/js/app.js"></script>  
        <script src="<?php echo base_url(); ?>assets/adel/js/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adel/js/charts/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adel/js/app.plugin.js"></script>
        
        

        
    </body>
</html>