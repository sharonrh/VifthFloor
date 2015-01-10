
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href=<?php echo base_url("assets/css/style.css");?> rel="stylesheet" media="screen">
        <link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
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
            <header class="margin-bottom-30">
                <?php $this->load->view('header'); ?>
            </header>
            <div id="main">
                <div id="jumlah-donasi">
                    <div class="md-col-12">
                        <div id="login">
                            <h1 class="judul">Login</h1>
                            <div class="login-content">
                            	<?php $attr = array('class' => 'navbar-form navbar-left login-form', 'role'=>'search');?>
                                <?php echo form_open('login/check', $attr); ?>
                                  <div class="form-group">

									<?php $name=array('name'=>'name','placeholder'=>'Username', 'class'=>'form-control login-form-text');?>
                                    <?php echo form_input($name);?>

                                    <br class="top-10"></br>

                                    <?php $pass=array('name'=>'password','placeholder'=>'Password', 'class'=>'form-control');?>
                                    <?php echo form_input($pass);?>
                                    
                                  </div>
                                  <br class="top-10"></br>

                                  <?php $submit=array('type'=>'submit','value'=>'Login', 'id'=>'submit', 'class'=>'btn btn-default');?>
                                  <?php echo form_submit($submit) ?>
                                  
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
