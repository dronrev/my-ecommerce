<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index-responsive.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="add-food.css">
    <script src="add-new-menu.js" defer></script>
    <script src="get-food.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <label for="" class="brand">NegusZ</label>
            <ul>
             <li><a href="menu.html" class="nav-bar">Menu</a></li>
             <li><a href="" class="nav-bar">Location</a></li>
             <li><a href="" class="nav-bar">Our Story</a></li>
             <li><a href="" class="nav-bar">Shop</a></li>
             <li><a href="" class="nav-bar">Contact Us</a></li>
             <li><button class="nav-bar sign-in"><a href="" >Login</a></button></li>
            </ul>
            
         </nav>
    </header>
    <main>
        <div class="container">
            <div class="add-form">
                <form action="">
                    <div class="form-title">
                        <p>Food Information</p>
                    </div>
                    <div class="food-add-form">
                        <div class="food-name">
                            <label for="">Food Name</label>
                            <input type="text" id="prod-name">
                        </div>

                        <div class="food-desc">
                            <label for="">Food Description</label>
                            <textarea name="" id="prod-desc" cols="30" rows="10"></textarea>
                        </div>

                        <div class="food-cat">
                            <label for="">Category</label>
                            <select name="" id="prod-cat">
                                <option value="main_courses">Main Courses</option>
                                <option value="starters">Starters</option>
                                <option value="salads">Salads</option>
                                <option value="desserts">Desserts</option>
                                <option value="drinks">Drinks</option>
                            </select>
                        </div>
    
                        <div class="food-price">
                            <label for="">Price</label>
                            <input type="text" id="prod-price">
                        </div>
                    </div>
                    <div class="add-button">
                        <button type="button" onclick="addName()">Add New Food</button>
                    </div>
                </form>
            </div>
            <div class="image-form">
                <div class="add-image">
                    <div class="button-add-image">
                        <button>+</button>
                    </div>
                </div>
                <!--img src="assets/images/food1.jpg" alt="" width="300" height="300"-->
            </div>
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