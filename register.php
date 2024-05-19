<?php
if(isset($_POST['submit']))//submit is the name of the button 
{
    include "connection.php";
    $username=mysqli_real_escape_string($conn,$_POST['username']);//to prevent SQL injection ,if a user(hacker) enters special character in order to stop the database from working.
    $password=mysqli_real_escape_string($conn,$_POST['password']);//$_POST['password'] password is name
    $repassword=mysqli_real_escape_string($conn,$_POST['repassword']);
    $phoneno=mysqli_real_escape_string($conn,$_POST['phoneno']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    // $gender=$_POST['gender'];
    $desc=mysqli_real_escape_string($conn,$_POST['desc']);

    $sql= "select * from userdetail where username='$username'";
    $result= mysqli_query($conn,$sql);//result of quey stored in $result
    $count_user = mysqli_num_rows($result);//no of rows returned from query
    
    if($count_user== 0){
        if($password==$repassword)
        {
            $sql= "insert into userdetail(username,password,phone,email,address) values('$username','$password',' $phoneno',' $email','$desc')";
            $result= mysqli_query($conn,$sql);
            echo '<script>
            alert("registered successfully");
            </script>';
        }
        else{
            echo '<script>
            alert("password do not match");
            </script>';
        }

    }
    else{
        echo '<script>
        alert("user already exist !!!");
        window.location.href="signin.php";
        </script>';
        // 
    }
}  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <nav class="nav">
        <!-- Logo -->
        <div class="logo">

        </div>
        <!-- Categories -->
        <div class="category">
            <div class="men navmargin">
                <a href="men.php" class="nodecoration">Men</a>
            </div>
            <div class="women navmargin">
                <a href="women.php" class="nodecoration">Women</a>
            </div>
            <div class="children navmargin">
                <a href="child.php" class="nodecoration">Children</a>
            </div>

            <!-- Searchbar -->
            <div class="SearchBar navmargin">
                <select class="option">
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <input type="text" placeholder="Search VogueValt.in" class="searchplaceholder">
                <div class="magnifying">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <!-- Sign in -->
            <div class="signin  navmargin">
                <a href="signin.php" class="nodecoration">Sign in</a>
            </div>

            <div class="mode navmargin">
                Mode
                <i class="fa-solid fa-circle-half-stroke"></i>
            </div>
            <div class="navmargin">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="font-size:25px; color:white;"></i></a>
        </div>
        </div>
    </nav>

    
   <div class="container">

    <div class="item">
        <form action="register.php" method="POST" id="form">
            <span class="mainheading"><h1>Welcome    </h1></span>
            <label for="username"> Username: -</label>
            <input type="text" placeholder="enter  username"name="username"id="username">
            <br>
            <br>
            <label for="pass"> Password: -</label>
            <input type="password" placeholder="enter password"name="password"id="pass">
            <br>
            <br>
            <label for="repass">Re-Password: -</label>
            <input type="password" placeholder="enter password again"name="repassword"id="repass">
            <br>
            <br>
            <label for="pno"> Phone No: -</label>
            <input type="text" placeholder="enter Number"name="phoneno"id="pno">
            <br>
            <br>
            <label for="email"> Email Id: -</label>
            <input type="text" placeholder="enter email id"name="email"id="email">
            <br>
            <br>
             
            <label for="desc" >Address :</label><br>
            <textarea id="desc" name="desc" rows="10" cols="30">Enter full address...
            </textarea>
            <br>
            <br>
            <CENTER><input type="reset" name="reset" value="Reset"> <input type="submit" value="Submit" name="submit"></CENTER>
            <br>
            <br>
             </form>
    </div>
   </div>
    <script src="register.js"></script>
</body>
</html>