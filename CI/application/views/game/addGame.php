<html>
	<head>
		<title>Game - Dashboard</title>
		<meta charset="UTF-8">
         <meta name="viewport" content="width=device-width">
        <!-- Bootstrap -->
        <link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
        <script src=<?php echo base_url("js/jquery-latest.min.js");?> type="text/javascript"></script>
        <script type="text/javascript" src=<?php echo base_url("js/bootstrap.js");?>></script>
  		<script type="text/javascript" src=<?php echo base_url("application/third_party/tinymce/js/tinymce/tinymce.min.js");?>></script>
  		<script type="text/javascript">
  		tinymce.init({
  		    selector: "textarea",
  		    plugins: [
  		        "advlist autolink lists link image charmap preview anchor",
  		        "searchreplace visualblocks fullscreen",
  		        "insertdatetime media table contextmenu paste"
  		    ],
  		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
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
		<div id="container">
            <header>
        		<?php $this->load->view('admin/header-dashboard'); ?>
            </header>
            <div id="main">
                <div id="jumlah-donasi">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="add">
                                <h1>Add Showcase</h1>
                                <?php echo form_open_multipart('game/addNew', array('role' => 'form')); ?>
                                  <div class="form-group">
                                    <label for="title">Judul</label>
                                    <?php echo form_input(array('name' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter Title'));?>
                                  </div>
                                  <div class="form-group">
                                    <label for="desc">Showcase Content</label>
                                    <?php echo form_textarea(array('name' => 'desc', 'class' => 'form-control', 'rows' => '5'));?>
                                  </div>
                                  <div class="form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <?php echo form_upload('thumbnail'); ?>
                                    <p class="help-block">Silakan pilih gambar untuk thumbnail showcase</p>
                                  </div>
                                  <div class="form-group">
                                    <label for="gambarBerita">Gambar Utama Showcase</label>
                                    <?php echo form_upload('gambarBerita'); ?>
                                    <p class="help-block">Silakan pilih gambar utama showcase</p>
                                  </div>
                                  <div class="form-group">
<!--                                     <label class="col-md-3" for="screenshot1">Screenshot 1:</label>
                                    <input class="col-md-9" type="file" id="screenshot1">
                                    <label class="col-md-3" for="screenshot2">Screenshot 2:</label>
                                    <input class="col-md-9" type="file" id="screenshot2">
                                    <label class="col-md-3" for="screenshot3">Screenshot 3:</label>
                                    <input class="col-md-9" type="file" id="screenshot3">
                                    <label class="col-md-3" for="screenshot4">Screenshot 4:</label>
                                    <input class="col-md-9" type="file" id="screenshot4">
 -->                                  </div>
                                  <?php echo form_submit('submit', 'Save','id="submit"'); ?>
                            	<?php echo form_close();?>
                            	<?php echo $output; ?>
                            </div>
	                    </div>
                    </div>
                </div>
            </div>
            <footer></footer>
        </div>

<!--
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-1.11.1.js>"</script>
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-ui.min.js>"</script>

		<!-- production
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/plupload.full.min.js>"</script>
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js>"</script>

		<div id="uploadBox" title="UploadBox"></div> -->

		<a href="http://localhost/CI/index.php/login/logout">Logout</a>
	</body>
</html>