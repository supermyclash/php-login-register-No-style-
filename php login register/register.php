<?php

require_once("config.php");

if(isset($_POST['register'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );


    $saved = $stmt->execute($params);

    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>register</title>

</head>

        <p>&larr; <a href="index.php">برگشت</a>

        <p> <a href="login.php">Login</a></p>

        <form action="" method="POST">

           
                <label for="name">Nama</label>
                <input type="text" name="name" placeholder="Nama" />
            

         
                <label for="username">Username</label>
                <input  type="text" name="username" placeholder="Username" />
           

           
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" />
        

          
                <label for="password">Password</label>
                <input  type="password" name="password" placeholder="Password" />
         

            <input type="submit" name="register" value="ارسال" />

        </form>
            
    
            <img src="img/images.png" />
   

</body>
</html>