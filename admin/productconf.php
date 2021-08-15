<?php
/*
    Part: Call dependencies
*/
require("scripts/autoload.php");
checkauth();

/*
    Part: Call header
*/
include("includes/header.php");
/*
    Part: Call main page
*/
switch ($_GET["act"]){
    case "view":
        echo "<title>View</title>";
        include ("includes/products/view.php");
        break;
    case "edit":
        echo "<title>Edit: ". getProductName($_GET["id"],"name")."</title>";
        include ("includes/products/edit.php");
        break;
    case "storeEdit":
        updateProduct($_POST["id"], $_POST["name"], $_POST["img_link"], $_POST["category"], $_POST['location'], $_POST["certification"], $_POST["content"], $_POST["files"], $_POST["price_non_discount"], $_POST["price_with_discount"], $_POST["unit"], $_POST["stock"], $_POST["user"]);
        break;
    case "storeRealtime":
        updateProductRealtime($_POST["id"], $_POST["content"]);
        break;
    case "delete":
        echo "<title>Delete: ". getProductName($_GET["id"],"name")."</title>";
        include ("includes/products/delete.php");
        break;
    case "storeDelete":
        if($_POST["confirm"] == 1){
            deleteProduct($_POST["id"]);
        } else {
            echo '<script>window.location.replace("/cat.php?act=list");</script>';
        }
        break;
    case "new":
        echo "<title>New Product</title>";
        include ("includes/products/new.php");
        break;
    case "storeNew":
        newProduct($_POST["name"], $_POST["img_link"], $_POST["category"], $_POST['location'], $_POST["certification"], $_POST["content"], $_POST["files"], $_POST["price_non_discount"], $_POST["price_with_discount"], $_POST["unit"], $_POST["stock"], $_POST["user"]);
        break;
    default:
        include ("includes/products/list.php");
}
/*
    Part: Call footer
*/
include ("includes/footer.php");
?>
    <!-- Datatable -->
    <script src="/admin/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/admin/assets/js/plugins-init/datatables.init.js"></script>
<?php
/*
    Part: Check error to print
*/
if (isset($_GET["error"])){

    echo '
<link rel="stylesheet" href="/admin/assets/vendor/toastr/css/toastr.min.css">
<script src="/admin/assets/vendor/toastr/js/toastr.min.js"></script>
<script>
    function error () {
        toastr.error("' . $_GET["error"] .'", "Error", {
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
echo '<!-- Summernote -->
<script src="/admin/assets/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="/admin/assets/js/plugins-init/summernote-init.js"></script>';
if ($_GET["act"] == "edit"){
    echo '<script src="/admin/assets/js/plugins-init/edit-init.js"></script>';
}?>

