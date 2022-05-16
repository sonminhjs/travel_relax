<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurent Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="img/logo1.jpg" alt="logo1">
        </div>
        <div class="right-nav">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="cart.php">Cart</a></li>
                <li class="item"><a href="admin.php">Admin</a></li>
                <li class="item"><a href="bookinghall.php">Booking</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="logout.php">Logout</a></li>


            </ul>
        </div>
    </nav>
    <!-- ----------  Home --------------------- -->
    <section id="home">
        <h1 class="h1">Welcome to Restaurent Management System</h1>
        <!-- <p class="p">Hotel rooms have <span class="span">everything you need for a pleasant stay</span> : large comfortable beds covered with special bedspreads that get made by themselves, and bathrooms that are clean and shiny.</p><br>
        <p class="p">Hotel rooms are known for having terraces with <span class="span">views that are perfect for enjoyment</span> views that are perfect for enjoyment.</p> -->

    </section>

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">A.C Delux Room</p>
            <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 1100$.</p>
            <!-- <p class="price">Price per room : 1100$/-</p> -->
            <a href="about.php"><button style="border-radius: 5px;cursor: pointer;" class="price-btn ">Read more</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
            <p class="sectionTag">A.C. Room</p>
            <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 900$.</p>
            <!-- <p class="price">Price per room : 900$/-</p> -->
            <a href="about.php"><button style="border-radius: 5px;cursor: pointer;" class="price-btn">Read more</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/ac4.jpg" alt="delux" class="imgFluidd">
        </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">Non A.C. Room</p>
            <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 700$.</p>
            <!-- <p class="price">Price per room : 700$/-</p> -->
            <a href="about.php"><button class="price-btn" style="border-radius: 5px;cursor: pointer;">Read more</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/nonacroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/manchu.png" alt="manchurion"></a>
                <h2 class="h-secondary center">Chinese</h2>
                <p class="center">China's culinary culture is extremely diverse and unique, but it still retains the unique characteristics of each region, rich and has a great influence on the cuisine of other countries in the region.
                    The dish must be delicious, beautiful, have the sweetest aroma, still have the fresh taste of ingredients, attractive and impressive presentation.
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/pasta.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italian</h2>
                <p class="center">Italian cuisine has a wide variety of commonly used ingredients, from fruits, sauces, meats, and more. In Northern Italy, fish (such as cod), potatoes, rice, corn, sausages, pork, and various cheeses are the most common ingredients. Pasta dishes using tomatoes are popular throughout Italy ,Italian food is really great, you should try it.</p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/shushi.jpg" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Germany</h2>
                <p class="center">German cuisine has evolved into a national cuisine through centuries of social and political change with variations from region to region. Cuisine in Germany is very diverse and varies from region to region.
                    The southern regions of Germany, including Bavaria and neighboring Schwaben, have many similar cuisines. However, the ingredients and dishes vary by region.</p>
            </div>
        </div>

        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/panner.png" alt="panner"></a>
                <h2 class="h-secondary center">Japan</h2>
                <p class="center">Japanese cuisine is the cuisine originating from Japan. Japanese cuisine does not abuse too many spices, but focuses on highlighting the fresh, pure, natural flavors of the dish. The taste of Japanese food is usually ethereal, gentle and suitable for each season. Due to the geographical location surrounded by the sea on all sides, seafood and seaweed make up the majority of the Japanese diet. The main food of the Japanese is rice.
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/dosa.png" alt="dosa"></a>
                <h2 class="h-secondary center">South-Indian</h2>
                <p class="center">Indian cuisine is characterized by the use of spices, other herbs and vegetables and sometimes fruit grown in India and also by the popular vegetarian diet in some parts of the society. Indian Association, Each region in India has its own culinary characteristics and cooking techniques. As a result, vegetal styles vary by region, reflecting the diverse demographics of the ethnically diverse Indian subcontinent.</p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/faluda.png" alt="faluda"></a>
                <h2 class="h-secondary center">VietNam</h2>
                <p class="center">Vietnamese cuisine is the name of the cooking method, the principle of mixing spices and the general eating habits of the Vietnamese community and the Vietnamese ethnic groups in Vietnam. Although there are many differences, Vietnamese cuisine still contains the most general meaning to refer to all the dishes that are popular in the ethnic minority community but have been relatively popular in the Vietnamese community.</p>
            </div>
        </div>

    </section>


    <section id="booking-hall">
        <h1 class="h1">Party And Marriage Halls</h1>
        <button id="book-btn" style="border-radius: 5px;"><a href="bookinghall.php"> Book a hall</a></button>

    </section>
    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>About us</h3>
                    <!-- <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason</p> -->
                    <p>Coming to our hotel, you will experience wonderful things that you can hardly find anywhere else, come and experience it right away.</p>
                </div>
                <div class="footer-center">
                    <h3>Usefull Links</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="bookinghall.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>Contact Info</h3>
                    <p>Viet Nam, Ha Noi <br>HK plaza relax <br>+84 9999999 <br></p>
                </div>
                <div class="footer-center">
                    <h3>Openning Hours</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7Am - 12Pm
                    </div>

                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7Am - 12Pm
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }
        }

        function forgotPopup() {
            document.getElementById('login-popup').style.display = "none";
            document.getElementById('forgot-popup').style.display = "flex";
        }
    </script>
</body>

</html>