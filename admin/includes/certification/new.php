<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/certification/list">Certification</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">New</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm Chứng chỉ mới</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/admin/cert.php?act=storeNew" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Điền tên: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="" placeholder="Điền tên ở đây">
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