<?php
   
    echo "<h1>Preview</h1>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> odev5 </title>
    </head>
    <body>
        <p>
            <?php
                if(empty($_POST['name'])==false)
                {
                    echo $_POST['name'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['username'])==false)
                {
                    echo $_POST['username'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['password'])==false)
                {
                    echo $_POST['password'];
                }
                else
                {
                    echo $_POST['password']."Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['address'])==false)
                {
                    echo $_POST['address'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['country'])==false)
                {
                    echo $_POST['country'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['zipcode'])==false)
                {
                    echo $_POST['zipcode'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['email'])==false)
                {
                    echo $_POST['email'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['sex'])==false)
                {
                    echo $_POST['sex'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['langueage'])==false)
                {
                switch($_POST['langueage'])
                {
                    case "English":
                    echo "English";
                    break;
                    case "French":
                    echo "French";
                    break;
                    case "Germany":
                    echo "Germany";
                    break;
                }
            }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['about'])==false)
                {
                    echo $_POST['about'];
                }
                else
                {
                    echo "Not provided";
                }
            ?>
        </p>

        
    </body>
</html>