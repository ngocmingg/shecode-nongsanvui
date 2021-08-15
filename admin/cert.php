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
        case "edit":
            echo "<title>Edit: ". getCertificationName($_GET['id'])."</title>";
            include ("includes/certification/edit.php");
            break;
        case "view":
            echo "<title>View: ". getCertificationName($_GET['id'])."</title>";
            include ("includes/certification/view.php");
            break;
        case "storeEdit":
            updateCertificationName($_POST["id"],$_POST["name"]);
            break;
        case "delete":
            echo "<title>Delete: ". getCertificationName($_GET['id'])."</title>";
            include ("includes/certification/delete.php");
            break;
        case "storeDelete":
            if($_POST["confirm"] == 1){
                deleteCertification($_POST["id"]);
            } else {
                echo '<script>window.location.replace("/certification/list");</script>';
            }
            break;
        case "new":
            echo "<title>New Certification</title>";
            include ("includes/certification/new.php");
            break;
        case "storeNew":
            newCertification($_POST["name"]);
            break;
        default:
            include ("includes/certification/list.php");
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
