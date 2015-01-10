<html>
	<head>
		<title>Add Latest News</title>
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

		<?php echo form_open('news/addNew'); ?>
		<table>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><?php echo form_input('title');?></td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><?php echo form_textarea('content');?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>

		</br>
		</br>

		<a href="http://localhost/VifthFloor/CI/index.php/login/logout">Logout</a>
	</body>
</html>