<?php
include('header.php');
include('dbcon.php');
session_start();

?>
<style>
    .food-nav {
        display: flex;
        width: 100%;
        margin-top: 30px;
        position: sticky;
        top: 0px;
        background-color: crimson;
        border-radius: 50px;

    }

    .food-nav ul {
        display: flex;
        padding: 10px;
        align-items: center;
        justify-content: center;
        margin-left: 50px;
    }

    .food-nav ul li {
        list-style: none;
        padding: 10px;
        text-align: center;
        margin-left: 70px;
    }

    .food-nav ul li:hover {
        background-color: white;
        color: white;
        border-radius: 10px;
    }

    .food-nav ul li a {
        text-decoration: none;
        font-size: 20px;
        text-align: center;
        color: black;
        font-weight: 700;
    }

    .food-h {
        display: flex;
        justify-content: center;
        font-size: 50px;
        font-weight: 600;
        background-color: yellow;
        margin: 30px;
        padding: 15px;
        width: 200px;
    }
</style>
<nav class="food-nav">
    <ul>
        <li><a href="#south">Ấn Độ</a></li>
        <li><a href="#italian">Italia</a></li>
        <li><a href="#mah">Đức</a></li>
        <li><a href="#punjabi">Nhật Bản</a></li>
        <li><a href="#chinese">Trung Quốc</a></li>
        <li><a href="#deserts">Việt Nam</a></li>
    </ul>
</nav>

