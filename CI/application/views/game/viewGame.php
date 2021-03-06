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
        <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" media="screen"/>
        <script src=<?php echo base_url("assets/js/jquery-latest.min.js");?> type="text/javascript"></script>
        <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js");?>></script>
        <script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap-lightbox.js");?>></script>

        <!-- Add fancyBox -->
        <link href=<?php echo base_url("assets/fancybox/source/jquery.fancybox.css?v=2.1.5");?> rel="stylesheet" media="screen"/>
        
        <script type="text/javascript" src=<?php echo base_url("assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5");?>></script>
        <script type="text/javascript" src=<?php echo base_url("assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5");?>></script>
        <script type="text/javascript" src=<?php echo base_url("assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6");?>></script>
        <script type="text/javascript" src=<?php echo base_url("assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7");?>></script>
        

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link href=<?php echo base_url("assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5");?> rel="stylesheet" media="screen"/>
        <link href=<?php echo base_url("assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7");?> rel="stylesheet" media="screen"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
    
                    helpers: {
                        overlay: {
                            locked: false
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <header id="header-game" class="margin-bottom-30">
                <?php $this->load->view('header'); ?>
            </header>
            <div id="main">
                <div class="game-image">
                    <img class="img-responsive" src="<?php echo base_url();?>/assets/uploads/gameHeader/<?php echo $header;?>">
                </div>
                <div class="game-about">
                    <p> 
                        <?php echo $description;?>
                    </p>

                </div>
                
                
                    <div class="game-screenshot">
                        <div class="row atas">
                            <?php foreach ($images as $row): ?>
                            <div class="col-md-6">
                            
                                <a class="fancybox" href="<?php echo base_url();?>/assets/uploads/<?php echo $row->Location;?>" >
                                    <img class="img-responsive" src="<?php echo base_url();?>/assets/uploads/<?php echo $row->Location;?>"/>
                                </a>                            
                            </div>
                            
                            <?php endforeach; ?>
                        </div>

                    
                    </div>
                    
        </div>
        <div class="game-available">
                    
        </div>
        <footer>
            <?php $this->load->view('footer'); ?>
        </footer>
        </div>
    </body>
</html>
