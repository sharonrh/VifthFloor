<html>
	<head>
	<script type="text/javascript" src="http://localhost/VifthFloor/CI/application/third_party/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
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
		<?php echo form_open('news/update/'.$news->Id); ?>
		<table>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><?php echo form_input('title', $news->Title);?></td>
			</tr>
			<tr>
				<td>Content</td>
				<td>:</td>
				<td><?php echo form_textarea('content', $news->Content);?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>
	</body>
</html>