<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/resources/style.css">
	</head>
	<body>
		<?php
require_once 'connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM tovars";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
		<table class="country_table">
			<tr>
				<th>
					Страна
				</th>
				<th class="button_delete">
					Удалить
				</th>
			</tr>
			<tr>
				<td>
					Страна 1
				</td>
				<td>
					<button class="btn_delete">Кнопка 1</button>
				</td>
			</tr>
			<tr>
				<td>
					Страна 1
				</td>
				<td>
					<button class="btn_delete">Кнопка 1</button>
				</td>
			</tr>
		</table>
	</body>	
</html>