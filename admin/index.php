<?php
/*
    Part: Call dependencies
*/
include("scripts/autoload.php");
checkauth();
/*
    Part: Call header
*/
include ("includes/header.php");
?>
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-danger">
                                <div class="card-body  p-4">
                                    <div class="media">
									<span class="mr-3">
										<i class="flaticon-381-notepad"></i>
									</span>
                                        <div class="media-body text-white text-right">
                                            <p class="mb-1">Tổng số sản phẩm trên hệ thống</p>
                                            <h3 class="text-white"><?php countProducts();?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-success">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="mr-3">
										<i class="flaticon-381-list"></i>
									</span>
                                        <div class="media-body text-white text-right">
                                            <p class="mb-1">Tổng số loại mặt hàng</p>
                                            <h3 class="text-white"><?php countCategories();?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-warning">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="mr-3">
										<i class="flaticon-381-list"></i>
									</span>
                                        <div class="media-body text-white text-right">
                                            <p class="mb-1">Tổng số địa điểm</p>
                                            <h3 class="text-white"><?php countLocations();?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-blue-dark">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="mr-3">
										<i class="flaticon-381-list"></i>
									</span>
                                        <div class="media-body text-white text-right">
                                            <p class="mb-1">Tổng số sản phẩm của tôi</p>
                                            <h3 class="text-white"><?php countSellerProducts($_SESSION["username"]);?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
<?php
include ("includes/footer.php");
?>
<!--**********************************
    Custom CSS
***********************************-->
<!-- Dashboard 1 -->
<script src="/admin/assets/js/dashboard/dashboard-1.js"></script>