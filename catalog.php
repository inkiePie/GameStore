<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Магазин игр и программ</title>
</head>
<body>
	<h1>Жанры:</h1>
	<?php
	#$connection=mysqli_connect('localhost', 'root', 'Ralph_12092002','gamestore');
	$connection=mysqli_connect('b3bmqxwkvjuvkgvh8ixe-mysql.services.clever-cloud.com', 'uizxkg2zmos3avvh', 'tWgD0KR67ZnepARuKU3v','b3bmqxwkvjuvkgvh8ixe');
	$conn=mysqli_connect('localhost', 'root', 'Ralph_12092002','gamestore');
	$sql = "SELECT nameGenre FROM Genre ORDER BY numGenre ASC";
	$massiveCloud=mysqli_query($connection,$sql);
	$massiveLocal=mysqli_query($conn,$sql);
	echo "<table>";
	while ($dataCloud = mysqli_fetch_assoc($massiveCloud)) {
		echo "<tr>";
	 		echo "<td>" . $dataCloud["nameGenre"] . "</td>";
	 	echo "</tr>";
	 }
	 $dataCloud = mysqli_fetch_assoc($massiveCloud);
	 echo "</table>";
	 echo "<br><table>";
	 while ($dataLocal = mysqli_fetch_assoc($massiveLocal)) {
	 	echo "<tr>";
	 		echo "<td>" . $dataLocal["nameGenre"] . "</td>";
	 	echo "</tr>";
	 }
	 echo "</table>";
	 $sql = "SELECT name, nameGenre, nameType, rating, year, developer, price, description FROM Games INNER JOIN Genre on Games.genre = Genre.numGenre INNER JOIN Type on Games.type = Type.numType";
	 $massiveCloud=mysqli_query($connection,$sql);
	$massiveLocal=mysqli_query($conn,$sql);
	 echo "<br><table><tr><th>Название</th><th>Жанр</th><th>Категория</th><th>Рейтинг</th><th>Год</th><th>Разработчик</th><th>Цена</th><th>Описание</th></tr>";
	while ($data = mysqli_fetch_assoc($massiveCloud)) {
		echo "<tr>";
	 		echo "<td>" . $data["name"] . "</td>";
	 		echo "<td>" . $data["nameGenre"] . "</td>";
	 		echo "<td>" . $data["nameType"] . "</td>";
	 		echo "<td>" . $data["rating"] . "</td>";
	 		echo "<td>" . $data["year"] . "</td>";
	 		echo "<td>" . $data["developer"] . "</td>";
	 		echo "<td>" . $data["price"] . "</td>";
	 		echo "<td>" . $data["description"] . "</td>";
	 	echo "</tr>";
	 }
	 while ($data = mysqli_fetch_assoc($massiveLocal)) {
		echo "<tr>";
	 		echo "<td>" . $data["name"] . "</td>";
	 		echo "<td>" . $data["nameGenre"] . "</td>";
	 		echo "<td>" . $data["nameType"] . "</td>";
	 		echo "<td>" . $data["rating"] . "</td>";
	 		echo "<td>" . $data["year"] . "</td>";
	 		echo "<td>" . $data["developer"] . "</td>";
	 		echo "<td>" . $data["price"] . "</td>";
	 		echo "<td>" . $data["description"] . "</td>";
	 	echo "</tr>";
	 }
	 echo "</table>";
	mysqli_close($connection);
	mysqli_close($conn);
	?>
</body>
</html>