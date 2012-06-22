<html>
	<head>
		<?php		
		echo '
		<table class="table table-bordered">
			<thead>
			<tr>
			<th>UID</th>
			<th>NAME</th>
			<th>Intime</th>
			</tr>
			</thead><tbody>';
		foreach ($result as $row) {
			echo '<tr>';
			echo '<td>'.$row["uid"].'</td><td>'.$row["name"].'</td><td>'.$row["intime"].'</td>';
			echo '</tr>';
		}
		echo '</tbody></table>';
		?>
	</head>
</html>
