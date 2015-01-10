<html>
	<head>
		<title>Add New Games</title>
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

		<!-- production
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/plupload.full.min.js>"</script>
		<script type="text/javascript" src="<?=base_url()?>js/plupload/js/jquery.plupload.queue/jquery.plupload.queue.js>"</script>

		<div id="uploadBox" title="UploadBox"></div> -->
		<?php echo form_open('game/addNew'); ?>
		<table>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><?php echo form_input('title');?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>:</td>
				<td><?php echo form_textarea('desc');?></td>
			</tr>
			<tr>
				<td>Released At</td>
				<td>:</td>
				<td><?php echo form_input('date');?></td>
			</tr>
			<tr>
				<td>Available On</td>
				<td>:</td>
				<td><?php echo form_input('avail');?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>
		<?php echo $output; ?>
		</br>
		</br>

		<a href="http://localhost/CI/index.php/login/logout">Logout</a>
	</body>
</html>