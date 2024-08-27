<?php
$servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//if(isset($_GET['carid'])){
  //$_SESSION['carid'] = $_GET['carid'];
//}

// استعلام SQL لاسترداد كل المنتجات
$sql = "SELECT * FROM car";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <meta charset="UTF-8">
  <title>Cars for sale</title>
  <link rel="stylesheet" href="page2.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .all-comp{
      border-style: solid;
      border-radius: 1rem;
      width: 70%;
      margin-left: 230px;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .products-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product {
      width: 200px;
      margin: 10px;
      padding: 10px;
      flex-wrap: wrap;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
    }

    .product img {
      max-width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 5px;
    }

    .product h3 {
      margin-top: 10px;
      font-size: 18px;
    }

    .product p {
      margin-top: 5px;
      font-size: 14px;
      color: #777;
    }

    /* تنسيق الألوان */
    body {
      background: white;
      background-color: #f8f8f8;
    }

    h1 {
      color: #333;
    }

    .product {
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* استجابية التصميم */
    @media screen and (max-width: 768px) {
      .container {
        width: 100%;
      }

      .product {
        width: 100%;
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>
<header>
    <div class="head1">

        <a href="admin.php" style="font-size: 40px" class="name">AUTOCAR</a>
        <a href="index.php" class="anchor" style="text-decoration:none">log out</a>
        <label class="label1"></label>
        <a href="shope.php" class="anchor" style="right:230px ;text-decoration:none" >shope</a>
        <a href="requests.php" class="anchor" style="right:380px;text-decoration:none ">requests</a>


        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>



<div class="all-comp" style="position: relative;top:130px">
  <div class="container">
    <h1>cars</h1>
    <div class="products-container">
    <?php

while($row=mysqli_fetch_assoc($result)){

?>
      <div class="product">
       <img src="./imgs/<?php  echo $row["img"];  ?>" alt="product 1 ">
        <h3 >$<?php  echo $row["price"]; ?></h3>
        <p >car id: <?php  echo $row["carid"]; ?></p>
        <p ><?php  echo $row["carmodel"]; ?></p>
        <button name="btn" class="userinfo btn btn-success" data-id="<?php echo $row['carid']; ?>">product details</button>
        <br>
      </div>
      <?php
      
  }

?>

<script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var id1 = $(this).data('id');
                    $.ajax({
                        url: 'ajaxfile.php',
                        type: 'post',
                        data: {id1:id1},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
      </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Car Info</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>

    </div>
  </div>
</div>

</body>
</html>