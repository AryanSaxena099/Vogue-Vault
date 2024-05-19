<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footwear.css">
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
   
    <!-- ShopSection -->
    <div class="shopersection">
    <!-- <center><h2 style="color: aliceblue;"></h2></center>     -->
    <center><h2 id="firstheading" style="color: aliceblue;margin-top: 0px;">Footwear</h2></center>
        <div class="box1">
            <div class="itemsize ">
                <div class="picture item1image">

                </div>
                <div class="desc ">
                    <p>NIKE Women Air Max Excee Lace-Up Sneakers</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w7">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w7">
                        </form>
                </div>
                
            </div>
            <div class="itemsize ">
                <div class="picture item2image">

                </div>
                <div class="desc ">
                    <p>Liberty Women Blue Solid Thong Flip-Flops</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w8">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w8">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item3image">

                </div>
                <div class="desc ">
                    <p>House of Pataudi Women Beige & Gold-Toned Embellished Handcrafted Mojaris</p>
                    <p>₹15,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="w9">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="w9">
                        </form>
                </div>

            </div>
        </div>
        <!-- <center><h2 style="color: aliceblue;">Lowerwear</h2></center> -->
        <div class="box2">
            <div class="itemsize ">
                <div class="picture item4image">

                </div>
                <div class="desc ">
                    <p>Boys Black & Red Softride Rift Pop Youth Walking Shoes</p>
                    <p>₹5,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c7">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c7">
                        </form>
                </div>
                
            </div>
            <div class="itemsize ">
                <div class="picture item5image">

                </div>
                <div class="desc ">
                    <p>Boys Mesh Running Lace-Up Shoes</p>
                    <p>₹6,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c8">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c8">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item6image">

                </div>
                <div class="desc ">
                    <p>	
                        Boys Yodha-05 Running Shoes</p>
                    <p>₹8,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="c9">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="c9">
                        </form>
                </div>

            </div>
        </div>
        
        <div class="box3">
            <div class="itemsize ">
                <div class="picture item7image">

                </div>
                <div class="desc ">
                    <p>Naruto: Split Sneakers
                        Men High Top Sneakers</p>
                    <p>₹9,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m7">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m7">
                        </form>
                </div>
                
            </div>
            <div class="itemsize ">
                <div class="picture item8image">

                </div>
                <div class="desc ">
                    <p>Batman: The Dark Knight 2.0
                        Men High Top Sneakers</p>
                    <p>₹12,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m8">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m8">
                        </form>
                </div>

            </div>
            <div class="itemsize ">
                <div class="picture item9image">

                </div>
                <div class="desc ">
                    <p>	
                        Air Jordan 1 Mid Armory Navy</p>
                    <p>₹18,000</p>
                    <form action="addtocart.php" method="post">
                        <button type="submit" name="addtocart">Add to Cart</button>
                        <input type="hidden" name="pid" value="m9">
                        </form>
                        <br>
                        <form action="removecart.php" method="post">
                        <button type="submit" name="removefromcart">Remove </button>
                        <input type="hidden" name="pid" value="m9">
                        </form>
                </div>

            </div>
        </div>
    </div>
    <script src="darkmode.js"></script>
</body>
</html>