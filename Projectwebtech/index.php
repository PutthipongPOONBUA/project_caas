<?php
    include './adminData.php';
?>

<html>
<head>
    <title>CAAS</title>

    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Insight Station Network">
    <meta name="author" content="Insight Station Network">

    <!-- Theme style -->
    <link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="dist/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <link href="dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Asar");
        head{
            font-family: 'Asar', serif;
        }

        input, select {
            height: 28px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
            border-radius: 0px !important;
        }
    </style>
</head>
<body style="margin:0px">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Asar");
        body{
            font-family: 'Asar', serif;
            background-image: url("https://images.pexels.com/photos/768943/pexels-photo-768943.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size:cover;width:100%;height:100%;position:absolute;
        }


    </style>
<div

    
        style="max-width:500px;min-width:400px;height:380px;margin:0 auto;padding:20px;position:relative;top:20%;
        background-color:rgba(0,0,0,0.5);border-radius:10px">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 style="color:white">CAAS</h2>
            </div>
        </div>

        <hr>

        <div id="UpdatePanel1">
            <form class="form-horizontal" method="post" id="form_login" name="form_login">
                <input type="hidden" name="__cmd" id="__cmd" value="login">
                <h3 style="color:white;margin-bottom:10px">Login</h3>

                <div class="input-group" style="margin-bottom:20px;">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="__username" type="text" maxlength="20" id="__username"
                           class=" form-control input-sm " placeholder="Email" required>
                </div>

                <div class="input-group" style="margin-bottom:20px;">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input name="__password" type="password" maxlength="20" id="__password"
                           class=" form-control input-sm " placeholder="Password" required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a href="index.php" class="btn btn-default pull-left" type="button">Back</a>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-info pull-right" type="submit" >Login</button>
                    </div>
                </div>
            </form>                                                                                                                    
        </div>
    </div>
</div>
<!-- Alert -->
<div class="modal flat" id="alertModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <span>
                <span class="glyphicon glyphicon-info-sign" style="font-size:30px;color:#f2b712"></span>
                <span style="font-size: 20px;" id="alertTitle"></span></span>
            </div>
        </div>
    </div>
</div>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script src="plugins/fastclick/fastclick.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="js/screen.js"></script>
<script src="js/jquery.datetimepicker.js"></script>




<script src="js/jstest.js"></script><script>
    function showModal() {
        $('#alertTitle').text('');
        $('#alertModal').modal();
    }
</script>
</body>
</html>
