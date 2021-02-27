<!DOCTYPE html>
<head>
    <title>Đăng Nhập</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

</head>
<body>
    <div id="header">
        <div class="header-bar">
            <div class="left">
                <img src="./img/logo.PNG"></img>
            </div>
            <div class="menu">
                <ul>
                   <a href="index.php"><li class="active">TRANG CHỦ</li></a>
                   <a href = "about-us.php"><li>GIỚI THIỆU</li></a>
                   <li onclick="window.location.href='product.php'">SẢN PHẨM <i class="fas fa-angle-down"></i>
                        <ul class="catalogues">
                            <a href = "#"><li class="sub">Trang Điểm</li></a>
                            <a href = "#"><li class="sub">Son môi</li></a>
                            <a href = "#"><li class="sub">Chăm sóc cơ thể</li></a>
                            <a href= "#"><li class="sub">Chăm sóc tóc</li></a>
                            <a href = "#"><li class="sub">Chăm sóc mặt</li></a>
                        </ul>
    
                    </li> 
                    <a href="#"><li>TIN TỨC</li></a>
                    <a href="contact.php"><li>LIÊN HỆ</li></a>
                </ul>
            </div>
            <div class="right">
                <div class="account">
                    <img src="img/user.png"></img>
                    <div class = "account-1">
                       <a href = "login.html"><p>Đăng Nhập</p></a>
                       <a href = "regist.html"><p>Đăng Ký</p></a>
                    </div>
                </div>
                <div class="cart">
                    <img src="img/bag.png"></img>
                    <span>0</span>
                </div>
                <div class="search-bar">
                    <img src="img/search_icon.png"></img>
                </div>
            </div>
        </div>
    </div>
    <div id = "form-login">
        <div class = "login-web">
            <div class = "part-left">
                <img src = "img/bg_login.jpg">
            </div>
            <div class = "form-login">
               <div class = "title-form-login">
                   <h1>Đăng Nhập</h1>
               </div>
               <div class = "form-input-login">
                  <p>Email <span>*</span> </p>
                  <p><input type="text" placeholder="example@gmail.com"></p>
                  <p>Mật Khẩu <span>*</span></p>
                  <p><input type = "password" placeholder="Mật Khẩu"></p>
                  <p><button type="submit">ĐĂNG NHẬP</button></p>
                  
               </div>
               <div class = "account-not-register">
                   <p><a href="#">Quên Mật Khẩu</a></p>
                   <p>Chưa có tài khoản đăng ký <u><a href="regist.html" style="color: red;">tại đây</a></u></p>
               </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="site-footer">
            <div class="row-footer-1">
                <div class="row-title-footer">
                    <p>ĐỊA CHỈ</p>
                    <hr>
                </div>
                <div class="row-content-footer">
                    <div class="row-icon-footer">
                        <p><i class="fas fa-phone-alt"></i></i></p>
                        <p><i class="fa fa-map-marker"></i></p>
                        <p><i class="fa fa-envelope"></i></p>
                    </div>
                    <div class="row-content-infor">
                        <p>0123456789</p>
                        <p>Thăng Bình, Quảng Nam</p>
                        <p>ttkhang.19i@cit.udn.vn</p>
                    </div>
                </div>
            </div>
            <div class="row-footer-1">
                <div class="row-title-footer">
                    <p>HƯỚNG DẪN</p>
                    <hr>
                </div>
                <div class="row-content-footer">
                    <div class="row-content-infor">
                        <p>Trang Chủ</p>
                        <p>Giới Thiệu</p>
                        <p>Sản Phẩm</p>
                        <p>Tin Tức</p>
                        <p>Liên Hệ</p>
                    </div>
                </div>
            </div>
            <div class="row-footer-1">
                <div class="row-title-footer">
                    <p>CHÍNH SÁCH</p>
                    <hr>
                </div>
                <div class="row-content-footer">
                    <div class="row-content-infor">
                        <p>Trang Chủ</p>
                        <p>Giới Thiệu</p>
                        <p>Sản Phẩm</p>
                        <p>Tin Tức</p>
                        <p>Liên Hệ</p>
                    </div>
                </div>
            </div>
            <div class="row-footer-1">
                <div class="row-title-footer">
                    <p>CÂU HỎI THƯỜNG GẶP</p>
                    <hr>
                </div>
                <div class="row-content-footer">
                    <div class="row-content-infor">
                        <p>Trang Chủ</p>
                        <p>Giới Thiệu</p>
                        <p>Sản Phẩm</p>
                        <p>Tin Tức</p>
                        <p>Liên Hệ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>