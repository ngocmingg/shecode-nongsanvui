<?php
require ('scripts/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nông sản vui</title>
    <link rel="shortcut icon" type="image/jpg" href="images/leaf (1).jpg"/>
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
<!-- Grid System -->
<div class="container">
    <div class="row">
        <div class="col-3">
            <br/>
            <!-- Bộ lọc -->
            <h6>Bộ lọc áp dụng</h6>
            <hr class="light">
            <div class = "filter-check">
                Địa điểm: <?php if($_GET["loc"] == "all" or $_GET["loc"] == NULL){
                    echo "Tất cả";
                } else {
                    echo getName($_GET["loc"], "locations");
                }?>
                <hr class="light">
            </div>
            <div class = "filter-check">
                Chứng chỉ: <?php if($_GET["cert"] == "all" or $_GET["cert"] == NULL){
                    echo "Tất cả";
                } else {
                    echo getName($_GET["cert"], "certifications");
                }?>
                <hr class="light">
            </div>
            <div class = "filter-check">
                Loại sản phẩm: <?php if($_GET["cat"] == "all" or $_GET["cat"] == NULL){
                    echo "Tất cả";
                } else {
                    echo getName($_GET["cat"], "categories");
                }?>
                <hr class="light">
            </div>

            <div class = "filter-check">
                Khoảng giá: <?php
                if (isset($_GET['maxprice']) == false or isset($_GET['minprice']) == false){
                    echo "Tất cả";
                } else {
                    echo "Tối đa:" . $_GET['maxprice'] . " ~ " . "Tối thiểu:" . $_GET['minprice'];
                }
                ?>

            </div>
            <div class = "filter-check"><br/>
                <a href="search.php" class="btn btn-outline-secondary">Chọn lại</a>
            </div>
        </div>


        <div class="col-9"><br/>
            <table>
                <tr>
                    <th scope="col"><img src="assets/images/paper.jpg" height = "30"></th>
                    <th scope="col">    </th>
                    <th scope="col"> Các sản phẩm đã lọc </th> <!--Đoạn này backend hiển thị tên danh mục mà người dùng đã chọn nhé-->
                </tr>
            </table>
            <!--Khung hiển thị sắp xếp kết quả theo thư mục-->
            <div class = "product-order">

            </div>
            <!-- Hiển thị sản phẩm -->
            <div class="container-fluid padding">
                <div class="row padding">
                    <?php
                    getSingleProduct($_GET["loc"],$_GET["cat"],$_GET["cert"],$_GET["minprice"],$_GET["maxprice"]);
                    ?>

                </div>
            </div>
            <div class = "row text-center">
                <div class="col-11"><br/>
                    <a href="#" class="btn btn-outline-secondary">Xem thêm sản phẩm</a>
                </div>
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


