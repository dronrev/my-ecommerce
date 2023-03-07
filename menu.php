<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index-responsive.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <script src="add-to-cart.js" defer></script>
    <script src="get-food.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <label for="" class="brand">NegusZ</label>
            <ul>
             <li><a href="menu.php" class="nav-bar">Menu</a></li>
             <li><a href="" class="nav-bar">Location</a></li>
             <li><a href="" class="nav-bar">Our Story</a></li>
             <li><a href="" class="nav-bar">Shop</a></li>
             <li><a href="" class="nav-bar">Contact Us</a></li>
             <li><button class="nav-bar sign-in"><a href="" >Login</a></button></li>
            </ul>
            
         </nav>
    </header>
    <main class="main-page-menu">
        <ul class="food-menu">
            <li><a href="">Main Courses</a></li>
            <li><a href="">Starters</a></li>
            <li><a href="">Salads</a></li>
            <li><a href="">Desserts</a></li>
            <li><a href="">Drinks</a></li>
        </ul>
        <section class="food-list" id="div1">
            <div class="card">
                <img src="./assets/images/food1.jpg" alt="bro" width="150" height="200">
                <div class="food-name">
                    <p class="food-name-title">Nasi Lemak</p>
                    <p>My Description</p>
                    <p>RM 6.50</p>
                    <button  class="order-button">Add to Cart</button>
                </div>
            </div>
        </section>
        <button class="add-menu" hidden><a href="add-menu.html">ADD NEW MENU</a></button>
        <div class="cart">
            <button>+</button>
        </div>
    </main>
    <!--footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <p>Company</p>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Our Services</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <p>Get Help</p>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Order Status</a></li>
                        <li><a href="">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <p>Food</p>
                    <ul>
                        <li><a href="">a</a></li>
                        <li><a href="">b</a></li>
                        <li><a href="">c</a></li>
                        <li><a href="">d</a></li>
                    </ul>
                </div>
                <div class="footer-col"><p>Follow Us</p>
                    <ul>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                    </ul>
                </div>
            </div>
        </div>
    </!--footer>
    <div-- class="copyright">
        <p>&copy;Vernord Musran 2022-2023</p>
    </div-->
</body>
</html>