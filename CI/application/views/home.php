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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>
      <body>
        <div id="container" class="home-container">
            <header id="header-home">
                <?php $this->load->view('header'); ?> 
            </header>
            <div id="headlineCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#headlineCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#headlineCarousel" data-slide-to="1"></li>
                    <li data-target="#headlineCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner">
                       <!-- <?php $count=0; ?>
                            <?php foreach ($slides as $row): ?>

                                <?php if ($count==0) :?>
                                    <div class="item active">
                                        <img class="img-responsive" src=<?php echo base_url();?>/assets/uploads/<?php echo $row->Location;?> alt="">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                
                                <?php else: ?>
                                    <div class="item">
                                        <img class="img-responsive" src=<?php echo base_url();?>/assets/uploads/<?php echo $row->Location;?> alt="">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                <?php endif;?>
                                
                                <?php $count++; ?>

                            <?php endforeach; ?>  -->
                            <div class="item active">
                                <img class="img-responsive" height ="100px" src="<?php echo base_url();?>/assets/images/satu.jpg" alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" height ="100px" src="<?php echo base_url();?>/assets/images/dua.jpg" alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" height ="100px" src="<?php echo base_url();?>/assets/images/tiga.jpg" alt="">
                                <div class="carousel-caption">
                                </div>
                            </div>          
                            
                        </div>
                    </div>

                    <div id="latest-news">
                        <div class="row">

                            <div class="col-sm-11">
                                <div class="row">
                                    <?php foreach ($news as $row): ?>
                                        <div class="col-sm-3 padding-left-15 padding-right-5">
                                            <figure class="cap-top">
                                                <a href="<?php echo site_url();?>/news/view/<?php echo $row->Id;?>" class="thumbnail">
                                                    <img src="<?php echo base_url();?>/assets/uploads/newsThumbnail/<?php echo $row->Thumbnail;?>"/>
                                                    <div class="slide-caption">
                                                        <p class="isi-caption"><?php echo $row->Title;?></p>
                                                    </div>
                                                </a>
                                            </figure>
                                        </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box-information-index">
                                            <div class="view-more">
                                                <a href=<?php echo site_url("news");?>>More<br/>News</a>
                                            </div>
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
