<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./index-responsive.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./css/modal.box.css">
    <script src="add-to-cart.js" defer></script>
    <!--script src="get-food.js" defer></!--script-->
    <script src="./js/modal.box.js" defer></script>
    <script src="search-food.js" defer></script>
    <title>Menu</title>
</head>
<body>
    <?php
    include_once './nav-bar.php';
    include_once './box.modal.php';
    ?>

    <main class="main-page-menu">
        <ul class="food-menu">
            <li><a href="#" onclick="clearFilter()">All</a></li>
            <li><a href="#MainCourses" onclick="filterMainCourse('Main Courses')">Main Courses</a></li>
            <li><a href="#starters" onclick="filterMainCourse('Starters')">Starters</a></li>
            <li><a href="#salads" onclick="filterMainCourse('Salads')">Salads</a></li>
            <li><a href="#desserts" onclick="filterMainCourse('Desserts')">Desserts</a></li>
            <li><a href="#drinks" onclick="filterMainCourse('Drinks')">Drinks</a></li>
            <li>
                <div class="search-bar">
                    <input type="search" data-search-input>
                </div>
            </li>
        </ul>
        <section class="food-list" id="div1" data-food-container>
            <!--div class="card">
                <img src="./assets/images/food1.jpg" alt="bro" width="150" height="200">
                <div class="food-name">
                    <p class="food-name-title">Nasi Lemak</p>
                    <p>My Description</p>
                    <p>RM 6.50</p>
                    <button  class="order-button">Add to Cart</button>
                </div>
            </!--div-->
            <!--?php
                include_once './backend/get-all-food.php';
            ?-->
            <template data-user-template>
            <div class="card">
                <img src="./assets/images/food1.jpg" alt="bro" width="150" height="200">
                <div class="food-name">
                    <p class="food-name-title" data-food-title></p>
                    <p data-food-description></p>
                    <p data-food-price>RM 6.50</p>
                    <button  class="order-button">Add to Cart</button>
                </div>
            </div>
            </template>
        </section>
        <button class="add-menu" hidden><a href="add-menu.html">ADD NEW MENU</a></button>
        <!--div class="cart">
            <button>+</button>
        </!--div-->
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
</div>
</body>
</html>