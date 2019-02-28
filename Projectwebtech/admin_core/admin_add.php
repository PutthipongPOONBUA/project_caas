<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>iBeacon Locator </title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../dist/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../dist/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <link href="../dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/dist/pagination.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.datetimepicker.css">
    <style>

        #demo, .paginationjs {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="skin-custom sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><i class="fa fa-user-secret"></i> </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">CAAS ADMIN</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu text-center">

                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <span class="hidden-xs">Admin Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <p class="text-left">
                                    Admin Admin                            </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href=""  class="btn btn-default btn-flat">ออกจากระบบ</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li id="menu-index">
                    <a href="">
                        <i class="fa fa-home"></i>
                        <span data-toggle="tooltip" title="หน้าหลัก">หน้าหลัก</span>
                    </a>
                </li>
                <li class="treeview" id="menu-user">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>ข้อมูลแอดมินในระบบ</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li id="menu-admin"><a href="admin.php"><i class="fa fa-folder-open"></i> จัดการข้อมูลแอดมิน</a></li>
                    </ul>
                </li>
                <li class="treeview" id="menu-tool-main">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>ข้อมูลรายวิชา</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li id="beacon-receiver"><a href=""><i class="fa fa-folder-open"></i> จัดการข้อมูลรายวิชา</a></li>

                    </ul>
                </li>

                <li class="treeview" id="menu-member-main">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>ข้อมูลอาจารย์</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li id="menu-member"><a href=""><i class="fa fa-folder-open"></i> จัดการข้อมูลอาจารย์</a></li>
                        <!--                    <li id="menu-checking"><a href="#"><i class="fa fa-folder-open"></i> ตรวจสอบ/อนมุติ การจองจากสมาชิก</a></li>-->
                    </ul>
                </li>
                <li class="treeview" id="menu-member_dog-main">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>ข้อมูลนิสิต</span> <i
                            class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li id="menu-member_dog"><a href=""><i class="fa fa-folder-open"></i> จัดการข้อมูลนิสิต</a></li>
                        <!--                    <li id="menu-checking"><a href="#"><i class="fa fa-folder-open"></i> ตรวจสอบ/อนมุติ การจองจากสมาชิก</a></li>-->
                    </ul>
                </li>
            </ul>
        </section>
    </aside>    <div id="posContain" class="content-wrapper" style="min-height: 901px;">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" id="form_data" name="form_data" method="post">
                        <input id="__delete_field" name="__delete_field" type="hidden" value="__admin_id">
                        <input id="__cmd" name="__cmd" type="hidden" value="">

                        <div class="col-md-12">
                            <label class="col-sm-3 control-label">
                            </label>
                        </div>
                        <div class="clr"></div>
                        <div class="col-sm-12">
                            <div class="box box-custom">
                                <div class="box-header with-border">
                                    <h3 class="box-title">จัดการข้อมูลแอดมิน </h3>
                                </div>
                                <div class="box-body">
                                    <input type="hidden" name="__admin_id" id="__admin_id" class="form-control"
                                           value="0"
                                           required="true" readonly>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                ชื่อ :
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="__first_name" id="__first_name"
                                                   class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                นามสกุล :
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="__last_name" id="__last_name"
                                                   class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                รหัสแอดมิน :
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="email" name="__email" id="__email"
                                                   class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                เบอร์โทร :
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="__tel" id="__tel" max="12"
                                                   class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" onkeypress="chkInteger(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                ระดับการใช้งาน :
                                            </label>
                                        </div>
                                        <div class="col-sm-5">
                                            <select name="__position_id" id="__position_id">
                                                <option value="0">Admin</option>
                                                <option value="1">Super Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                ชื่อผู้ใช้ :
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="__username" id="__username" class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" required="true" maxlength="20"
                                                   onkeypress="chkNotThaiChaOnly(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                รหัสผ่าน :
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="password" name="__password" id="__password"
                                                   class="form-control"
                                                   value=""
                                                   onblur="trimValue(this);" required="true" maxlength="20"
                                                   onkeypress="chkNotThaiChaOnly(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                            </label>
                                        </div>
                                        <div class="col-sm-5">
                                            <a class="btn btn-success" href="javascript:goSave();">บันทึก</a>
                                            <a class="btn btn-warning" href="javascript:goClear()">เคลียร์</a>
                                            <a class="btn btn-default" href="admin.php">ย้อนกลับ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/select2/select2.full.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/iCheck/icheck.min.js"></script>
<script src="../plugins/fastclick/fastclick.min.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="../js/screen.js"></script>
<script src="../js/jquery.datetimepicker.js"></script>





</body>
</html>
