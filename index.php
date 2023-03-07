<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index-responsive.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'nav-bar.php';
    include_once 'box.modal.php';
    ?>
    <main>
        <section class="sec-1">
            <div class="container">
                <div class="cont-first">
                    <div>
                        <p style="text-align: center;" class="first-head">Get your favourite food right now !</p>
                        <p style="text-align: center;font-family: DM Sans;font-size: 23.52px;font-weight: 50;">Choose your favourite food from any shops you like</p>
                        <div class="cont-first-image">
                            <img src="./assets/images/cont-first.jpg" alt="" width="600" height="600">
                        </div>
                    </div>
                </div>

                <div class="cont-second">
                    <div class="cont-second-img">
                        <img src="./assets/images/about-us.jpg" alt="">
                    </div>
                    <div>
                        <p style="text-align: center;" class="first-head">About Us</p>
                        <hr>
                        <p style="font-size: 14px;
                        font-family: Open Sans,Arial,sans-serif;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem sequi excepturi maiores, doloribus deserunt fuga fugiat fugit! Doloribus facilis pariatur id sint ea perferendis illum, praesentium eum animi dicta?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem sequi excepturi maiores, doloribus deserunt fuga fugiat fugit! Doloribus facilis pariatur id sint ea perferendis illum, praesentium eum animi dicta?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem sequi excepturi maiores, doloribus deserunt fuga fugiat fugit! Doloribus facilis pariatur id sint ea perferendis illum, praesentium eum animi dicta?
                        </p>
                        <div>
                            <button class="btn btn-primary">Here to learn more</button>
                        </div>
                    </div>
                </div>

                <div class="cont-third">
                    <div>
                        <p style="text-align: center;" class="first-head">Special Dishes</p>
                    </div>
                    <div class="special-dishes">
                        <div class="item-dishes">
                            <img src="./assets/images/food1.jpg" alt="" width="200" height="200">
                            <p>Menu 1</p>
                        </div>
                        <div class="item-dishes">
                            <img src="./assets/images/food2.jpg" alt="" width="200" height="200">
                            <p>Menu 2</p>
                        </div>
                        <div class="item-dishes">
                            <img src="./assets/images/food3.jpg" alt="" width="200" height="200">
                            <p>Menu 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
 
        </section>
    </main>
    <footer>
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
    </footer>
    <div class="copyright">
        <p>&copy;Vernord Musran 2022-2023</p>
    </div>
</body>
</html>