<div class="container">
    <!-- ----------------------------------- South Indian-------------------------- -->
    <div class="food-h">Ấn Độ</div>
    <div class="row" id="south">

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/dosa.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Dosa</h5>
                        <p class="card-text">Giá : 500.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Dosa">
                        <input type="hidden" name="price" value="500000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/idli.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Idli Sambhar</h5>
                        <p class="card-text">Giá: 400.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Idli">
                        <input type="hidden" name="price" value="400000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/masakadosa.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Masala Dosa</h5>
                        <p class="card-text">Giá : 600.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Masala Dosa">
                        <input type="hidden" name="price" value="600000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/cheesedosa.jpg" alt="cheese dosa">
                    <div class="card-body">
                        <h5 class="card-title">Cheese Dosa</h5>
                        <p class="card-text">Giá: 600.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Cheese Dosa">
                        <input type="hidden" name="price" value="600000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/onion.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Onion Utthapa</h5>
                        <p class="card-text">Giá: 550.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="onion Utthapa">
                        <input type="hidden" name="price" value="550000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/vadasambhar.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Vada Sambhar</h5>
                        <p class="card-text">Giá: 600.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Vada Sambhar">
                        <input type="hidden" name="price" value="600000">
                    </div>
                </div>
            </form>
        </div>


    </div>
    <!-- ================================== Italian===================================== -->
    <div class="food-h">Italia</div>
    <div class="row" id="italian">

        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/chillipasta.jpg" alt="pasta">
                    <div class="card-body">
                        <h5 class="card-title">Chilli Pasta</h5>
                        <p class="card-text">Giá: 1.000.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Chili Pasta">
                        <input type="hidden" name="price" value="1000000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/burger.jpg" alt="Burger">
                    <div class="card-body">
                        <h5 class="card-title">Veg Cheese Burger</h5>
                        <p class="card-text">Giá: 550.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Burger">
                        <input type="hidden" name="price" value="550000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/pasta.png" alt="pasta">
                    <div class="card-body">
                        <h5 class="card-title">Pasta</h5>
                        <p class="card-text">Giá : 800.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Pasta">
                        <input type="hidden" name="price" value="800000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/pizza.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Pizza</h5>
                        <p class="card-text">Giá: 1.250.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Pizza">
                        <input type="hidden" name="price" value="1250000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/margereta.jpg" alt="margereta">
                    <div class="card-body">
                        <h5 class="card-title">Margereta</h5>
                        <p class="card-text">Giá: 750.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Margereta">
                        <input type="hidden" name="price" value="750000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/capsi.jpg" alt="capsi">
                    <div class="card-body">
                        <h5 class="card-title">New Capsi Pizza</h5>
                        <p class="card-text">Giá: 800.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Capsi Pizza">
                        <input type="hidden" name="price" value="800000">
                    </div>
                </div>
            </form>

        </div>



    </div>
    <!-- ------------------------------------Mah------------------------------------------- -->
    <div class="food-h">Đức</div>
    <div class="row" id="mah">

        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/handi.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Veg Handi</h5>
                        <p class="card-text">Giá: 500.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Handi">
                        <input type="hidden" name="price" value="500000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/maratha.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Veg Maratha</h5>
                        <p class="card-text">Giá: 700.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Maratha">
                        <input type="hidden" name="price" value="700000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/mah.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">maharashtrian specian Thali</h5>
                        <p class="card-text">Giá: 1.800.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="maharshtra thali">
                        <input type="hidden" name="price" value="1800000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/sandwich.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Sandwich</h5>
                        <p class="card-text">Giá: 300.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="sandwich">
                        <input type="hidden" name="price" value="300000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/panner.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Butter Masala</h5>
                        <p class="card-text">Giá: 750.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Paneer">
                        <input type="hidden" name="price" value="750000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/frenchfries.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">Giá: 750.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="French Fries">
                        <input type="hidden" name="price" value="750000">
                    </div>
                </div>
            </form>

        </div>



    </div>
    <!-- ---------------------------------------punjabi------------------------------------ -->
    <div class="food-h">Nhật Bản</div>
    <div class="row" id="punjabi">

        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/paneer-tikka.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Tikka</h5>
                        <p class="card-text">Giá: 1.000.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Tikka">
                        <input type="hidden" name="price" value="1000000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/shai.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Shai Paneer</h5>
                        <p class="card-text">Giá: 500.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Shai Paneer">
                        <input type="hidden" name="price" value="500000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/paratha.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Paratha</h5>
                        <p class="card-text">Giá: 800.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Paneer Paratha">
                        <input type="hidden" name="price" value="800000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/paneer3.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Butter Masala</h5>
                        <p class="card-text">Giá: 700.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Paneer">
                        <input type="hidden" name="price" value="700000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/panner.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Gravy</h5>
                        <p class="card-text">Giá: 200.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Paneer Gravy">
                        <input type="hidden" name="price" value="200000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/thartarat.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Veg Thartarat</h5>
                        <p class="card-text">Giá: 650.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Thartarat">
                        <input type="hidden" name="price" value="650000">
                    </div>
                </div>
            </form>

        </div>



    </div>
    <!-- ------------------------------------------chinese-------------------------- -->
    <div class="food-h">Trung Quốc</div>
    <div class="row" id="chinese">

        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/paneerchilli.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Chili</h5>
                        <p class="card-text">Giá: 350.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Paneer Chili">
                        <input type="hidden" name="price" value="350000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/manchu.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Manchurion</h5>
                        <p class="card-text">Giá: 450.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Manchurion">
                        <input type="hidden" name="price" value="450000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/sezwan.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Sezwan Rice</h5>
                        <p class="card-text">Giá: 850.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Sezwan">
                        <input type="hidden" name="price" value="850000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/nood.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Veg Dry Noodles</h5>
                        <p class="card-text">Giá: 500.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Dry Noodels">
                        <input type="hidden" name="price" value="500000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/momo.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Boiled Momos</h5>
                        <p class="card-text">Giá: 650.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Momos">
                        <input type="hidden" name="price" value="650000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/hakka.jpg" alt="hakks">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Butter Masala</h5>
                        <p class="card-text">Giá: 550.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">+ Thêm</button>
                        <input type="hidden" name="item_name" value="Hakka">
                        <input type="hidden" name="price" value="550000">
                    </div>
                </div>
            </form>

        </div>



    </div>
    <!-- ---------------------------------------------deserts---------------------------------- -->
    <div class="food-h">Việt Nam</div>
    <div class="row" id="deserts">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/faluda.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Faluda</h5>
                        <p class="card-text">Giá: 450.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Faluda">
                        <input type="hidden" name="price" value="450000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/chocochips.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Choco Chips Ice-cream</h5>
                        <p class="card-text">Giá: 300.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Chocochips">
                        <input type="hidden" name="price" value="300000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/cmilkshake.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Milkshake</h5>
                        <p class="card-text">Giá: 550.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Chocolate Milk">
                        <input type="hidden" name="price" value="550000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/mangomilk.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Mango Milk Shake</h5>
                        <p class="card-text">Giá: 630.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Mango Milk">
                        <input type="hidden" name="price" value="6300000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/vanila.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Vanilla Ice-cream</h5>
                        <p class="card-text">Giá: 150.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Vanila icecream">
                        <input type="hidden" name="price" value="150000">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="img/strawberry.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Strawberry Ice-Cream</h5>
                        <p class="card-text">Giá: 100.000đ</p>
                        <button type="submit" name="add_to_cart" class="btnn">Thêm vào Giỏ</button>
                        <input type="hidden" name="item_name" value="Strawberry ice-cream">
                        <input type="hidden" name="price" value="100000">
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
</body>

</html>