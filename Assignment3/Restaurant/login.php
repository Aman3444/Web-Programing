<?php include("header.php"); ?>
<?php
    require_once('WebsiteUser.php');
    session_start();
    if(isset($_SESSION['websiteUser'])){
        if($_SESSION['websiteUser']->isAuthenticated()){
            session_write_close();
            header('Location:restricted.php');
        }
    }
    $missingFields = false;
    if(isset($_POST['submit'])){
        if(isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] == "" || $_POST['password'] == ""){
                $missingFields = true;
            } else {
                $websiteUser = new WebsiteUser();
                if(!$websiteUser->hasDbError()){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $websiteUser->authenticate($username, $password);
                    if($websiteUser->isAuthenticated()){
                        $_SESSION['websiteUser'] = $websiteUser;
                        header('Location:restricted.php');
                    }
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            if($missingFields){
                echo '<h3 style="color:red;">Please enter both a username and a password</h3>';
            }

            if(isset($websiteUser)){
                if(!$websiteUser->isAuthenticated()){
                    echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
                }
            }
        ?>

    </body>
	<?php include("footer.php"); ?>
</html>
