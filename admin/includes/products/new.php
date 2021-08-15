<!--**********************************
    Content body start
***********************************-->
<!-- Summernote -->

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/product/list">Notes</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Note</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/admin/productconf.php?act=storeNew" method="post" id="myformR">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tên sản phẩm: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" placeholder="Đặt tên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link hình ảnh: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="img_link"  placeholder="Đặt link">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn loại hàng hoá: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="category">
                                            <option value="0">Không phân loại</option>
                                            <?php getCategoryList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chọn địa điểm bán: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="location">
                                            <option value="0">Bất cứ nơi nào</option>
                                            <?php getLocationList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Chứng chỉ: </label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control default-select" name="certification">
                                            <option value="0">Không chứng chỉ</option>
                                            <?php getCertificationList();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mô tả: </label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" id="summernote" name="content" value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn giá gốc(vnđ): </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="price_non_discount" value="" placeholder="Giá gốc">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn giá ưu đãi(vnđ): </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="price_with_discount" value="" placeholder="Giá ưu đãi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Đơn vị tính: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="unit" value="" placeholder="kg/lít/...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Còn lại trong kho: </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="stock" value="" placeholder="Số lượng">
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="user" value="<?php echo $_SESSION["username"]?>" hidden>
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