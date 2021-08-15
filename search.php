<?php
require ('scripts/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nông sản vui</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/images/leaf (1).jpg"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-branch" href="/">

            <img src="assets/images/logo.png" height="50" width="200"></a>
        <!-- Thanh tìm kiếm
        <form><input type="text" name="search" placeholder="Tìm sản phẩm..."></form>-->


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Tìm kiếm</a>
                </li>
                <?php
                if (checkAuthatLogin()){
                    echo '<li class="nav-item">
					            <a class="nav-link" href="admin">Quản Lý</a>
				          </li>';
                    echo '<li class="nav-item">
					            <a class="nav-link" href="logout.php">Chào '. $_SESSION["username"] .', Đăng xuất</a>
				          </li>';
                } else {
                    echo '<li class="nav-item">
					            <a class="nav-link" href="#">Xin chào Khách</a>
				          </li>';
                    echo '<li class="nav-item">
					            <a class="nav-link" href="auth.php">Đăng nhập</a>
				          </li>';
                }
                ?>
            </ul>
        </div>
        </div>
</nav>
</div>
<link href="admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Lựa chọn sản phẩm</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form method="get" action="result.php">
                <div class="form-group">
                    <div class="form-group">
                        <label>Lựa chọn mặt hàng</label>
                        <select class="form-control default-select" id="sel1" name="cat">
                            <option value="all">Tất cả</option>
                            <?php getCategoryList(); ?>
                        </select>
                    </div>
                    <label>Lựa chọn địa chỉ</label>
                    <select class="form-control default-select" id="sel1" name="loc">
                        <option value="all">Tất cả</option>
                        <?php getLocationList(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Lựa chọn chứng nhận</label>
                    <select class="form-control default-select" id="sel1" name="cert">
                        <option value="all">Tất cả</option>
                        <?php getCertificationList(); ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Giá tiền tối thiểu</label>
                        <input type="text" class="form-control" placeholder="vnđ" name="minprice">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Giá tiền tối đa</label>
                        <input type="text" class="form-control" placeholder="vnđ" name="maxprice">
                    </div>
                </div>
                <div style="text-align: center;"><button type="submit" class="btn btn-primary">Tìm kiếm</button></div>
            </form>
        </div>
    </div>
</div>

</body>
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