

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="page2.css">
    <title>users table</title>
</head>
<body>
<header>
    <div class="head1">

        <a href="admin.php" style="font-size: 45px" class="name">AUTOCAR</a>
        <a href="index.php" class="anchor">log out</a>
        <label class="label1"></label>
        <a href="shope.php" class="anchor" style="right:230px ">shope</a>
        <a href="requests.php" class="anchor" style="right:380px ">requests</a>


        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>

<div>
    <h1 style="color: white;position: relative;top: 90px;text-align: center">Users information</h1>
    <table style="width: 100%;color: white;border: 1px solid #C8B6A6;position: relative;top:150px;font-size: 30px">
    <thead>
        <tr>
            <th>email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        <?php

$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM user0";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("invaild quary:".$conn->error);
}

while($row=$result->fetch_assoc())
{
    echo "<tr>
    <td>".$row['email']."</td>
    <td>".$row['passworddd']."</td
    </tr>";
}

mysqli_close($conn);

?>
        </tbody>
    </table>
</div>

</body>
</html>