<!--**********************************
    Content body start
***********************************-->
<!-- Summernote -->
<link href="/admin/assets/vendor/summernote/summernote.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/product/list">Sản phẩm</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Sửa</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chỉnh sửa sản phẩm: <?php echo getProductName($_GET["id"], "name");?></h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <!--<form action="/admin/productconf.php?act=storeRealtime" method="post" id="myformR">-->
                            <form action="/admin/productconf.php?act=storeEdit" method="post" id="myformR">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ID: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="id" id="uid" readonly value="<?php echo ($_GET['id']);?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tên sản phẩm: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="<?php echo getProductName($_GET["id"], "name");?>" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link hình ảnh: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="img_link" value="<?php echo getProductName($_GET["id"], "img_link");?>" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn loại hàng hoá: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="category">
                                            <option selected value="<?php echo getProductName($_GET["id"], "category");?>">
                                            <?php echo getCategoryName(getProductName($_GET["id"], "category"));?></option>
                                            <option value="0">Không phân loại</option>
                                            <?php getCategoryList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn địa điểm bán: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="location">
                                            <option selected value="<?php echo getProductName($_GET["id"], "location");?>">
                                                <?php echo getLocationName(getProductName($_GET["id"], "location"));?></option>
                                            <option value="0">Bất cứ nơi nào</option>
                                            <?php getLocationList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chứng chỉ: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="certification">
                                            <option selected value="<?php echo getProductName($_GET["id"], "certification");?>">
                                                <?php echo getCertificationName(getProductName($_GET["id"], "certification"));?></option>
                                            <option value="0">Không chứng chỉ</option>
                                            <?php getCertificationList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mô tả: </label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" id="summernote" name="content" value=""><?php echo getProductName($_GET["id"], "description");?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn giá gốc(vnđ): </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="price_non_discount" value="<?php echo getProductName($_GET["id"], "price_non_discount");?>" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn giá ưu đãi(vnđ): </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="price_with_discount" value="<?php echo getProductName($_GET["id"], "price_with_discount");?>" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn vị tính: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="unit" value="<?php echo getProductName($_GET["id"], "unit");?>" placeholder="kg/lít/...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Còn lại trong kho: </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="stock" value="<?php echo getProductName($_GET["id"], "stock");?>" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="user" value="<?php echo getProductName($_GET["id"], "user");?>" hidden>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                                    </div>
                                </div>
                            </form>
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