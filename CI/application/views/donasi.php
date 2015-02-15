<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Donasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap -->
    <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
    <script src=<?php echo base_url("assets/js/jquery-latest.min.js");?> type="text/javascript"></script>
    <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js");?>></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>
      <body>  
        <div id="container">
            <header id="header-donasi">
                <?php $this->load->view('header'); ?>  
            </header>
            <div id="main-container">
                <div class="donasi-container">
                    <div class="row donasi">
                        <div class="col-md-12 center">
                        <p class="jumlah-donasi">Jumlah donasi sekarang</p>
                            <h1 class="kuantitas-donasi">1.000.000.000</h1>
                            <button type="button" class="button-donasi">
                                Donate via Paypal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <?php $this->load->view('footer'); ?>
            </footer>
        </div>
    </body>
    </html>
