<html>
<head>
	<title>Update Game</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<!-- Bootstrap -->
	<link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
	<script src=<?php echo base_url("js/jquery-latest.min.js");?> type="text/javascript"></script>
	<script type="text/javascript" src=<?php echo base_url("js/bootstrap.js");?>></script>
	<script type="text/javascript" src="http://localhost/VifthFloor/CI/application/third_party/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
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
<!--
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-1.11.1.js>"</script>
		<script type ="text/javacript" src="<?=base_url()?>js/jquery-ui.min.js>"</script>

		 production
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/plupload.full.min.js>"</script>
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js>"</script>

		<div id="uploadBox" title="UploadBox"></div> -->

		<div id="container">
			<header>
				<?php $this->load->view('admin/header-dashboard'); ?>
			</header>
			<div id="main">
				<div id="jumlah-donasi">
					<div class="row">
						<div class="col-md-7">
							<div id="add">
								<h1>Update Game</h1>
								<?php echo form_open_multipart('game/update/'.$data->Id); ?>
								<input type="hidden" name="id" value="<?php echo $data->Id ?>" />
								<form>
									<div class="form-group">
										<label for="title">Judul</label>
										<?php echo form_input('title',$data->Title, array('name' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter Title'));?>
									</div>
									<div class="form-group">
										<label for="desc">Description</label>
										<?php echo form_textarea('desc',$data->Description, array('name' => 'desc', 'class' => 'form-control', 'rows' => '5'));?>
									</div>
									<div class="form-group">
										<label for="title">Release Date</label>
										<?php echo form_input('date',$data->ReleaseDate, array('name' => 'date', 'class' => 'form-control'));?>
									</div>
									<div class="form-group">
										<label for="title">Available On</label>
										<?php echo form_input('avail',$data->AvailableOn, array('name' => 'avail', 'class' => 'form-control'));?>
									</div>
									<div class="form-group">
										<label for="title">Current Thumbnail</label>
										<img class="img-responsive" width = "100px" height="100px" src="<?php echo base_url();?>assets/uploads/gameThumbnail/<?php echo $data->Thumbnail;?>"/>
									</div>
									<div class="form-group">
										<label for="title">Current Header</label>
										<img class="img-responsive" width = "100px" height="100px" src="<?php echo base_url();?>assets/uploads/gameHeader/<?php echo $data->Header;?>"/>
									</div>
									<div class="form-group">
										<label for="title">Upload Thumbnail</label>
										<?php echo form_upload('thumbnail'); ?>
									</div>
									<div class="form-group">
										<label for="title">Upload Header</label>
										<?php echo form_upload('gambarBerita'); ?>
									</div>
									<?php echo form_submit('submit', 'Save','id="submit"') ?>

								</form>

								<?php echo form_close();?>
								<?php echo $output; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer></footer>
		</div>
	</body>
	</html>