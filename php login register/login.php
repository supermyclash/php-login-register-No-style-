<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
 
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if($user){
   
        if(password_verify($password, $user["password"])){
           
            session_start();
            $_SESSION["user"] = $user;
           
            header("Location: 1.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title></title>

    
</head>

    

        <form action="" method="POST">

           
               
                <input type="text" name="username" placeholder="username" />
            </div>


            
             
                <input  type="password" name="password" placeholder="رمز  " />
            </div>
            <img src="img/images.png" />
  
            <input type="submit"  name="login" value="ارسال" />
</body>
</html>