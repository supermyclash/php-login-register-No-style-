<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>

    
</head>




            

                   
                    
                    
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">k</a></p>
        


        <div class="col-md-8">

            <form action="" method="post" />
           
                    <textarea  placeholder=""></textarea>
               
            </form>

            <?php for($i=0; $i < 6; $i++){ ?>
           
            <?php } ?>
            


</body>
</html>