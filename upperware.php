<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="upperware.css">
</head>
<body>
    <nav class="nav">
        <!-- Logo -->
        <!-- <a href="homepage.php"></a> -->
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
   
    <!-- ShopSection -->
    <div class="shopersection">
        <center><h2 id="firstheading" style="color: aliceblue;margin-top: 0px;">Upperware</h2></center>
        <div class="box1">
            <div class="itemsize">
                <div class="picture item1image">

                </div>
                <div class="desc ">
                    <p>A|X ARMANI EXCHANGE mens Classic  T Shirt</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m1">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m1">
                        </form>
                </div>
            </div>
            <div class="itemsize ">
                <div class="picture item2image">

                </div>
                <div class="desc ">
                    <p>Allen Solly Men's Slim Fit Shirt</p>
                    <p> ₹10,039</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m2">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m2">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item3image">

                </div>
                <div class="desc ">
                    <p>Men's Purple Beast Within Graphic Printed Oversized</p>
                    <p>₹7,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m3">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m3">
                        </form>
                </div>

            </div>
        </div>
        <!-- <center><h2 style="color: aliceblue;">Lowerwear</h2></center> -->
        <div class="box2">
            <div class="itemsize">
                <div class="picture item4image">

                </div>
                <div class="desc ">
                    <p>AVAASA MIX N' MATCH Women Floral Print A-Line Kurta</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w1">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w1">
                        </form>
                </div>
            </div>
            <div class="itemsize ">
                <div class="picture item5image">

                </div>
                <div class="desc ">
                    <p>AVAASA MIX N' MATCH Women Floral Print Flared Kurta</p>
                    <p> ₹10,039</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w2">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w2">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item6image">

                </div>
                <div class="desc ">
                    <p>FUSION Printed Button-Down Straight Kurta</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w3">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w3">
                        </form>
                </div>

            </div>
        </div>
        <!-- <center><h2 style="color: aliceblue;">Footwear</h2></center> -->
        <div class="box3">
            <div class="itemsize">
                <div class="picture item7image">

                </div>
                <div class="desc ">
                    <p>Boys Regular Fit Self Design Cut Away Collar Casual Shirt</p>
                    <p>₹4940</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c1">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c1">
                        </form>
                </div>
            </div>
            <div class="itemsize ">
                <div class="picture item8image">

                </div>
                <div class="desc ">
                    <p>Boys Regular Fit Washed Mandarin Collar Casual Shirt</p>
                    <p> ₹5,039</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c2">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c2">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item9image">

                </div>
                <div class="desc ">
                    <p>Boys Washed Denim Jacket</p>
                    <p>₹7,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c3">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c3">
                        </form>
                </div>

            </div>
        </div>
    </div>
    <script src="darkmode.js"></script>
    
</body>
</html>