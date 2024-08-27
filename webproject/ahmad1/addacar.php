<?php
try{
    $servername = "127.0.0.1:9621";
$username = "root";
$password = "123456";
$dbname="autocar";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['addcar'])){
$car_car_model_id = $_POST['car_car_model_id'];
$car_year = $_POST['car_year'];
$car_color = $_POST['car_color'];
$car_motor_power = $_POST['car_motor_power'];
$car_car_origin = $_POST['car_car_origin'];
$car_fuel = $_POST['car_fuel'];
$car_price = $_POST['car_price'];
$car_description = $_POST['car_description'];
$post_pic_1 = $_FILES['post_pic_1']['name'];
$car_period = $_POST['car_period'];
$car_owner = $_POST['car_owner'];
$car_phone = $_POST['car_phone'];
$car_city_id = $_POST['car_city_id'];


    // echo " aydi $car_car_model_id' ,$car_year,'$car_color', $car_motor_power,'$car_car_origin','$car_fuel', $car_price,'$car_description',$car_period,'$car_owner',$car_phone , '$car_city_id'";
$sql = "INSERT INTO car (carmodel,year0 , carcolor,enginpower, carorigin ,fultype, price,additionaliformation,img ,addduration,advertsiername, phonenum , city) VALUES ('$car_car_model_id',$car_year,'$car_color', $car_motor_power,'$car_car_origin','$car_fuel', $car_price,'$car_description','$post_pic_1',$car_period,'$car_owner',$car_phone , '$car_city_id')";
 
$res = $conn->query($sql);
$conn->commit();



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
}
}
catch(Exception $e){
    echo $e;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>add a new offer </title>
    <link rel="stylesheet" href="addcar.css">
    <link rel="stylesheet" href="page2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="userpage.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: white">
<header>
    <div class="head1" style="width: 100%;border-radius: 0%;padding-left: 20px">


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
<div class="title_leble">
    <h1 style="margin-left: 230px"> Add a new offer </h1>

</div>
<div class="all_contents" style="position: relative;top: 30px;bottom: 100px" method="post" >
    <table width="100%">
        <tbody>
        <div class="policy">
            <h2 class="section_title">Add posting on Auto car's website </h2>
            <ul>
                <li> The advertiser has the right to add one advertisement per day </li>
                <li>It is forbidden to repeat any previous advertisement</li>
                <li>All details must be filled in</li>
                <li>The advertiser's phone number will be contacted to ensure the validity of the advertisement. If you do not respond to 3 attempts, the ad will be deleted</li>
            </ul>
        </div>
        <form class="new_car" id="new_car" enctype="multipart/form-data" action="addacar.php" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="se2wUE8jFpgEy3ViCr06quVzpR9bXzJ6c3vFFBrcDo5WuGH/zM6wKBE2U2W6irxYR53bpDrzLwU3fV01ZiuWjA==">

            <div class="space_placeholder"></div>

            <table class="list_ads" width="50%">
                <tbody><tr class="section_title">
                    <th width="10%">Adjective</th>
                    <th width="80%">        The description</th>
                </tr>
                </tbody></table>


            <table class="create_post" width="100%">
                <tbody><tr class="list-row"><td class="center_content" width="25%"><label for="car_car_model_id">Car modale<font color="red">*</font></label></td>
                    <td><select required="required" name="car_car_model_id" id="car_car_model_id"><option value="">All company </option>

                        <option value="Audi">Audi</option>
                        <option value="Bmw">BMW</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Seat">Seat</option>
                        <option value="VW">VW</option>
                        <option value="Kia">kia</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Nesan">Nesan</option>
                        <option value="Honda">Honda</option>
                        <option value="Hunday">Hunday</option></select>
                        <select class="car_car_sub_model_id" name="car[car_sub_model_id]" id="sub_model_id" disabled="">
                            <option value="">Model</option>



                        </select>
                        <p>In the event that the car model is not available, please fill in the "other model" field.</p>
                    </td>

                </tr>
                <tr id="row_11" class="list-row"><td class="center_content" width="25%"><label for="car_sub_model">Other model<font color="red">*</font></label></td>
                    <td><input type="text" name="car_sub_model" id="car_sub_model"> <p>Example: Bmw<u> i525</u>،Seat<u> Leon</u></p></td>
                </tr>
                <tr class="list-row"><td class="center_content" width="25%"><label for="car_year">Year<font color="red">*</font></label></td>
                    <td><select required="required" name="car_year" id="car_year"><option value=""> Year</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                    </select></td>
                </tr>
                <tr id="row_12" class="list-row"><td class="center_content" width="25%"><label for="car_color">car_color<font color="red">*</font></label></td>
                    <td><select required="required" name="car_color" id="car_color"><option value="">Car color </option>
                        <option value="white">white</option>
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>    
                        <option value="Blue">Blue</option>
                        <option value="Blue skay">blue skay</option>
                        <option value="Black">Black</option>
                        <option value="yallow">yallow</option>
                        <option value="Orange">Orange</option>
                        <option value="Many colors">Many colors</option></select> </td>
                </tr>
                <tr class="list-row"><td class="center_content" width="25%"><label for="car_motor_power">Engine power<font color="red">*</font></label></td>
                    <td><input min="100" max="10000" size="10" required="required" placeholder="1600" type="number" name="car_motor_power" id="car_motor_power"> Example: 2000cc</td>
                </tr>



                <tr id="row_13" class="list-row"><td class="center_content" width="25%"><label for="car_car_origin">Car origin<font color="red">*</font></label></td>
                    <td><select required="required" name="car_car_origin" id="car_car_origin"><option value="">car_origin</option>
                        <option value="privet">privet</option>
                        <option value="Taxi">Taxi</option> </select></tr>

                <tr id="row_14" class="list-row"><td class="center_content" width="25%"><label for="car_fuel">fuel type<font color="red">*</font></label></td>
                    <td><select required="required" name="car_fuel" id="car_fuel"><option value="">fuel type</option>
                        <option value="Desil">Desil</option>
                        <option value="banzen">banzen</option>
                        <option value="electric">electric</option>
                        <option value="hipred">hipred</option></select></td>
                </tr>


                <tr class="list-row"><td class="center_content" width="25%"><label for="car_price">price<font color="red">*</font></label></td>
                    <td><input min="1000" max="1000000" size="10" required="required" placeholder="35200" type="number" name="car_price" id="car_price">A real price must be set</td>
                </tr>




                <tr class="list-row"><td class="center_content" width="25%"><label for="car_description">additional information</label></td>
                    <td> <textarea cols="52" rows="10" placeholder="More car specifications, every piece of information in a line
                   " name="car_description" id="car_description"></textarea> </td>
                </tr>

                <tr id="row_15" class="list-row"><td class="center_content" width="25%"><label >image</label></td>
                    <td><input type="file" name="post_pic_1"></td>
               </tr>
                <tr class="list-row"><td class="center_content" width="25%"><label >image</label></td>
                    <td><input type="file" name="post_pic[]" id="post_pic_2"></td>
                </tr>
                <tr id="row_16" class="list-row"><td class="center_content" width="25%"><label >image</label></td>
                    <td><input type="file" name="post_pic[]" id="post_pic_3"></td>
                </tr>



                <tr id="row_17" class="list-row"><td class="center_content" width="25%"><label for="car_period">Ad duration
                    <font color="red">*</font></label></td>
                    <td><select name="car_period" id="car_period">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                        <option selected="selected" value="5">5</option></select> day</td>
                </tr>


                </tbody></table>

            <table class="create_post" width="100%">
                <tbody><tr id="advertiser_info">
                    <th class="section_title">Advertiser information</th>
                </tr>
                </tbody></table>


            <table class="create_post" width="100%">
                <tbody><tr class="list-row"><td class="center_content" width="25%"><label for="car_owner">Advertiser name<font color="red">*</font></label></td>
                    <td>
                        <input required="required" placeholder="real name" type="text" name="car_owner" id="car_owner">
                        <div style="color: #6c1919;">Note: Advertising without a real name will not be accepted </div>
                    </td>
                </tr>
                <tr id="row_1" class="list-row"><td class="center_content" width="25%"><label for="car_phone">phone number<font color="red">*</font></label></td>
                    <td> <input placeholder="phone numper" type="text" name="car_phone" id="car_phone"> </td>
                </tr>



                <tr class="list-row"><td class="center_content" width="25%"><label for="car_city_id">City<font color="red">*</font></label></td>
                    <td>
                        <select required="required" name="car_city_id" id="car_city_id"><option value="">City</option>
                            <option value="Jericho">Jericho</option>
                            <option value="Hebron">Hebron</option>
                            <option value="Jerusalem">Jerusalem</option>
                            <option value="Bethlehem">Bethlehem</option>
                            <option value="Jenen">Jenen</option>
                            <option value="Ramallah">Ramallah  </option>
                            <option value="Salfeet">Salfeet</option>
                            <option value="Tubas">Tubas</option>
                            <option value="Tulkarem">Tulkarem</option>
                            <option value="Gaza">Gaza </option>
                            <option value="Qalqilya">Qalqilya</option>
                            <option value="Nablus">Nablus</option></select>
                    </td>
                </tr>

                </tbody></table>


            <div class="space_placeholder"></div>
            <div style="color: red;">* Fields must be filled in.</div>
            <div class="space_placeholder"></div>
            <input type="submit" name="addcar" value="Add an advertisement" class="btn btn-info btn-sm" data-disable-with="Add an advertisement" style="margin-left: 10px; border-radius: 0.5rem">
            <br>
        </form>
        </tbody>
    </table>
<br>
    <footer class="foot" style="border-top: black solid 2px">
        <h1> populer topics</h1>
        <br>
        <div class="row">
            <div class="column">
                <a  target="_blank" href="Howtoochoosecaradmin.php" style="font-size:20px ;text-decoration: black"><img src="imgs/bmw2.jpg" style="width: 90%"> <p style="position: relative;bottom:0px;padding: 10px">How to choose your car?</p> </a>
            </div>
            <div class="column">
                <a href="electriccarsadmin.php" target="_blank" style="font-size: 20px;text-decoration: black"><img src="imgs/electric.webp" style="width:90%"><p style="position: relative;bottom:0px;padding: 10px">Electric cars</p></a>
            </div>
            <div class="column">
                <a href="caraccidantsadmin.php" target="_blank" style="font-size: 20px;text-decoration: black"><img src="imgs/Accidents.jpeg" style="width:90%"><p style="position: relative;bottom:0px;padding: 10px;">Reasons why car accidents happen. ...</p></a>
            </div>
        </div>

    </footer>
</div>
</body>
</html>