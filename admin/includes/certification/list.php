<!-- Datatable -->
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/certification/list">Chứng chỉ</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Danh sách</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tất cả chứng chỉ</h4>
                        <a href="/admin/certification/new" type="button" class="btn btn-rounded btn-info"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Thêm chứng chỉ mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php listCertification();?>
                                </tbody>
                            </table>
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
