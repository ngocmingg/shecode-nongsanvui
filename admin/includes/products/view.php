<!-- Datatable -->
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/product/list">Sản phẩm</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Xem: <?php echo getProductName($_GET["id"],"name")?></a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo getProductName($_GET["id"],"name")?></h5>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Giá bán</span>
                                            <h6 class="mb-0"><strong class="text-primary"><?php echo getProductName($_GET["id"],"price_with_discount")?> vnđ</strong>/<?php echo getProductName($_GET["id"],"unit")?></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge info">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Chứng chỉ</span>
                                            <p class="mb-0"><strong class="text-warning"><?php echo getCertificationName(getProductName($_GET["id"],"certification"))?></strong></p>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge danger">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Loại sản phẩm</span>
                                            <h6 class="mb-0"><strong class="text-warning"><?php echo getCategoryName(getProductName($_GET["id"],"certification"))?></strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge success">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Nơi bán</span>
                                            <h6 class="mb-0"><strong class="text-warning"><?php echo getLocationName(getProductName($_GET["id"],"location"))?></strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge warning">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Số lượng</span>
                                            <h6 class="mb-0"><strong class="text-warning"><?php echo getProductName($_GET["id"],"stock")?></strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge dark">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>Người bán</span>
                                            <h6 class="mb-0"><strong class="text-warning"><?php echo getProductName($_GET["id"],"user")?></strong></h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <p class="card-text text-dark d-inline">Sửa đổi lần cuối: <?php echo getProductName($_GET["id"],"updated_at")?></p>
                        </div>

                        <a href="/admin/product/edit/<?php echo $_GET["id"];?>" class="btn btn-primary">Sửa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
