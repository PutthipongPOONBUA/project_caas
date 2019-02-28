<!DOCTYPE html>
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
                        <li id="beacon-receiver"><a href=""><i class="fa fa-folder-open"></i>จัดการข้อมูลรายวิชา</a></li>

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

                        <input id="__delete_field" name="__delete_field" type="hidden" value="">
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
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a class="btn btn-primary" href="admin_add.php?__employee_id=0"><i
                                                    class="fa fa-plus"></i> เพิ่มข้อมูล</a>
                                        </div>
                                        <div align="right">
                                            <label class="col-sm-3 control-label">
                                                ค้นหา :
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="option" name="option" class="dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <option value="first_name">ชื่อ</option>
                                                <option value="last_name">นามสกุล</option>
                                                <option value="username">ชื่อผู้ใช้</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input class="form-control" type="text" id="keyword" name="keyword"
                                                       onblur="trimValue(this)"
                                                       value="">
                                                <a href="javascript:goSearch();"
                                                   class="btn btn-default input-group-addon"><i
                                                        class="fa fa-search"></i> </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div style="overflow-x: auto" class="col-sm-12">
                                            <table class="table table-hover tbgray" id="tbView">
                                                <tr>
                                                    <th width="5%">ลำดับ</th>
                                                    <th width="10%">รหัส</th>
                                                    <th width="40%">ชื่อ-สกุล</th>
                                                    <th width="10%">ชื่อผู้ใช้</th>
                                                    <th width="25%">ระดับ</th>
                                                    <th width="10%">จัดการ</th>
                                                </tr>
                                                <tbody>
                                                <tr>
                                                    <td class="active" align="center"
                                                        nowrap>1</td>
                                                    <td class="active" align="center"
                                                        nowrap>1</td>
                                                    <td class="active" nowrap>Admin Admin</td>
                                                    <td class="active" nowrap>admin</td>
                                                    <td class="active" nowrap>Super Admin</td>
                                                    <td class="active" nowrap align="center">
                                                        <div class="btn-group">
                                                            <a class="btn btn-warning btn-xs"
                                                               href=""><i
                                                                    class="fa fa-edit"></i> </a>
                                                            <a class="btn btn-danger btn-xs"
                                                               onclick="deleteRowData('1')"><i
                                                                    class="fa fa-trash"></i> </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="hidden" name="page" id="page" value="1">
                                            <input type="hidden" name="sizeItem" id="sizeItem" value="1">

                                            <div id="demo"></div>
                                            <script src="../assets/jquery/jquery.min.js"></script>
                                            <script src="../assets/dist/pagination.min.js"></script>
                                            <script>
                                                var chk = false;
                                                var tmp = document.getElementById('sizeItem').value.split(",");
                                                $('#demo').pagination({
                                                    dataSource: tmp,
                                                    pageSize: 15,
                                                    pageNumber: 1,
                                                    callback: function(data, pagination) {
                                                        if(chk){
                                                            with (document.form_data) {
                                                                page.value = Math.ceil(data[data.length-1]/pagination.pageSize);
                                                                submit();
                                                            }
                                                        }
                                                    }
                                                });
                                                chk = true;
                                            </script>                                        </div>
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



<div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>

</html>


