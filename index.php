<?php
    $insert="false";
if(isset($_POST["name"])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed to DB".mysqli_connect_error());
}
$submit=true;
$name=$_POST["name"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$other=$_POST["desc"];
// echo "Success";
$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;
if($con->query($sql) == true){
    // echo "Successfully";
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Oswald:wght@200&family=Roboto:ital,wght@1,300&display=swap"
        rel="stylesheet">
</head>

<body>
    <img class="bg" src="photo1.jpg" alt="photo">
    <div class="container">
        <h3>WELCOME TO IIT ROORKIE<h3>
                <p>Enter your Details and submit the form</p>
                <?php
                if($insert == true){
                    echo "<p class='submitmsg'>Thanks for submitting your form</p>";
                }
                
                ?>
                <form action="index.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                    <input type="text" name="age" id="age" placeholder="Enter your age">
                    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="phone" name="phone" id="phone" placeholder="Enter your number">
                    <textarea name="desc" id="desc" cols="30" rows="10"
                        placeholder="Enter any other information here"></textarea>
                    <button class="btn">Submit</button>
                    <button class="btn">Reset</button>
    </div>


    </form>
    <script src="script.js"></script>
</body>

</html>
