
<?php

$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {

$user = $_POST['email'];
$pass = $_POST['password'];

// Validate credentials against the database

$sql = "SELECT * FROM admin0 WHERE EMAIL='$user' AND PASSWORDD='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("location: admin.php");
} else {

    $sql1="SELECT * FROM user0 WHERE EMAIL='$user' AND passworddd='$pass'";
    $result1=mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0){
        header("location: userpage.php");
    }
    else {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Error::try again")';  
        echo '</script>';  
    }
    // Invalid credentials
  //  echo "Invalid username or password.";
}
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cs.css">
    <link rel="stylesheet" href="page2.css">
    <title>sign in</title>
</head>
<body>

<div style="margin: auto" class="head1">
    <a href="page2.php" style="font-size: 45px" class="name">AUTOCAR</a>
</div>

<div style="color: white;position: relative;left: 60px;top:70px">
    <p >if you not want to sign in click on the auto car </p>
    <p>above to go to home page.</p>
</div>
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="index.php" method="post">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label >Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label >Password</label>
                </div>
                <div class="forget">
                    <label ><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>

                </div>
                <button type="submit" name="login">Log in</button>
                <div class="register">
                    <p>Don't have a account <a href="signup.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>