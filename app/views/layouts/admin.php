<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="<?=PATH;?>">
    <?=$this->getMeta();?>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="adminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="adminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="adminLTE/plugins/summernote/summernote-bs4.css">
    <!-- Select 2 -->
    <link rel="stylesheet" href="adminLTE/plugins/select2/css/select2.css">
    <!-- Google Font: Source Sans Pro-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="adminLTE/my.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <form class="form-inline ml-3" action="<?=ADMIN;?>/search" method="get" autocomplete="off">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar typeahead" type="text" id="typeahead" name="s" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="navbar-nav ml-auto">
                <a href="admin/user/logout" class="btn btn-sm btn-default">Logout</a>
            </div>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?=PATH; ?>" class="brand-link" target="_blank">
                <img src="adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">TheBestStore</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="<?=ADMIN;?>/user/edit?id=<?=$_SESSION['user']['id']?>" class=""><?=$_SESSION['user']['name'];?></a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?=ADMIN;?>" class="nav-link">
                                    <i class="fa fa-home"></i>
                                <p>Home</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=ADMIN;?>/order" class="nav-link">
                                <i class="fa fa-shopping-cart"></i>
                                <p>Orders</p></a>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-list-alt"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/category" class="nav-link active">
                                        <p>Category list</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/category/add" class="nav-link active">
                                        <p>Add category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-cubes"></i>
                                <p>
                                    Products
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/product" class="nav-link active">
                                        <p>Products list</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/product/add" class="nav-link active">
                                        <p>Add product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?=ADMIN;?>/cache" class="nav-link">
                                <i class="fa fa-database"></i>
                                <p>Caching</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=ADMIN;?>/image" class="nav-link">
                                <i class="fa fa-images"></i>
                                <p>Images</p></a>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-filter"></i>
                                <p>Filters<i class="right fas fa-angle-left"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/filter/attribute-group" class="nav-link active">
                                        <p>Filter groups</p></a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/filter/attribute" class="nav-link active">
                                        <p>Filter attributes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-money-bill"></i>
                                <p>Currency<i class="right fas fa-angle-left"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/currency" class="nav-link active">
                                        <p>Currencies list</p></a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/currency/add" class="nav-link active">
                                        <p>Add currency</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>Users<i class="right fas fa-angle-left"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/user" class="nav-link active">
                                        <p>Users list</p></a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=ADMIN;?>/user/add" class="nav-link active">
                                        <p>Add user</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>

            <?=$content; ?>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script>
        var path = '<?=PATH;?>',
            adminPath = '<?=ADMIN;?>';
    </script>

    <!-- jQuery -->
    <script src="adminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="adminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="libs/ajaxupload.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Validator -->
    <script src="libs/validator.js"></script>
    <!-- ChartJS -->
    <script src="adminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="adminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="adminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <!--<script src="adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>-->
    <!-- jQuery Knob Chart -->
    <script src="adminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="adminLTE/plugins/moment/moment.min.js"></script>
    <script src="adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="adminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Select 2 -->
    <script src="adminLTE/plugins/select2/js/select2.full.js"></script>
    <!---->
    <script src="adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminLTE/dist/js/adminlte.js"></script>
    <script src="libs/typeahead.bundle.js"></script>
    <script src="adminLTE/my.js"></script>

</body>
</html>