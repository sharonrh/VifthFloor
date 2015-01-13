<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
        <script src=<?php echo base_url("js/jquery-latest.min.js");?> type="text/javascript"></script>
        <script type="text/javascript" src=<?php echo base_url("js/bootstrap.js");?>></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="container">
            <header>
                <?php $this->load->view('header'); ?>
            </header>
            <div id="main">
                <div id="dashboard">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="list">
                                <h1>Dashboard</h1>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <a href=<?php echo site_url("dashboard/game");?>>
                                        <div class="kotak">Showcase</div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href=<?php echo site_url("dashboard/game/new");?> class="btn btn-default navbar-btn">Add Showcase</a>
                                </div>
                                <div class="col-md-4">
                                    <a href=<?php echo site_url("dashboard/game/slider");?> class="btn btn-default navbar-btn">Change Slider</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <a href=<?php echo site_url("dashboard/news");?>>
                                        <div class="kotak">News</div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href=<?php echo site_url("dashboard/news/new");?> class="btn btn-default navbar-btn">Add News</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <a href=<?php echo site_url("dashboard/donasi");?>>
                                        <div class="kotak">Update Donasi</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
