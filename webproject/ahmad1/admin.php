<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="page2.css">
    <link rel="stylesheet" href="userpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin page</title>
</head>
<body style="overflow: hidden">
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

<main class="container" style="left: 0;">
    <p>This website </p>
    <section class="animation">
        <div class="first"><div>best choice</div></div>
        <div class="second"><div>simple</div></div>
        <div class="third"><div>for free</div></div>

    </section>
</main>
<div class="div11">
    <a href="users.php" class="anchor" style="position: relative;left: 300px;top: 0px;font-size: 35px">users</a>
    <a href="addacar.php" class="anchor" style="position: relative;left: 550px;top:0px;font-size: 35px">add a car</a>
    <a href="requests.php" class="anchor" style="position: relative;left: 800px;top:0px;font-size: 35px">requsts</a>

    <p style="position: relative;left: 300px;top:50px;color: white;font-size: 20px">- click user to see the users of this website.</p>
    <p style="position: relative;left: 300px;top:70px;color: white;font-size: 20px">- click add a car if you want to post a new car.</p>
    <p style="position: relative;left: 300px;top:90px;color: white;font-size: 20px">- click requests if you want to see what the users want to post.</p>

</div>

</body>
</html>