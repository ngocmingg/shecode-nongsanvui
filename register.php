<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký tài khoản</title>
    <link rel="shortcut icon" type="image/png" href="admin/assets/images/leaf (1).png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="assets/css/style_for_posting_page.css" rel="stylesheet">
</head>

<body>
<style>
    body {
        background-image: url('https://images.unsplash.com/photo-1557672172-298e090bd0f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80');
        background-repeat: no-repeat;
    }
</style>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-branch" href="index.html">
            <img src="assets/images/logo.png" height="50" width="200">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRANG CHỦ</a>
                    </li>
                </ul>
            </div>
</nav>

<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="/register.php" method="post">

                <div class="row">
                    <div class="col-50"><br/>
                        <h1>Đăng ký tài khoản</h1>
                        <input type="text" id="username" name="formCheck" value="formCheck" placeholder="Nhập tên tài khoản" readonly hidden>
                        <label for="username"><i class="fa fa-user"></i> Tên Tài Khoản</label>
                        <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản">
                        <label for="name"><i class="fa fa-user"></i> Tên người dùng</label>
                        <input type="text" id="name" name="name" placeholder="Nhập tên người dùng">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Nhập email">
                        <label for="password">Mật khẩu</label>
                        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                        <label for="year">Ngày tháng năm sinh</label>
                        <input type="text" id="year" name="year" placeholder="Ngày tháng năm sinh">



                    </div>

                    <div class="col-50"><br/>
                        <label for="gender">Giới tính</label>
                        <select id="gender" name="gender">
                            <option>Chọn giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Khác</option>
                        </select>

                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                        <label for="home_number">Địa chỉ</label>
                        <input type="text" id="home_number" name="home_number" placeholder="Nhập số nhà và tên đường">

                    </div>

                    <div style="text-align: center;"><button type="submit" class="btn btn-primary">Đăng kí</button></div>
            </form>
        </div>
    </div>

    <!--Chân trang-->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <hr class="light">
                    <div class = "footer-caption">
                        <h6>Công ty TNHH Nông Sản Newbie</h6>
                        <hr class="light">
                        <p>111-222-3333</p>
                        <p>nongsanvui@gmail.com</p>
                        <p>Giai Phong street, Hai Ba Trung Distr Hanoi, Vietnam</p></div>

                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <div class = "footer-caption">
                        <h6>Thông tin doanh nghiệp</h6>
                        <hr class="light">
                        <p>Mã số doanh nghiệp: 1234</p>
                        <p>Do Sở Công thương cấp ngày 01/01/2020</p></div>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <div class = "footer-caption">
                        <h6>Chính sách</h6>
                        <hr class="light">
                        <a href="#">Chính sách hoạt động</a></br>
                        <a href="#">Chính sách bảo mật</a></br>
                        <a href="#">Quyền và nghĩa vụ</a></br></div>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h6>&copy; Bản quyền thuộc về NongSanVui.vn</h6>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
require ("scripts/function.php");
if ($_POST["formCheck"] == "formCheck"){

    if (registerUser($_POST["username"], $_POST["password"], $_POST["name"], $_POST["year"], $_POST["email"], $_POST["gender"], $_POST["phone"], $_POST["address"])){
        echo 'window.location.replace("/auth.php");';
    };
} else {
        echo 'window.location.replace("/register.php?error=1");';
}
?>