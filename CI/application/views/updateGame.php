<html>
	<head>
		<title>Update Game</title>
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
		<?php echo form_open('game/update/'.$data->Id); ?>
		<table>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><?php echo form_input('title',$data->Title);?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>:</td>
				<td><?php echo form_textarea('desc',$data->Description);?></td>
			</tr>
			<tr>
				<td>Released At</td>
				<td>:</td>
				<td><?php echo form_input('date',$data->ReleaseDate);?></td>
			</tr>
			<tr>
				<td>Available On</td>
				<td>:</td>
				<td><?php echo form_input('avail'),$data->AvailableOn;?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>
		<?php echo $output; ?>
		<?php echo $data; ?>
		</br>
		</br>

		<a href="http://localhost/CI/index.php/login/logout">Logout</a>
	</body>
</html>