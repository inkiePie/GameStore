<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <?php
	
    $conn=mysqli_connect('localhost', 'root', 'Ralph_12092002','gamestore');
    $login = mysqli_real_escape_string($conn, $_POST["login"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $sql = "SELECT login, password FROM Registration WHERE login = '$login' and password = '$password'";
    if($result = mysqli_query($conn, $sql)){
        foreach($result as $row){
            $insertedLogin= $row["login"];
            $insertedPassword=$row["password"] ;
        }
        $result->free();
    }
    if(!empty($insertedLogin)&&!empty($insertedPassword)){
        $new_url = 'catalog.php';
        header('Location: '.$new_url);
    }else{
        echo "Неверный ввод <br/>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>