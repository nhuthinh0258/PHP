<?php
session_start();
if (!isset($_SESSION['isLoginad'])) {
    header("location:admin-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/admin.css" rel="stylesheet"/>
    <link href="css/fontawesome.min.css" rel="stylesheet"/>
    <link href="css/slick-theme.css" rel="stylesheet"/>
    <link href="css/slick.css" rel="stylesheet"/>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="model/process-upload.php" method="post" enctype="multipart/form-data">
            Select Image File to Upload:
            <input type="file" name="myfile">
            <input type="submit" name="btnupload" value="Upload">
        </form>
        <?php
            if(isset($_GET['error'])){
                echo"<p style= 'color:red'> {$_GET['error']} </p>";
            }
        ?>
        <ul>
            <li>
                <?php
                if (isset($_SESSION['isLoginad'])) {
                    echo "<a class='user'>{$_SESSION['isLoginad']}</a>";
                ?>
                    <ul class="submenu">
                        <li><a href="admin-logout.php">Logout</a></li>
                    </ul>
                <?php
                }
                ?>
            </li>
        </ul>
    </div>
</body>

</html>