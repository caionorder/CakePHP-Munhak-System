<?php
$cakeDescription = __d('cake_dev', 'Sistema Administrativo');
$cakeVersion = __d('cake_dev', 'Munhak %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title'); ?>
  </title>
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <?php 
        echo $this->Html->css(
            array(
                'bootstrap.min',
                'style.min',
                'retina.min'
                )
            );
        echo $this->Html->css('print',null,array('media'=>'print'));
        ?>
        <!-- end: CSS -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>        
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <?php echo $this->Html->script('respond.min'); ?>
        <![endif]-->


        <!-- start: JavaScript-->

        <!--[if !IE]>-->
        <?php echo $this->Html->script('jquery-2.0.3.min'); ?>
        <!--<![endif]-->

        <!--[if IE]>     
        <?php echo $this->Html->script('jquery-1.10.2.min'); ?>
        <![endif]-->

        <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='/sistema/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <!--<![endif]-->

        <!--[if IE]>      
          <script type="text/javascript">
          window.jQuery || document.write("<script src='/sistema/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
          </script>
        <![endif]-->

        <?php 
            echo $this->Html->script(
                array(
                        'jquery-migrate-1.2.1.min',
                        'bootstrap.min',
                        'jquery.maskedinput.min',
                        'jquery-ui-1.10.3.custom.min',
                        'jquery.ui.touch-punch.min',
                        'custom.min',
                        'core.min',
                        'pages/index'

                    )
            ); 
        ?>  


</head>
<body>
<?php if((AuthComponent::user('id'))){ ?>
    <!-- start: Header -->
        <header class="navbar">
            <div class="container">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="main-menu-toggle" class="hidden-xs open"><i class="icon-reorder"></i></a>    
                <a class="navbar-brand col-md-2 col-sm-1 col-xs-2" href="#"><span>Munhak</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav"></div>
                <!-- end: Header Menu -->
            </div>  
        </header>
        <!-- end: Header -->
<?php } ?>
    <div class="container">
            <div class="row">