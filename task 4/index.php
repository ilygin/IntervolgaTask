<?php
	require_once 'connection.php';
	$query ="SELECT * FROM countries";			
	$result = mysqli_query($link, $query);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Task 4</title>
		<link rel="stylesheet" href="/resources/style.css">
	</head>
	<body>
		<table>
			<tr>
				<th>Страна</th>
				<th>Удалить</th>
			</tr>
			<?php 
				while($res = mysqli_fetch_array($result)) { 		
					echo "<tr>";
					echo "<td>".$res['country_name']."</td>";	
					echo "<td><a class=\"btn_delete\" href=\"delete.php?id=$res[id]\" onсlick=\"return confirm('Are you sure you want to delete?')\">Удалить</a></td>";		
				}
			?>
		</table>
	</body>
</html>