<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Vifth Floor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" media="screen">
        <script src=<?php echo base_url("assets/js/jquery-latest.min.js");?> type="text/javascript"></script>
        <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js");?>></script>
        <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap-lightbox.js");?>></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php $this->load->view('header'); ?>
        <div id="container">
            <header></header>
            <div id="main">
                <div class="game-image">
                    <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg");?>>
                </div>
                <div class="game-about">
                    <p> 
                        <?php echo $description;?>
                    </p>

                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                    </ul>
                </div>
                <div class="game-screenshot">
                    <div class="row atas">
                        <div class="col-md-6">
                            <a data-toggle="lightbox" href="#demoLightbox">
                                <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg");?>>
                            </a>
                            <div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="lightbox-content">
                                    <img src=<?php echo base_url("assets/images/icon2.png");?>>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg");?>>
                        </div>
                    </div>
                    <div class="row bawah">
                        <div class="col-md-6">
                            <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg");?>>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg");?>>
                        </div>
                    </div>
                </div>
                <div class="game-available">
                    <p>Available On</p>
                </div>
            </div>
            <footer>
                <?php $this->load->view('footer'); ?>
            </footer>
        </div>
    </body>
</html>
