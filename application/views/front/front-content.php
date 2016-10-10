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
<link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap-responsive.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.jcarousel.setup.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
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
</style>
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
        <a href="http://www.plusmedia.com.py"><img src="<?php echo base_url() ?>public/images/logoPlus.png" /></a>
      
    </div>
    <div id="topnav">
      <ul>
          <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
          <li><a href="<?php echo base_url('paginas-web') ?>">Sitios Web</a></li>
        <li><a href="#">Software</a>
         <ul>
            <li><a href="<?php echo base_url('software/facturacion')?>">Sistemas de Facturacion</a></li>
            <li><a href="#">Sistemas de Stock</a></li>
            <li><a href="#">Dispositivos Moviles</a></li>
          </ul>
        </li>
       
        <li><a href="#">DropDown</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">A Long Link Text</a></li>
      </ul>
        <div class="contacto" style="text-align: right"> 
            <p>
            Email: info@plusmedia.com.py <br/>
            Cel: <img style="float: right" src="public/images/wassapp.png" width="25px" alt="" /> 0984 648 733<br/>
            Tel: 021 3388655
            </p>
        </div>
    </div>
      
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
      <?php  echo $this->breadcrumbs->show(); ?>

  </div>
</div>
<!-- ####################################################################################################### -->
<?php $this->load->view($content) ?>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>A Little Company Information !</h2>
      <img class="imgl" src="<?php echo base_url() ?>public/images/demo/imgl.gif" alt="" />
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue</p>
      <p>Portortornec condimenterdum eget consectetuer condis.</p>
    </div>
    <div class="box contactdetails">
      <h2>Our Contact Details !</h2>
      <ul>
        <li>Company Name</li>
        <li>Street Name &amp; Number</li>
        <li>Town</li>
        <li>Postcode/Zip</li>
        <li>Tel: xxxxx xxxxxxxxxx</li>
        <li>Fax: xxxxx xxxxxxxxxx</li>
        <li>Email: info@domain.com</li>
        <li class="last">LinkedIn: <a href="#">Company Profile</a></li>
      </ul>
    </div>
    <div class="box flickrbox">
      <h2>Latest Flickr Images !</h2>
      <div class="wrap">
        <div class="fix"></div>
        <div class="flickr_badge_image" id="flickr_badge_image1"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="<?php echo base_url() ?>public/images/demo/80x80.gif" alt="" /></a></div>
        <div class="fix"></div>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>