<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/certification/list">Chứng chỉ</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Đổi tên</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Đổi tên chứng chỉ: <?php echo getCertificationName($_GET["id"]);?></h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/admin/cert.php?act=storeEdit" method="post">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nhập tên ở đây: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" value="<?php echo getCertificationName($_GET['id']);?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ID: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="id" readonly value="<?php echo ($_GET['id']);?>">
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