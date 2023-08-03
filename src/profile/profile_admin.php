<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login/404.php");
    exit();
}

$userid=$_SESSION['username'];
$user=$_SESSION['user'];
$_SESSION["user"] = $user;
$_SESSION["username"] =$userid;

require_once "../data/student_data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel = "icon" href ="../assets/icons/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="../navigation/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="side-navbarr">
        <?php include "../navigation/navbar.php"?>
    </section>
    <section class="container-profile">
        <section class="profile">
            <div class="container-photo">
                <img src="../assets/images/dp-1.jpg" class="img-dp img-thumbnail rounded mx-auto d-block"alt="">
                <a href="#"><i class='far fa-edit' style='font-size:24px'></i></a>
                
            </div>
            <div class="container-details">
                <div class="div1">
                    <h1><?php echo $firstname." ".$lastname  ?></h1>
                    <h2>Studies at <span style="font-weight:600"><?php echo $university  ?></span></h2>
                    <h2><?php echo $city  ?></h2>

                </div>
                <div class="">
                    <button onclick="window.location.href='../admin-Panel/admin-panel.php';" class="" href="#" role="button" aria-expanded="false">
                        Admin Panel
                    </button>
                </div>
            </div>
        </section>
    </section>
    <script src="../navigation/navbar.js"></script>
    <script src="https://kit.fontawesome.com/dba87631dd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../navigation/navbar.js"></script>
</body>
</html>