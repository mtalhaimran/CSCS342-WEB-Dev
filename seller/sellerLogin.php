<?
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styling%20files/login_style.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->


              <div class="fadeIn first">
                <img src="../styling%20files/pharma.webp" id="icon" alt="User Icon" />
              </div>

        <!-- Login Form -->
        <form method="POST">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="User Name">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" name="bLogin" class="fadeIn fourth" value="Log In">
            <input type="button" value="Sign Up" onclick="window.location.href='../signupform.php'" >
        </form>

        <!-- Remind Passowrd -->
        <!--      <div id="formFooter">-->
        <!--        <a class="underlineHover" href="#">Forgot Password?</a>-->
        <!--      </div>-->

    </div>
</div>
<?php
//$conn = new mysqli("localhost", "root", "","project");
//
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

    include ("../Database/database.php");

    $conn = OpenCon();
    echo "Connected Successfully";

    print_r($_POST);
//    if (isset($_POST["bLogin"])) {
//        $username=$_POST["username"];
//        $password=$_POST["password"];
//
//        $sql="SELECT EXISTS(SELECT * FROM seller WHERE username LIKE '%$username%'and password LIKE '%$password%' LIMIT 1)";
//        $result = $conn->query($sql);
//
//        if ($result->num_rows > 0) {
//            // output data of each row
//            while($row = $result->fetch_assoc()) {
//                print_r($row);
//                echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. "Username: " . $row["username"]. "<br>";
//            }
//        } else {
//            echo "0 results";
//        }
//
//    }

    if (isset($_POST["bLogin"])) {

        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql = "SELECT EXISTS(SELECT * FROM seller WHERE username LIKE '%$username%'and password LIKE '%$password%' LIMIT 1)";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result)){
                    echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. "Username: " . $row["username"]. "<br>";
                }
                // Close result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

    }


   CloseCon($conn);
?>
</body>
</html>


