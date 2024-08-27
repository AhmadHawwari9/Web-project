<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="page2.css">
  <title>requests</title>
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
  <h1 style="color: white;position: relative;top: 90px;text-align: center">Requists</h1>
  <table style="width: 100%;color: white;border: 1px solid #C8B6A6;position: relative;top:150px;font-size: 30px">
  <thead>
    <tr>
      <th>Carmodel</th>
      <th>carid</th>
    </tr>
    </thead>

    <tbody style="text-align:center">
    <?php

$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM requests";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("invaild quary:".$conn->error);
}

while($row=$result->fetch_assoc())
{
    echo "<tr>
    <td>".$row['carmodel']."</td>
    <td>".$row['carid']."</td>
    <td>
    <form  method=post>
    <button name=approve1>Approve</button>
    <button name=delete1>Delete</button>
    </form>
    </td>
    </tr>";

    if(isset($_POST['approve1']))
    {
      $sql1="INSERT INTO car (carid,carmodel, year0, carcolor, enginpower,carorigin,fultype, price, additionaliformation, img,addduration,advertsiername, phonenum, city) values('$row[carid]','$row[carmodel]','$row[year0]','$row[carcolor]','$row[enginpower]','$row[carorigin]','$row[fultype]','$row[price]','$row[additionalinformation]','$row[img]','$row[addduration]','$row[advertsiername]','$row[phonenum]','$row[city]');";
      
      $result1 = mysqli_query($conn, $sql1);
      if(!$result1){
        die("invaild quary:".$conn->error);
    }

      $sql2="DELETE FROM requests WHERE carid='$row[carid]';";
      $result2 = mysqli_query($conn, $sql2);
      if(!$result2){
        die("invaild quary:".$conn->error);
    }
      }

      if(isset($_POST['delete1']))
      {
        $sql3="DELETE FROM requests WHERE carid='$row[carid]';";
        $result3 = mysqli_query($conn, $sql3);
        if(!$result3){
          die("invaild quary:".$conn->error);
      }

      }
}


mysqli_close($conn);

?>

    </tbody>
  </table>
</div>
</body>
</html>