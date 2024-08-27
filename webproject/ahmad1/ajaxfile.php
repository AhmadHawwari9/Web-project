<?php
 include "dbcon.php";
 $id11=$_POST['id1'];
 
$sql10 = "select * from car where carid=".$id11;
$result2 = mysqli_query($conn,$sql10);
while( $row = mysqli_fetch_array($result2) ){
?>


    <div style="padding: 20px;">
    <img style="width: 100%;" src="imgs/<?php echo $row['img']; ?>">
    <br>
    <br>
    <p>id : <?php echo $row['carid']; ?></p>
    <p> car model : <?php echo $row['carmodel']; ?></p>
    <p> year : <?php echo $row['year0']; ?></p>
    <p> carcolor : <?php echo $row['carcolor']; ?></p>
    <p> enginpower : <?php echo $row['enginpower']; ?></p>
    <p> carorigin : <?php echo $row['carorigin']; ?></p>
    <p> fultype : <?php echo $row['fultype']; ?></p>
    <p> price: <?php echo $row['price']; ?></p>
    <p> additionaliformation : <?php echo $row['additionaliformation']; ?></p>
    <p> addduration: <?php echo $row['addduration']; ?></p>
    <p> advertsiername : <?php echo $row['advertsiername']; ?></p>
    <p> phonenum: <?php echo $row['phonenum']; ?></p>
    <p> city : <?php echo $row['city']; ?></p>
    
</div>
 
<?php } ?>

