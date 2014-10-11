<html>
	<head>
		<title>Add Latest News</title>

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

		<a href="http://localhost/CI/index.php/login/logout">Logout</a>
	</body>
</html>