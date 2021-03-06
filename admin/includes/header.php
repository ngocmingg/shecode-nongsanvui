<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SelfNote Platform</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <link rel="stylesheet" href="/admin/assets/vendor/chartist/css/chartist.min.css">
    <link href="/admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/admin/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/admin/assets/vendor/summernote/summernote.css" rel="stylesheet">
    <link href="/admin/assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="/" class="brand-logo">
            <img class="logo-abbr" src="/admin/assets/images/logo.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->



    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">

                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                <div class="header-info">
                                    <span class="text-black"><strong><?php echo $_SESSION['username'];?></strong></span>
                                    <?php
                                    //echo getRole($_SESSION['username']) ;
                                    $role = getRole($_SESSION['username']);
                                    if ( $role == 0){
                                        echo '<p class="fs-12 mb-0">Ng?????i b??n</p>';
                                    } elseif ($role == 1) {
                                        echo '<p class="fs-12 mb-0">Qu???n tr??? vi??n</p>';
                                    }

                                    ?>

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="/logout.php" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <a href="/admin/product/new" class="add-menu-sidebar" >+ S???n ph???m m???i</a>
            <?php
            if ( $role == 0){
                echo '<ul class="metismenu" id="menu">
                <li>
                    <a class="has-arrow ai-icon" href="/" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Trang ch??nh</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="/admin" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Th???ng k??</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">S???n ph???m</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/product/list">Li???t k?? s???n ph???m</a></li>
                        <li><a href="/admin/product/new">Th??m s???n ph???m</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="/admin/settings" aria-expanded="false">
                        <i class="flaticon-381-settings"></i>
                        <span class="nav-text">C??i ?????t t??i kho???n</span>
                    </a>
                </li>
            </ul>';
            } elseif ($role == 1) {
                echo '<ul class="metismenu" id="menu">
                <li>
                    <a class="has-arrow ai-icon" href="/" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Th???ng k??</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">C??c lo???i h??ng</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/category/list">Li???t k?? c??c lo???i h??ng</a></li>
                        <li><a href="/admin/category/new">Th??m lo???i h??ng m???i</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">S???n ph???m</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/product/list">Xem danh s??ch s???n ph???m</a></li>
                        <li><a href="/admin/product/new">Th??m s???n ph???m</a></li>
                    </ul>
                </li>
                <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">?????a ??i???m</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/location/list">Xem danh s??ch ?????a ??i???m</a></li>
                        <li><a href="/admin/location/new">Th??m ?????a ??i???m</a></li>
                    </ul>
                </li>
                <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Ch???ng ch???</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/certification/list">Xem danh s??ch ch???ng ch???</a></li>
                        <li><a href="/admin/certification/new">Th??m ch???ng ch???</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="/admin/settings" aria-expanded="false">
                        <i class="flaticon-381-settings"></i>
                        <span class="nav-text">C??i ?????t</span>
                    </a>
                </li>
            </ul>';
            }
            ?>

            <div class="copyright">
                <p><strong>NongSanVui</strong> ?? 2021 All Rights Reserved</p>
                <p>Developed with <span class="heart"></span> at SheCode</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->