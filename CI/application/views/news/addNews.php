<html>
<head>
	<title>Add Latest News</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<!-- Bootstrap -->        
	<link href=<?php echo base_url("assets/css/style-dashboard.css");?> rel="stylesheet" media="screen">
	<script src=<?php echo base_url("assets/js/jquery-latest.min.js");?> type="text/javascript"></script>
	<script type="text/javascript" src=<?php echo base_url("assets/js/bootstrap.js");?>></script>
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
</head>

<body>
	<div id="container">
		<header><?php $this->load->view('admin/header-dashboard'); ?></header>
		<div id="main">
			<div id="jumlah-donasi">
				<div class="row">
					<div class="col-md-7">
						<div id="add">
							<h1> Add New</h1>

							<?php echo form_open('news/addNew'); ?>
							<form role="form">
								<div class="form-group">
									<label for="title">Judul</label>
									<?php echo form_input(array('name' => 'title', 'class' => 'form-control', 'placeholder' => 'Enter Title'));?>
								</div>
								<div class="form-group">
									<label for="content">News Content</label>
									<?php echo form_textarea(array('name' => 'content', 'class' => 'form-control', 'rows' => '5'));?>
								</div>
								<div class="form-group">
									<label for="thumbnail">Thumbnail</label>
									<input type="file" id="thumbnail">
									<p class="help-block">Silahkan pilih gambar untuk thumbnail berita</p>
								</div>
								<div class="form-group">
									<label for="gambarBerita">Gambar Berita</label>
									<input type="file" id="gambarBerita">
									<p class="help-block">Silahkan pilih gambar yang ada di berita</p>
								</div>
								<?php echo form_submit('submit', 'Save','id="submit"') ?>
							</form>
							<?php echo form_close();?>

						</br>
					</br>

					<a href="http://localhost/VifthFloor/CI/index.php/login/logout">Logout</a>
				</div>
			</div>
		</div>
	</div>
</div>
<footer></footer>
</div>
</body>
</html>