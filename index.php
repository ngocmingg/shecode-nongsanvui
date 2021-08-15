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
<!-- Banner-->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>		
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/images/banner1.png">
		</div>
		<div class="carousel-item">
			<img src="assets/images/banner2.png">
		</div>
		<div class="carousel-item">
			<img src="assets/images/banner3.png">
		</div>
		<div class="carousel-item">
			<img src="assets/images/banner4.png">
		</div>
	</div>
</div>

<!--Danh mục hàng hóa-->
	<p>    </p>
	<div class="container">
		<div class="row welcome text-center">
		  <div class="col-sm-2">
			<img src="assets/images/veggie.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=1">RAU CỦ</a></div>
		  </div>
		  <div class="col-sm-2">
			<img src="assets/images/meat.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=2">THỊT</a></div>
		  </div>
		  <div class="col-sm-2">
			<img src="assets/images/seafood.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=7">HẢI SẢN</a></div>
		  </div>
		  <div class="col-sm-2">
			<img src="assets/images/herb.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=8">DƯỢC LIỆU</a></div>
		  </div>
		  <div class="col-sm-2">
			<img src="assets/images/fruit.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=9">TRÁI CÂY</a></div>
		  </div>
		  <div class="col-sm-2">
			<img src="assets/images/other.jpg" height="70"> </br>
			<div class = "category"><a class = "category" href="result.php?cat=10">CHẾ PHẨM</a></div>
		  </div>
		</div>
	  </div>
	<!-- Đường kẻ ngang -->
	<hr> 
	<div class="col-12">
		<h3>Blog chia sẻ</h3>
	</div>
	<!-- Blog chia sẻ -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="assets/images/vitaminC.jpg"> <!-- Ảnh bài viết 1 -->
					<div class="card-body">
						<h5 class="card-title">Bổ sung vitamin C như thế nào?</h5>
						<p class="card-text">Bùng nổ vitamin C với 5 loại thực phẩm sau đây</p>
						<a href="#" class="btn btn-outline-secondary">Xem thêm</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="assets/images/protein.jpg"> <!-- Ảnh bài viết 2 -->
					<div class="card-body">
						<h5 class="card-title">Tác hại của việc ăn quá nhiều đạm</h5>
						<p class="card-text">Không phải cứ cho con ăn thịt nhiều là tốt đâu các mẹ ơi</p>
						<a href="#" class="btn btn-outline-secondary">Xem thêm</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="assets/images/aloe-vera.jpg"> <!-- Ảnh bài viết 3 -->
					<div class="card-body">
						<h5 class="card-title">Mách các chị em cách trẻ đẹp dài lâu với lô hội</h5>
						<p class="card-text">Hãy cùng khám phá những công dụng làm đẹp tuyệt vời của lô hội nhé</p>
						<a href="#" class="btn btn-outline-secondary">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		<p>      </p>
		<div class = "row text-center">
			<div class="col-12"><a href="#" class="btn btn-outline-secondary">Đọc thêm các bài viết trong blog chia sẻ tại đây</a></div>
		</div>
		<p>      </p>
	<!-- Hai ô quảng cáo -->
	<div class="row text-center">
			<a href="https://ofelia.vn/" target="_blank"><img src="assets/images/ad1.jpeg" width = "600"/></a>
			<a href="https://www.50mm.vn/" target="_blank"><img src="assets/images/ad2.jpg" width = "600"/></a>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>

<!--Scroll to top-->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

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
