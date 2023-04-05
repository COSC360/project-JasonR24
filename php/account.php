<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header('location:signIn.php');
    }

    if(isset($_SESSION['statusMsg'])){
        echo "<script>window.alert(\"".$_SESSION['statusMsg']."\")</script>";
        unset($_SESSION['statusMsg']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="../font/helvetica-now-display/stylesheet.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/module.css">
    <link rel="stylesheet" href="../css/userAuth.css">
    <link rel="stylesheet" href="../css/account.css">
    <script src="../js/account.js"></script>
    <script src="../js/navigation.js"></script>
</head>
<body>
    <?php include 'dashboardHeader.php';?>
    <main>
        <div class = "user-account-container">
            <div class="user-account-info">
                <h2>Account Settings</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Erat facilisi varius est cursus. Neque sagittis mi non purus semper lacus mauris magnis.</p>
            </div>  
            <div class="user-account-box">
                <div class="profile-box">
                    <img src="<?php echo $_SESSION['profilePicture']?>" id = "pfp">
                    <h1>Username</p>
                    <h2><?php echo $_SESSION["username"] ;?></h2>
                </div>
                <form action= "processUpdate.php" method="POST">
                    <div class="item-1">
                        <label>Email</label><br>    
                        <div class="input-container">
                            <input type = "text" id="email" name = "email" value = "<?php echo $_SESSION["email"] ;?>">
                            <button class="editField" onclick="editField()"><img src="../svgs/editField.svg"></button>
                        </div> 
                    </div>
                    <div class="item-2">
                        <label>Password</label><br>
                        <div class="input-container">
                            <input type = "text" id="password" name = "password" value = "<?php echo $_SESSION["password"] ;?>">
                            <button class="editField" onclick="editField()"><img src="../svgs/editField.svg"></button>
                        </div>
                    </div>
                    <div class="item-3">
                        <input type="reset" value="Reset Form">
                    </div>
                    <div class="item-4">
                        <input type="submit" name= "updateSubmit" id = "updateSubmit" value="Confirm Changes">
                    </div>
                </form>
            </div>
        </div>
    <main>
    <?php
        include "footer.php";
    ?>
</body>
</html>