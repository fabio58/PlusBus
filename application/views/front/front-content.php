<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>PlusBusiness</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/layout/styles/layout.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap-theme.min.css" type="text/css" />


        <script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap-dropdown.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet"/> 
        <link href="https://fonts.googleapis.com/css?family=Molengo|Nothing+You+Could+Do" rel="stylesheet"/> 
        <style type="text/css">
            #breadcrumb li a{
                background-color: transparent !important;
                color:#fff;
            }
            #topnav ul li a{
                font-family: 'Molengo', sans-serif;
                font-size: 15px;
            }
            .contacto p{
                font-family: 'Molengo', sans-serif;
            }
            h1,h2,h3{
                font-family: 'Molengo', sans-serif !important;
            }
            .nav {
                font-size: 16px;
                height: 54px;
                list-style: outside none none;
                margin-bottom: 0;
                margin-top: 46px;
                padding-left: 0;
                overflow: unset;
            }
            .active a{
                font-family: 'Molengo', sans-serif !important;
                border: 1px #b2c629 dashed !important;
                background-color: #B2C629 !important;
                color: #fff!important;
            }
        </style>
    </head>
    <body id="top">
        <!-- ####################################################################################################### -->
        <div class="row">
            <div class="col-md-2">
                <a style="float: right;" href="http://www.plusmedia.com.py"><img src="<?php echo base_url() ?>public/images/logoPlus.png" width="100px"/></a>

            </div>
            <div class="col-md-10" style="z-index: 2">
                <ul class="nav nav-tabs"  role="tablist">
                    <li class="<?= (current_url() == base_url()) ? 'active' : '' ?>">
                        <a href="<?php echo base_url() ?>"><span style="font-size: 12px" class=" glyphicon glyphicon-list"></span> Home</a>
                    </li>
                    <li class="<?= (current_url() == base_url('paginas-web')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web') ?>"><span style="font-size: 12px" class="glyphicon glyphicon-globe"></span> Sitios Web</a></li>
                    <li class="<?= (current_url() == base_url('software')) ? 'active' : '' ?>"><a href="<?php echo base_url('software') ?>"><span style="font-size: 12px" class=" glyphicon glyphicon-wrench"></span> Software</a></li>
                    <li class="dropdown" id="menu1">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                            <span style="font-size: 12px" class="glyphicon glyphicon-globe"></span> Paginas Web
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?= (current_url() == base_url('paginas-web')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web') ?>">Desarrollo de Paginas Web</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>


        <!-- ####################################################################################################### -->
        <div class="wrapper col2" style="z-index: 1">
            <div id="breadcrumb">
                <?php echo $this->breadcrumbs->show(); ?>

            </div>
        </div>
        <!-- ####################################################################################################### -->
        <?php $this->load->view($content) ?>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; <?php echo date("Y") ?> - All Rights Reserved - <a href="http://www.plusmedia.com.py">www.plusmedia.com.py</a></p>

                <br class="clear" />
            </div>
        </div>
    </body>
</html>