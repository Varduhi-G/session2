<?php
session_start();



    if(isset($_POST['submit'])){
        $dir = "images/";
        $file = $dir . basename($_FILES["img"]['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $file);
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date']) && !empty($_POST['email'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $date = $_POST['date'];
            $email = $_POST['email'];
        }else{
            echo "<div class='alert alert-danger'> All fields required!</div>";
            exit;
        }


    }

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['date'] = $date;
$_SESSION['email'] = $email;

echo $fname . $lname . $date . $email;




?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ededed">

    <div class="container mx-auto text-center" style="width: 40%; margin-top: 10%; background-color: #fff; padding: 20px; border-radius: 5px">
        <img style="width:100px; height:100px;border-radius: 50%;" src="<?=$file?>" alt="img">
        <p>Your First Name: <?= $fname ?></p>
        <p>Your Last Name: <?= $lname ?></p>
        <p>Your Birth Day: <?= $date ?></p>
        <p>Your Email: <?= $email ?></p>
    </div>

</body>
</html>