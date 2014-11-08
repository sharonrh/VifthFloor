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
    	<?php $this->load->view('header'); ?>
        <div id="container">
            <header class="margin-bottom-30"></header>
            <div id="main-container">
                <div class="container">
                    <div class="news-title margin-bottom-50">
                        <h1>NEWS</h1>
                    </div>
                    <?php foreach ($records as $row): ?>
                    <div class="row margin-bottom-30">
                        <div class="col-sm-3">
                            <img class="img-responsive" src="../../assets/images/icon1.png">
                        </div>
                        <div class="col-sm-9 news-content">
                            <h2><a href="news-details.html"><?php echo $row->Title; ?></a></h2>
                            <p>
                            	<?php $short = $row->Content; 
								$short=character_limiter($short,100);?>
								<?php echo $short;?>
							</p>
                            <a href="<?php echo base_url();?>/index.php/news/view/<?php echo $row->Id;?>" class="read-more-link">Read More</a>
                        </div>
                    </div>
					<?php endforeach; ?>
			                    
                    <div class="text-center">
                        <ul class="pagination">
                            <?php echo $page;?>
                        </ul>
                    </div>
                </div>
            </div>
            <footer>
                    <?php $this->load->view('footer'); ?>
            </footer>
        </div>
    </body>
</html>
