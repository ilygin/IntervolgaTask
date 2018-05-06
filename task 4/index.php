<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Task 4</title>
		<link rel="stylesheet" href="/resources/style.css">
	</head>
	<body>
		<?php
			require_once 'connection.php';

			$link = mysqli_connect($host, $user, $password, $database) 
				or die("Ошибка " . mysqli_error($link));

			$query ="SELECT country_name FROM countries";
			$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

			if($result) {
			    $rows = mysqli_num_rows($result);
			     
			    echo "<table><tr><th>Страна</th><th class=\"button_delete\">Удалить</th></tr>";
			    for ($i = 0 ; $i < $rows ; ++$i) {
			        $row = mysqli_fetch_row($result);
			        echo "<tr>";
			            for ($j = 0 ; $j < 1 ; ++$j) {
			            	echo "<td>$row[$j]</td><td><button class=\"btn_delete\">Удалить</button></td>";
			            }
			        echo "</tr>";
			    }
			    echo "</table>";
			    
			    mysqli_free_result($result);
			}
			mysqli_close($link);

		?>
	</body>	
</html>