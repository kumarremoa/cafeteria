<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<!-- Mirrored from www.ansonika.com/quickfood/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Sep 2018 04:39:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Salarlsuvidha">
    <title>Saral suvidha | food delivery</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url();?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144x144-precomposed.png">
    
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>css/base.css" rel="stylesheet">
    
      <script src="<?php echo base_url();?>js/modernizr.js"></script> 
       <link href="<?php echo base_url();?>css/skins/square/grey.css" rel="stylesheet">
    

    <link href="<?php echo base_url();?>css/slider-pro.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/admin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/dropzone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
     <link href="<?php echo base_url();?>css/skins/square/grey.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/ion.rangeSlider.skinFlat.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>css/date_time_picker.css" rel="stylesheet">
    <style type="text/css">
        .add_to_basket{ cursor:pointer; }

    .dot {
    height: 25px;
    width: 25px;
    padding-left: 5px;
    background-color: #bbb;
    border-radius: 20%;
    display: inline-block;
    color: red;
}
    </style>
 
</head>

<body>
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
    <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index-2.html" id="logo">
                <img src="<?php echo base_url();?>img/download.jpeg" width="100" height="23" alt="" data-retina="true" class="hidden-xs">
                <img src="<?php echo base_url();?>img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="<?php echo base_url();?>img/download.jpeg" width="100" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                <ul>
                    <li>
                    <a href="<?php echo base_url();?>">Home</a>
                    </li>
                    
                    <li>
                    <a href="<?php echo base_url('restaurants')?>">Restaurants</a>
                    
                    </li>
                    <li><a href="<?php echo base_url();?>about.html">About us</a></li>
                    
                    <?php if($this->session->userdata('name')!=''){?>
                    <li class="submenu">
                    <a href="javascript:void(0);" style="color: red;" class="show-submenu"> <?php echo $this->session->userdata('name');?></a>
                        <ul>
                            <li>Logout</li>
                            <li>Profile</li>
                        </ul>
                    </li>
                      <?php }else{?>
                        <li>
                        <a href="#0" data-toggle="modal" data-target="#register"> Register</a>
                        </li>
                        <li>
                            <a href="#0" data-toggle="modal" data-target="#login_2"> Login</a>
                         </li>
                      <?php }?>
            
                    <li class="submenu">
                    <a href="javascript:void(0);" style="color: red; margin-right: 40px;" class="show-submenu">Cart(<span id="productvaluess"></span>)<i class=" icon_cart_alt"></i></a>
                    <ul>
                    <li>
                        <?php if($this->cart->contents()==''){?>
                        <a style=" margin-right: 40px;" href="#"> 0</a>
                        <?php }else{?>
                        <a style=" margin-right: 40px;" href="<?php echo base_url('product/cart');?>"> <i class="icon_cart_alt lg  dot"></i><span class="colror fa fa-circle-thin dot" id="productvalues"></a>
                        <?php }?>
                    </li>
                   
                    </ul>
                    </li>
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
      <!-- End Header =============================================== -->
