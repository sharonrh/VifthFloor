<html>
<head>
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
	<title>Update News</title>
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
							<h1>Update News</h1>
							<?php echo form_open_multipart('news/update/'.$news->Id); ?>
							
							<form>
								<div class="form-group">
									<label for="title">Judul</label>
									<?php echo form_input(array('name' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter Title'), $news->Title);?>
								</div>
								<div class="form-group">
									<label for="desc">Content</label>
									<?php echo form_textarea(array('name' => 'desc', 'class' => 'form-control', 'rows' => '5'), $news->Content);?>
								</div>
								<div class="form-group">
									<label for="title">Current Thumbnail</label>
									<img class="img-responsive" width = "100px" height="100px" src="<?php echo base_url();?>assets/uploads/newsThumbnail/<?php echo $news->Thumbnail;?>"/>
								</div>
								<div class="form-group">
									<label for="title">Upload Thumbnail</label>
									<?php echo form_upload('thumbnail'); ?>
								</div>
								<?php echo form_submit('submit', 'Save','id="submit"') ?>

							</form>
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