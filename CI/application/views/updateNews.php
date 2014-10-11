<html>
	<head>
		<title>Add Latest News</title>
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
				<td>Category</td>
				<td>:</td>
				<td><?php echo form_dropdown('category', $category, $news->Category); ?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Save','id="submit"') ?></td>
			</tr>
		</table>
		<?php echo form_close();?>
	</body>
</html>