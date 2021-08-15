<!-- Datatable -->
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/location/list">Địa điểm</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Xem: <i><?php echo getLocationName($_GET["id"])?></i></a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sản phẩm của <i><?php echo getLocationName($_GET["id"])?></i></h4>
                        <a href="/product/new" type="button" class="btn btn-rounded btn-info"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Sản phẩm mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Created at</th>
                                    <th>Last modified at</th>
                                    <th>Tags</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php //listNoteofLocation($_GET["id"]);
                                    echo "Under development";?>
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
