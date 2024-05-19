<?php
if(isset($_POST['submit']))
{
     include "connection.php";
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    

    $sql= "select * from userdetail where username='$username'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row)
    {
        if($password==$row["password"])
        {
            echo '<script>
            alert("login successfully ");
            </script>';
        }
        else
        {
            echo '<script>
            alert("incorrect password ");
            </script>';
        }
    }
    else
        {
            echo '<script>
            alert("invalid user name ");
            </script>';
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
    <!-- <link rel="stylesheet" href="signin.css"> -->
    <style>
        .logo{
    background-image: url(VogueVault.jpg);
    background-size: cover;
    width: 158px;
    height: 120px;
    margin-right: 100px;
}
.nav{
    display: flex;
    height: 125px;
    background-color: black;
    
}
.navmargin{
    margin-left: 80px;
}
.category
{
    display:flex;
    align-items: center;
    
}
.men ,.women,.children{
    font-family:  'Lucida Sans Unicode';
    font-weight: 500;
    font-size: 18px;       
}
.nodecoration{
    text-decoration: none;
    color: aliceblue;
}
.fa-magnifying-glass{
    color: white;
}
.magnifying{
    display: inline;
    /* background-color: black; */
    
}
.SearchBar
{
    border: 2px solid white;
    border-radius: 4px;
    width: 255px;
    
}
.searchplaceholder{
    width: 200px;
}

.signin{
    color: white;
}
.signin{
    border-bottom: 5px solid rgb(5, 242, 226);
    line-height: 110px;
}

.mode{
    color: white;
    font-family:  'Lucida Sans Unicode';
    font-weight: 500;
    font-size: 18px;
}

/* LOGIN FORM */
.form{
    margin-left: 35%;
    margin-top: 8%;
    border: 2px solid black;
    width: 30%;
}
#formhead{
    text-align: center;
}
.loginflex{
    height: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
}
body{
    background-color: rgb(245, 245, 180);
}
        </style>
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
            <div class="signin men navmargin">
                <a href="" class="nodecoration">Sign in</a>
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

    
    <div class="form">
        <form action="signin.php" method="POST">
            <div id="formhead">
                <h1>Signin</h1>
            </div>
            <div class="loginflex">
                <div>
                    <label for="username">Enter Username</label>
                    <input type="text" id="username" name="username" placeholder ="Enter your username" autofocus>
                </div>
                
                <div>
                    <label for="password">Enter Password</label>
                    <input type="password" id="password" name="password" placeholder ="Enter your password">
                </div>
                
                <div>
                <input type="submit" value="Submit" name="submit" >
                </div>
                <div>
                    New here?
                    <a href="register.php"> Register now</a>
                </div>
                <div>
                Update Username ?
                    <a href="update.php"> Update now</a>
                </div>

            </div>
    </div>
    
       
        
    </form>
    <script src="signin.js"></script>
</body>
</html>