<html>

	<body>
	<table>
		<tr>
			<td>Game Title</td>
			<td>Link</td>
		</tr>
		<?php foreach ($records as $row): ?>
		<tr>
			<td>
				<?php echo $row->Title; ?>
			</td>
			<td>
				<a href="<?php echo site_url("/game/update/$row->Id");?>" >Edit</a>
			</td>
		</tr>

		<?php endforeach; ?>
		<ul>
             <?php echo $page;?>
        </ul>               
	</table>
	</body>

</html>


