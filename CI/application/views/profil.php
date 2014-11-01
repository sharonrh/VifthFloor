<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Profil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" media="screen">
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
        <?php $this->load->view('header'); ?>   
        <div id="container">
            <header></header>
            <div id="profil-container">
                <div id="about-us" class="row"> 
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="content-about">
                                <h1>About us</h1>
                                <p>
                                    Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                    kepada bangsa Indonesia yang telah menjadi tempat lahir kami.Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati kepada bangsa Indonesia yang telah menjadi tempat lahir kami.
                                    Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                    kepada bangsa Indonesia yang telah menjadi tempat lahir kami.
                                    Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                    kepada bangsa Indonesia yang telah menjadi tempat lahir kami.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gambar-content">
                                <img src=<?php echo base_url("assets/images/Bakuman.jpg");?>>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="team" class="row">
                    <hr class="team-line">
                    <div class="col-md-12 team-content">
                        <img src=<?php echo base_url("assets/images/Bakuman.jpg");?>>
                    </div>
                </div>
                <div id="visimisi" class="row">
                    <div class="col-md-12">
                        <div class="visimisi-content">
                            <div class="col-md-6">
                                <hr class="hr-visi">
                                <div class="visi">
                                    <p>
                                        Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                        kepada bangsa Indonesia yang telah menjadi tempat lahir kami.Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati kepada bangsa Indonesia yang telah menjadi tempat lahir kami.
                                        Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                        kepada bangsa Indonesia yang telah menjadi tempat lahir kami.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <hr class="hr-misi">
                                <div class="misi">
                                    <p>Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                        kepada bangsa Indonesia yang telah menjadi tempat lahir kami.Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati kepada bangsa Indonesia yang telah menjadi tempat lahir kami.
                                        Jadi kami adalah putra putri bangsa yang ingin mengabdi dengan sepenuh hati
                                        kepada bangsa Indonesia yang telah menjadi tempat lahir kami.</p>
                                </div>
                            </div>
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
