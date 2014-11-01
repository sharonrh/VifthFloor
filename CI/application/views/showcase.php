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
        <link href=<?php echo base_url("assets/css/style.css")?> rel="stylesheet" media="screen">
        <script src=<?php echo base_url("/assets/js/jquery-latest.min.js")?> type="text/javascript"></script>
        <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js")?>></script>
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
            <header class="margin-bottom-30"></header>
            <div id="main-container">
                <div class="container">
                    <h1 id="news" class="margin-bottom-30">SHOWCASE</h1>
                    <div id="featured-games-carousel" class="carousel slide margin-bottom-30" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#featured-games-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#featured-games-carousel" data-slide-to="1"></li>
                            <li data-target="#featured-games-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive" src=<?php echo base_url("assets/images/satu.jpg")?> alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src=<?php echo base_url("assets/images/dua.jpg")?> alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#featured-games-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#featured-games-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                    <?php foreach ($records as $row): ?>

                    <div class="row showcase margin-bottom-50">
                        <div class="col-md-3">
                            <img class="img-responsive" src=<?php echo base_url("assets/images/meh.png")?>>
                        </div>
                        <div class="col-md-9">
                            <div class="game-title">
                                <h2><a href="game.html"><?php echo $row->Title; ?></a></h2>
                            </div>
                        </div>                      
                    </div>
                    <?php endforeach; ?>

                    <div class="text-center">
                        <ul class="pagination">
                            <?php echo $page;?>
                        </ul>
                    </div>
                </div>
                <footer>
                    <?php $this->load->view('footer'); ?>
                </footer>
            </div>
        </div>
    </body>
</html>
