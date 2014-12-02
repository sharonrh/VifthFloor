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
                    <div class="news-detail">
                        <div class="news-detail-title margin-bottom-30">
                            <h1><?php echo $title;?></h1>
                            <p class="posted"><?php echo $pubDate;?></p>
                        </div>

                        <article>
                            <?php echo $content;?>
                        </article>

                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('footer'); ?>
        </div>
    </body>
</html>
