<html>
	<head>
		<title>Login</title>
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
        <script>
            $(function() {
                $("header").load("header-login.html");
            });
        </script>
	</head>

	<!--<body>
		<?php echo form_open('login/check'); ?>

		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo form_input('name');?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo form_password('password');?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Login','id="submit"') ?></td>
			</tr>
		</table>
		</br>

		<?php echo $msg;?>

		<?php echo form_close();?>
	</body>-->

	<body>
        <div id="container">
            <header></header>
            <div id="main">
                <div id="jumlah-donasi">
                    <div class="md-col-12">
                        <div id="login">
                            <h1 class="judul">Login</h1>
                            <div class="login-content">
                            	<?php echo form_open('login/check'); ?>
                                <div class="navbar-form navbar-left login-form" role="search">
                                  <div class="form-group">
                                    <?php echo form_input('name');?>
                                    <br class="top-10"></br>
                                    <?php echo form_password('password');?>
                                  </div>
                                  <br class="top-10"></br>
                                  <?php echo form_submit('submit', 'Login','id="submit"') ?>
                                </div>
                                <?php echo form_close();?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <footer></footer>
        </div>
    </body>
</html>