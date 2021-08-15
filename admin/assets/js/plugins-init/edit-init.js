$(document).find('.summernote').on('summernote.blur', function(){
    function print_success () {
        toastr.success("Successfully Saved", "Saved", {
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
    print_success();
    $(document).ready(async function () {
        var toid = $("#summernote").val();
        var uid = $("#uid").val();
        $.ajax({
            type: "POST",
            url: "/notee.php?act=storeRealtime",
            data: {"content": toid, "id": uid},
            success: function () {
                console.log("POSTED")
            }
        });
    });
});