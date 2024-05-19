<?php
$servername="localhost";
$username="root";
$password= "";
$db_name="voguevault";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
// echo"successfull";
if(isset($_POST['addtocart']))
{
    $pid=$_POST['pid'];
    $sql= "select * from cart where pid='$pid'";
    $result= mysqli_query($conn,$sql);
    $count_user = mysqli_num_rows($result);
    if($count_user== 0)
    {
        $sql= "insert into cart(pid) values('$pid')";
        $result= mysqli_query($conn,$sql);
            echo '<script>
            alert("Added to Cart");
            window.location.href="homepage.php";
            </script>';
    }
    else{
        echo'<script>
        alert("Already added to cart");
        window.location.href="homepage.php";
        </script>';
    }
}

?>
 <!-- window.location.href="cart.php"; -->