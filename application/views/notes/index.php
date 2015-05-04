<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ajax Notes</title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
	<h2>Notes</h2>
	<div id="notes">
		<?php foreach ($notes as $note)
			{
		?>
			<div class="note">
				<h4><?= $note['title']; ?></h4>
				<form class="deleteForm" action="" method="post">
					<input type="submit" value="delete">
				</form>

				<form class="updateForm" action="" method="post">
					<textarea name="description" pplaceholder="add description..."><?= $note['description']; ?></textarea>
					<input type="submit" value="update">
				</form>
			</div>
		<?php
			}
		?>

		<form class="addForm" action="notes/create" method="post">
			<input type="text" name="title" placeholder="Insert a title...">
			<input type="submit" value="create">
		</form>
	</div>
</body>
</html>