<?php
/*
    Part: Call dependencies
*/
include("scripts/autoload.php");
checkauth();
/*
    Part: Call header
*/
include ("includes/header.php");
?>
<link href="/admin/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Account Setting</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="/admin/settings" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Password" value="1" name="data" readonly hidden required>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required value="<?php echo $_SESSION["username"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="PhoneNumber" name="phonenumber" required value="<?php echo getUserInfo($_SESSION["username"], "phone");?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Version</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="1.0.2" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include ("includes/footer.php"); ?>

<?php
if ($_POST["data"] == 1){
    $olduser = $_SESSION["username"];
    $username = ($_POST["username"]);
    $phone = ($_POST["phone"]);
    $password = md5(md5($_POST["password"]));
    $time =date('Y-m-d H:i:s');
    $sql = "UPDATE users SET username='$username', password='$password', phone = '$phone' WHERE username='$olduser'";
    if ($db->query($sql) === TRUE) {
        echo '<script>window.location.replace("/admin/logout");</script>';
    } else {
        echo '<script>window.location.replace("/admin/settings/' . $db->error .'");</script>';
    }

$status = $_GET["status"];
if ($_GET["status"] !== "success"){
echo '<link rel="stylesheet" href="/admin/assets/vendor/toastr/css/toastr.min.css">
<script src="/admin/assets/vendor/toastr/js/toastr.min.js"></script>
<script>
    function error () {
        toastr.error("'.$_GET["status"].'", "Error", {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        })
    }
    error();
</script>';
}
}