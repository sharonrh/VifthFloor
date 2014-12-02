<html>
	<head>
		<title>Add Latest News</title>
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
                $("header").load("header-dashboard.html");
            });
        </script>
		<?php 
		foreach($css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
	</head>

	<body>
<!--
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-1.11.1.js>"</script>
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-ui.min.js>"</script>

		<!-- production
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/plupload.full.min.js>"</script>
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js>"</script>

		<div id="uploadBox" title="UploadBox"></div> -->
        <div id="container">
            <header></header>
            <div id="main">
                <div id="jumlah-donasi">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="add">
                            	<?php echo form_open('game/addNew'); ?>
                                <h1>Add Showcase</h1>
                                <form role="form">
                                  <div class="form-group">
                                    <label for="title">Judul</label>
                                    <?php echo form_input('title');?>
                                  </div>
                                  <div class="form-group">
                                    <label for="content">Showcase Content</label>
                                    <?php echo form_textarea('desc');?>
                                  </div>
                                  <div class="form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" id="thumbnail">
                                    <p class="help-block">Silahkan pilih gambar untuk thumbnail showcase</p>
                                  </div>
                                  <div class="form-group">
                                  	<label for="releasedDate">Released Date</label>
                                  	<?php echo form_input('date');?>
                                  </div>
                                  <div class="form-group">
                                  	<label for="availOn">Available On</label>
                                  	<?php echo form_input('avail');?>
                                  </div>
                                  <div class="form-group">
                                    <label for="gambarBerita">Gambar Utama Showcase</label>
                                    <input type="file" id="gambarBerita">
                                    <p class="help-block">Silahkan pilih gambar utama showcase</p>
                                  </div>

                                  <?php echo form_submit('submit', 'Save','id="submit"') ?>
                                  <?php echo form_close();?>
								  
								  <?php echo $output; ?>
                            </div>
                            </div>
                     </div>
                </div>
            </div>
            
        </div>

		<a href="http://localhost/CI/index.php/login/logout">Logout</a>
	</body>
	<footer></footer>
</html>