<?php
include('dbcon.php');
include('header.php');

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

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">A.C Delux Room</p>
            <p class="sectionsubTag font">
                This is the most luxurious room with us, it is located on the 8th floor, with sea view, early sunshine direction, warm winter, cool summer, international standard furniture, for guests Customers want to experience the happiness that comes from heaven. Room area: One single bed: 24m2 Wardrobe with clothes hanger Working table for 100% of bedrooms (applicable to hotels and resort hotels) Desk lamp (applicable to hotels and guests) resort). Especially the enthusiasm and enthusiasm of the service staff, with the motto that customer satisfaction comes first.
            </p>
            <p class="price">Price per room : 1100$/-</p>
            <a href="room.php"><button style=" border-radius: 5px;cursor: pointer;" class="price-btn ">Book a now</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
            <p class="sectionTag">A.C. Room</p>
            <p class="sectionsubTag font">This is our average room, it is located on the 9th floor, has a view of the sea, direct sunlight, warm in winter, cool in summer, although not comparable to a delux room, but still a good 9. , a 10 international standard comfortable furniture, for customers who want to experience the happiness from heaven. Room area: One single bed: 24m2 Wardrobe with clothes hanger Working table for 100% of bedrooms (applicable to hotels and resort hotels) Desk lamp (applicable to hotels and guests) resort). Especially the enthusiasm and enthusiasm of the service staff, with the motto that customer satisfaction comes first.</p>
            <p class="price">Price per room : 900$/-</p>
            <a href="room.php"><button style="border-radius: 5px;cursor: pointer;" class="price-btn">Book a now</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/ac4.jpg" alt="delux" class="imgFluidd">
        </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">Non A.C. Room</p>
            <p class="sectionsubTag font">This is a cheap room with us, it is located on the 9th floor, has a view of the sea, direct sunlight, warm in winter, cool in summer, not comparable to a delux room, but also a 9. a 10, suitable for customers with average income but still want to experience high-class service, interior and amenities of international standards, for customers who want to experience the happiness from heaven. Room area: One single bed: 24m2 Wardrobe with clothes hanger Working table for 100% of bedrooms (applicable to hotels and resort hotels) Desk lamp (applicable to hotels and guests) resort). Especially the enthusiasm and enthusiasm of the service staff, with the motto that customer satisfaction comes first.</p>
            <p class="price">Price per room : 700$/-</p>
            <a href="room.php"><button class="price-btn" style="border-radius: 5px;cursor: pointer;">Book a now</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/nonacroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>


    <div class="about-container">
        <div class="about">
            <div class="about1">
                <img src="img/dinning.jpg" alt="dinning">
            </div>
            <div class="about2">
                <div class="h1">
                    <h1 class="about-h1">Welcome To Our Website</h1>
                </div>

                <!-- 
                
             -->
                <br>
                <!-- <p class="about-p">Room service or in-room dining is a hotel service enabling guests to choose items of food and drink for delivery to their hotel room for consumption. Room service is organised as a subdivision within the food and beverage department of high-end hotel and resort properties. It is uncommon for room service to be offered in hotels.</p> -->
                <p class="about-p">Especially the enthusiasm and enthusiasm of the service staff, with the motto that customer satisfaction comes first.</p>
            </div>
        </div>
        <div class="about-box">
            <div class="about-box-1">
                <div class="box1">
                    <div class="box1-img">
                        <img src="img/deluxroom.jpg" alt="delux">
                    </div>
                    <div class="box1-text">
                        <div class="box1-text-h1"><a href="room.php">
                                <h3>Rooms</h3>
                            </a></div>
                        <p class="box1-text-p">
                        <ul>
                            <li class="box1-li">Delux AC Room</li>
                            <li class="box1-li"> AC Room</li>
                            <li class="box1-li">Non AC Room</li>
                        </ul>
                        </p>
                        <p class="box1-text-p" style="color:black; font-weight:600; margin-top:6px;">
                            South-Kondwa,Pune, <br>HK plaza relax <br>+84 9999999 <br>
                        </p>

                    </div>
                </div>

                <div class="box1">
                    <div class="box1-img">
                        <img src="img/dinning4.jpg" alt="delux">
                    </div>
                    <div class="box1-text">
                        <div class="box1-text-h1"><a href="food.php">
                                <h3>Food</h3>
                            </a></div>
                        <p class="box1-text-p">
                        <ul>
                            <li class="box1-li">South-Indian</li>
                            <li class="box1-li"> Chinese</li>
                            <li class="box1-li">VietNam</li>
                        </ul>
                        </p>
                        <p class="box1-text-p" style="color:black; font-weight:600; margin-top:6px;">
                            VietNam, Ha Noi, <br>HK plaza relax <br>+84 9999999 <br>
                        </p>

                    </div>
                </div>

                <div class="box1">
                    <div class="box1-img">
                        <img src="img/partyhall2.jpg" alt="delux">
                    </div>
                    <div class="box1-text">
                        <div class="box1-text-h1"><a href="bookinghall.php">
                                <h3>Halls</h3>
                            </a></div>
                        <p class="box1-text-p">
                        <ul>
                            <li class="box1-li">Party Halls</li>
                            <li class="box1-li"> Marriage Halls </li>
                            <li class="box1-li">Pools</li>
                        </ul>
                        </p>
                        <p class="box1-text-p" style="color:black; font-weight:600; margin-top:6px;">
                            Japan, Tokyo <br>HK plaza relax <br>+84 9999999 <br>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>