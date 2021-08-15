<!-- Datatable -->
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<?php
$role = getRole($_SESSION['username']);
?>
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/product/list">Sản phẩm</a></li>
                <li class="breadcrumb-item active"><a href="/admin/product/list">Danh sách</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <?php
                        $role = getRole($_SESSION['username']);
                        if ( $role == 0){
                            echo '<h4 class="card-title">Tất cả sản phẩm của tôi</h4>>';
                        } elseif ($role == 1) {
                            echo '<h4 class="card-title">Tất cả sản phẩm trên hệ thống</h4>';
                        }

                        ?>

                        <a href="/admin/product/new" type="button" class="btn btn-rounded btn-info"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Thêm sản phẩm</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            $role = getRole($_SESSION['username']);
                            if ( $role == 0){
                                echo '<table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Ngày tạo</th>
                                    <th>Địa điểm</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ';
                                listProducts($_SESSION['username']);
                                echo '
                                </tbody>
                            </table>';
                            } elseif ($role == 1) {
                                echo '<table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Ngày tạo</th>
                                    <th>Địa điểm</th>
                                    <th>Người bán</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ';
                                listProductsAdmin();
                                echo '
                                </tbody>
                            </table>';
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
