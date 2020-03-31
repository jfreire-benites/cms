<?php
    // define variables and set to empty values
    $error = "";
    $username = "";
    $password = "";
    $realusername = "username";
    $realpassword = "password1";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])||empty($_POST["password"])) {
            $error = "All fields are required";
        } else {
            $username = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);
            if($username!==$realusername&&$password!==$realpassword){
                $error = "youre not authorised";
            }else{
                header("Location: ../admin-pages/admin-home.php");
            }
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include '../modules/head.php';
        ?>
    </head>
    <body>
        <div class="page-container">
            <?php
                include '../modules/navbar.php';
            ?>
            <div class="login-container">
                <div class='question'>
                    <span>Are you allowed here?</span></br>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Username: <input type="text" name="username"><br><br>
                        Password: <input type="text" name="password"><br>
                        <span><?php echo $error;?></span><br>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>