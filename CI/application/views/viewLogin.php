<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<?php echo form_open('login/check'); ?>

		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo form_input('name');?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo form_password('password');?></td>
			</tr>
			<tr>
				<td><?php echo form_submit('submit', 'Login','id="submit"') ?></td>
			</tr>
		</table>
		</br>

		<?php echo $msg;?>

		<?php echo form_close();?>
	</body>
</html>