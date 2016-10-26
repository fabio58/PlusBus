<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $descri ?>"/>
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
                        <?php $this->load->view('front/menu'); ?>
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