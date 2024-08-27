
<?php
$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['signup']))
{
    $user = $_POST['email0'];
    $pass = $_POST['passwordd'];

    $sql="SELECT * FROM user0 WHERE EMAIL='$user'";
    $sql1="SELECT * FROM admin0 WHERE EMAIL='$user'";
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0 | mysqli_num_rows($result1)>0) {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Error::this user is already exist try another email")';  
        echo '</script>'; 
    } else{
        $sql22 ="INSERT INTO user0 (email, passworddd) VALUES ('$user', '$pass')";
        $result2 = mysqli_query($conn, $sql22);
        if($result2){
            header("location: userpage.php");    
        }
        else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Error::cannot add this user")';  
            echo '</script>'; 
        }
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>sign up</title>
</head>
<body>
<header>
    <div class="head1">

        <a href="page2.php" style="font-size: 45px" class="name">AUTOCAR</a>
        <a href="index.php" class="anchor">shope</a>
        <label class="label1"></label>
        <a href="index.php" class="anchor" style="right:230px ">sign in</a>
        <a href="signup.php" class="anchor" style="right:380px ">sign up</a>

        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>

<form action="signup.php" method="post">
    <div>
        <label style="color: white;position: relative;top: 200px;left: 200px;font-size:30px">First name</label>
        <input type="text" style="position: relative;top: 200px;left:250px;font-size: 30px" required>
    </div>

    <div>
        <label style="color: white;position: relative;top: 250px;left: 200px;font-size:30px">Last name</label>
        <input type="text" style="position: relative;top: 250px;left:250px;font-size: 30px" required>
    </div>

    <div>
        <label style="color: white;position: relative;top: 300px;left: 200px;font-size:30px">Password</label>
        <input type="password" name="passwordd" style="position: relative;top: 300px;left:260px;font-size: 30px" required>
    </div>

    <div>
        <label style="color: white;position: relative;top: 350px;left: 220px;font-size:30px">Email</label>
        <input name="email0" type="email" style="position: relative;top: 350px;left:300px;font-size: 30px" required>
    </div>

<div>
    <button  name="signup" style="background: #C8B6A6;position: relative ;font-size: 40px;left:650px;top:380px">sign up</button>
</div>

</form>

</body>
</html>