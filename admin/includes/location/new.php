<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/location/list">Địa điểm</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Mới</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Địa điểm mới</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/admin/loc.php?act=storeNew" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nhập tên ở đây: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Nhập tên ở đây">
                                    </div>
                                </div>
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