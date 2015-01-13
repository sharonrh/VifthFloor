<html>
	<head>
		<title>Update Game</title>

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

		<?php echo form_open_multipart('game/update/'.$data->Id); ?>
		<table>
			<input type="hidden" name="id" value="<?php echo $data->Id ?>" />
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
				<td><?php echo form_input('avail',$data->AvailableOn);?></td>
			</tr>
			<tr>
				<td>Current Thumbnail</td>
				<td><img class="img-responsive" width = "100px" height="100px" src="<?php echo base_url();?>assets/uploads/gameThumbnail/<?php echo $data->Thumbnail;?>"/></td>
			</tr>
			<tr>
				<td>Current Header</td>
				<td><img class="img-responsive" width = "100px" height="100px" src="<?php echo base_url();?>assets/uploads/gameHeader/<?php echo $data->Header;?>"/></td>
			</tr>
			<tr>
				<td>Upload Thumbnail</td>
				<td><?php echo form_upload('thumbnail'); ?></td>
			</tr>
			<tr>
				<td>Upload Header</td>
				<td><?php echo form_upload('gambarBerita'); ?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>
		<?php echo $output; ?>
	</body>
</html>