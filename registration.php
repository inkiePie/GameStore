<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <?php
	$connection=mysqli_connect('b3bmqxwkvjuvkgvh8ixe-mysql.services.clever-cloud.com', 'uizxkg2zmos3avvh', 'tWgD0KR67ZnepARuKU3v','b3bmqxwkvjuvkgvh8ixe');
    $conn=mysqli_connect('localhost', 'root', 'Ralph_12092002','gamestore');
	$fullName = mysqli_real_escape_string($connection, $_POST["fullName"]);
    $login = mysqli_real_escape_string($connection, $_POST["login"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
    $birthday = mysqli_real_escape_string($connection, $_POST["birthdayDate"]);
    $sql = "INSERT INTO Registration (fullName, login, password, email, phone, birthdayDate) VALUES ('$fullName', '$login', '$password', '$email', '$phone', '$birthday')";
    if(mysqli_query($connection, $sql) && mysqli_query($conn, $sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . mysqli_error($connection);
    }
	mysqli_close($connection);
    mysqli_close($conn);
	?>
</body>
</html>