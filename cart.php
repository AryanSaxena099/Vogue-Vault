<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <nav class="nav" id="top">
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

    
    <div class="cart">
        <h2>Your Cart</h2> 
        <div>
            <?php
                $sql = "SELECT * from product natural join cart";
                $result = mysqli_query($conn, $sql);//The mysqli_query() function sends the query to the database server ($conn) and returns a result set ($result).
                
                if (mysqli_num_rows($result) > 0) {//This condition checks if the result set contains one or more rows. 
                    echo "<table>";
                    echo "<tr><th>Product ID</th><th>Product Name </th><th>Price</th><th>Seller</th></tr>";
                    
                    while ($row = mysqli_fetch_assoc($result)) {//mysqli_fetch_assoc() function fetches the current row as an associative array ($row), has key value pair for accessing
                        echo "<tr>";
                        echo "<td>" . $row["pid"] . "</td>";
                        echo "<td>" . $row["pname"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                        echo "<td>" . $row["seller"] . "</td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                } 
                else {
                    echo "0 results";
                }
                    
            ?>
        </div>
        <div>
                <?php
                    $sql1 = "SELECT SUM(price) as p1 FROM (SELECT price FROM product NATURAL JOIN cart) AS derived_table";
                    $result1 = mysqli_query($conn, $sql1); 
                    
                    if ($result1) {
                        $row = mysqli_fetch_assoc($result1);
                        $total = $row['p1'];
                        echo "Total: $total";
                    } else {
                        echo "Error executing query: " . mysqli_error($conn);
                    }
                ?>
        </div>

    </div>
