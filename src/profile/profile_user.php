<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login/404.php");
    exit();
}

$userid = $_SESSION['username'];
$user = $_SESSION['user'];

require_once "../data/student_data.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... Head content ... -->
    <style>
        /* Additional CSS styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container-profile {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card {
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            padding: 30px;
            background-color: #fff;
            max-width: 500px;
            margin: 0 auto;
        }

        .profile-card h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .profile-card p {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        .profile-card strong {
            color: #333;
        }
    </style>
</head>

<body>
    <section class="container-profile">
        <section class="profile">
            <div class="welcome-message">
                <h1>Welcome, <?php echo $firstname . " " . $lastname; ?>!</h1>
                <p>Thank you. Welcome to our site!</p>
            </div>

            <div class="profile-card">
                <h2>Your Profile</h2>
                <p><strong>Name:</strong> <?php echo $firstname . " " . $lastname; ?></p>
                <p><strong>City:</strong> <?php echo $city; ?></p>
                <!-- Add more user details as needed -->

                <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-primary">Log Out</button>
                </form>
            </div>
        </section>

        <!-- ... Rest of your HTML ... -->
    </section>

    <script src="../navigation/navbar.js"></script>
    <script src="https://kit.fontawesome.com/dba87631dd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>