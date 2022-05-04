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
                <li class="item"><a href="index.php">Trang chủ</a></li>
                <li class="item"><a href="about.php">Giới thiệu</a></li>
                <li class="item"><a href="room.php">Loại phòng</a></li>
                <li class="item"><a href="food.php">Ẩm thực</a></li>
                <li class="item"><a href="contact.php">Liên hệ</a></li>
                <li class="item"><a href="cart.php">Giỏ hàng</a></li>
                <li class="item"><a href="admin.php">Ban quản trị</a></li>
                <li class="item"><a href="bookinghall.php">Đặt tiệc</a></li>
                <li class="item"><a href="feedback.php">Phản hồi</a></li>
                <li class="item"><a href="login.php">Đăng nhập</a></li>
                <li class="item"><a href="logout.php">Đăng xuất</a></li>
            </ul>
        </div>
    </nav>
    <!-- ----------  Home --------------------- -->
    <section id="home">
        <h1 class="h1">Chào mừng bạn đến với <br> Website quản lý nhà hàng và khách sạn</h1>
        <!-- <p class="p">Hotel rooms have <span class="span">everything you need for a pleasant stay</span> : large comfortable beds covered with special bedspreads that get made by themselves, and bathrooms that are clean and shiny.</p><br>
        <p class="p">Hotel rooms are known for having terraces with <span class="span">views that are perfect for enjoyment</span> views that are perfect for enjoyment.</p> -->

    </section>

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">Phòng cao cấp</p>
            <p class="sectionsubTag font">Chúng tôi cung cấp dịch vụ tốt nhất về quản lý phòng, với dịch vụ phòng 24 giờ và trả phòng 24 giờ. Chúng tôi cung cấp các dịch vụ đẳng cấp với chi phí phù hợp nhất.</p>
            <p class="price">Giá phòng: 6.000.000đ/ngày</p>
            <a href="room.php"><button style="border-radius: 5px;" class="price-btn">Đặt phòng</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
            <p class="sectionTag">Phòng tiêu chuẩn</p>
            <p class="sectionsubTag font">Chúng tôi cung cấp dịch vụ tốt nhất về quản lý phòng, với dịch vụ phòng 24 giờ và trả phòng 24 giờ. Chúng tôi cung cấp các dịch vụ đẳng cấp với chi phí phù hợp nhất.</p>
            <p class="price">Giá phòng: 3.000.000đ/ngày</p>
            <a href="room.php"><button style="border-radius: 5px;" class="price-btn">Đặt phòng</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/ac4.jpg" alt="delux" class="imgFluidd">
        </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
            <p class="sectionTag">Phòng bình dân</p>
            <p class="sectionsubTag font">Chúng tôi cung cấp dịch vụ tốt nhất về quản lý phòng, với dịch vụ phòng 24 giờ và trả phòng 24 giờ. Chúng tôi cung cấp các dịch vụ đẳng cấp với chi phí phù hợp nhất.</p>
            <p class="price">Giá phòng: 1.200.000đ/ngày</p>
            <a href="room.php"><button class="price-btn" style="border-radius: 5px;">Đặt phòng</button></a>
        </div>
        <div class="thumbnail">
            <img src="img/nonacroom.jpg" alt="delux" class="imgFluid">
        </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Dịch vụ của chúng tôi bao gồm:<br> <br> Ẩm thực</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/manchu.png" alt="manchurion"></a>
                <h2 class="h-secondary center">Trung Quốc</h2>
                <p class="center">Văn hóa ẩm thực Trung Quốc vô cùng đa dạng và đặc sắc, nhưng vẫn giữ những nét đặc trung riêng của từng vùng miền, phong phú, có sức ảnh hưởng lớn đến ẩm thực của các nước khác trong khu vực.
                Món ăn phải ngon, đẹp mắt, có hương thơm ngào nhát, còn nguyên vị tươi ngon của nguyên liệu, cách trình bày tu hút và ấn tượng. Món ăn không chỉ ngon, đẹp mắt mà còn phải đảm bảo dinh dưỡng bởi sự kết hợp hài hòa giữa các thực phẩm.
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/pasta.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italia</h2>
                <p class="center">Ẩm thực Ý có rất nhiều nguyên liệu đa dạng thường được sử dụng, từ hoa quả, nước xốt, thịt, v.v. Ở Bắc Ý, cá (như cá tuyết, hoặc baccalà), khoai tây, gạo, ngô, xúc xích, thịt lợn, và các loại pho mát khác nhau là các nguyên liệu phổ biến nhất. Các món pasta sử dụng cà chua phổ biến trên toàn nước Ý.</p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/mah.png" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Đức</h2>
                <p class="center">Ẩm thực Đức đã phát triển thành một nền ẩm thực quốc gia qua nhiều thế kỷ thay đổi xã hội và chính trị với các biến thể từ vùng này sang vùng khác. Ẩm thực ở Đức rất đa dạng và thay đổi tùy theo vùng.
                Các khu vực miền Nam nước Đức, trong đó có Bayern và lân cận là Schwaben, có rất nhiều món ăn tương đồng. Tuy nhiên, các thành phần và các món ăn khác nhau theo vùng. Có nhiều món trong khu vực đã trở thành món ăn quốc tế, nhưng đã và được chế biến thành các biến thể rất khác nhau trong nước Đức ngày nay.
                </p>
            </div>
        </div>

        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/panner.png" alt="panner"></a>
                <h2 class="h-secondary center">Nhật Bản</h2>
                <p class="center">Ẩm thực Nhật Bản là nền ẩm thực xuất xứ từ nước Nhật. Ẩm thực Nhật Bản không lạm dụng quá nhiều gia vị mà chú trọng làm nổi bật hương vị tươi ngon, tinh khiết tự nhiên của món ăn. Hương vị món ăn Nhật thường thanh tao, nhẹ nhàng và phù hợp với thiên nhiên từng mùa. Do vị trí địa lý bốn bề bao quanh đều là biển, hải sản và rong biển chiếm phần lớn trong khẩu phần ăn của người Nhật. Lương thực chính của người Nhật là gạo; người Nhật cuộn gạo trong những tấm rong biển xanh đen, tạo thành món sushi, được xem là quốc thực của Nhật Bản.
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/dosa.png" alt="dosa"></a>
                <h2 class="h-secondary center">Ấn Độ</h2>
                <p class="center">Ẩm thực Ấn Độ có đặc trưng bởi việc sử dụng các loại gia vị, các loại rau gia vị và rau quả khác và đôi khi trái cây được trồng ở Ấn Độ và cũng như chế độ ăn chay phổ biến trong một bộ phận của xã hội Ấn Độ. Mỗi khu vực ở Ấn Độ có đặc trưng món ăn và kỹ thuật nấu ăn khác nhau. Kết quả là, phong cách ấm thực thay theo vùng, phản ánh cơ cấu nhân khẩu khác nhau của tiểu lục địa Ấn Độ đa dạng về sắc tộc.</p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/faluda.png" alt="faluda"></a>
                <h2 class="h-secondary center">Việt Nam</h2>
                <p class="center">Ẩm thực Việt Nam là cách gọi của phương thức chế biến món ăn, nguyên lý pha trộn gia vị và những thói quen ăn uống nói chung của cộng đồng người Việt và các dân tộc thuộc Việt trên đất nước Việt Nam. Tuy có ít nhiều sự khác biệt, ẩm thực Việt Nam vẫn bao hàm ý nghĩa khái quát nhất để chỉ tất cả những món ăn phổ biến trong cộng đồng các dân tộc thiểu số nhưng đã tương đối phổ thông trong cộng đồng người Việt.</p>
            </div>
        </div>

    </section>

    <div class="booking-div">
        <section id="booking-hall">
            <h1 class="h1">Hội trường tổ chức tiệc cưới, hội nghị</h1>
            <button id="book-btn" style="border-radius: 5px;"><a href="bookinghall.php"><p class="booking-installer">Đặt ngay</p></a></button>
        </section>
    </div>

    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>Giới thiệu: </h3>
                    <p>Khách sạn chúng tôi chuyên cung cấp dịch vụ nghỉ dưỡng và vui chơi với chất lượng tốt nhất và mức giá phù hợp mọi đối tượng khách hàng.</p>
                </div>
                <div class="footer-center">
                    <h3 >Danh mục dịch vụ: </h3>
                    <a href="room.php">Phòng nghỉ</a>
                    <a href="contact.php">Liên hệ</a>
                    <a href="food.php">Ẩm thực</a>
                    <a href="booking.php">Đặt chỗ</a>
                </div>
                <div class="footer-center">
                    <h3>Địa chỉ:</h3>
                    <p>Viet Nam, Ha Noi <br>HK plaza relax <br>+84 9999999 <br></p>
                </div>
                <div class="footer-center">
                    <h3>Giờ mở cửa:</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thứ 2: 6Am - 11Pm
                    </div>

                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thứ 3 - Thứ 4: 8Am - 11Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thứ 5 - Thứ 6: 8Am - 11Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thứ 7 - Chủ nhật: 7Am - 12Pm
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