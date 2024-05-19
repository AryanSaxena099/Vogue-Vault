<?php
$servername="localhost";
$username="root";
$password= "";
$db_name="voguevault";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
echo"successfull";
if(isset($_POST['removefromcart'])){
    $pid=$_POST['pid'];
    $sql= "select * from cart where pid='$pid'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row)
    {
        $sql= "delete from cart where pid='$pid'";
        $result= mysqli_query($conn,$sql);
            echo '<script>
            alert("Removed from Cart");
            window.location.href="cart.php";
            </script>';
    }
    else
    {
        echo'<script>
        alert("Item not present in Cart");
        window.location.href="cart.php";
        </script>';
    }
    
}

?>