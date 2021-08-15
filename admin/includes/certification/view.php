<!-- Datatable -->
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/certification/list">Certification</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">View: <i><?php echo getCertificationName($_GET["id"])?></i></a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Notes inside <i><?php echo getCertificationName($_GET["id"])?></i></h4>
                        <a href="/note/new" type="button" class="btn btn-rounded btn-info"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>New Certification</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Certification</th>
                                    <th>Created at</th>
                                    <th>Last modified at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php //listProductsofCertification($_GET["id"]);?>
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
