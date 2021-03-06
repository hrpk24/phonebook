<?php
session_start();
if (isset($_SESSION["id"])) {
    ?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دفترچه تلفن | افزودن</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            font-family: iran_sans;
            size: 25px;
        }
    </style>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <div class="col-lg-12">
                            <h2>دفترچه تلفن</h2>
                        </div>
                        <li dir="rtl">
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> خانه </a>
                        </li>

                        <li dir="rtl">
                            <a href="#"><i class="fa fa-user fa-fw"></i> افزودن </a>
                        </li>

                        <li dir="rtl">
                            <a href="edit.php"><i class="fa fa-file fa-fw"></i> ویرایش </a>
                        </li>

                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">افزودن مخاطب</h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- ====================== -->
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-12" dir="rtl">
                    <div style="text-align:center; margin-bottom:10px;">
                        <img src="img/demoavatar.png" width="200px" height="180px">
                        <br>
                        <p>تغییر پروفایل</p>
                        <br>

                        <center><input type="file" name="profileavatar"></center>
                    </div>
                    <br>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            افزودن
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    <fieldset>
                                        <form role="form" action="submit.php" method="post" id="myForm">
                                            <div class="form-group">
                                                <label>نام</label>
                                                <input type="text" name="firstname" class="form-control" required>
                                                <br>

                                                <label>نام خانوادگی</label>
                                                <input type="text" name="lastname" class="form-control">
                                                <br>

                                                <label>ایمیل</label>
                                                <input type="email" name="email" class="form-control" required>
                                                <br>

                                                <label>جنسیت</label>
                                                <select name=”list” class="form-control">
                                                    <option value=”Mr”>آقا </option>
                                                    <option value=”Miss”> خانم</option>
                                                </select>
                                                <br>


                                                <div class="form-group">

                                                    <label>موبایل</label>
                                                    <input type="tel" name="Phonenumber" class="form-control"
                                                        maxlength="11"
                                                        pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4})"
                                                        required>
                                                    <br>

                                                    <label>مکان</label>
                                                    <input type="text" name="location" id="location"
                                                        class="form-control">
                                                    <br>

                                                    <label>تلفن</label>
                                                    <input type="text" name="cell" id="cell" class="form-control">
                                                    <br>

                                                    <label>کشور</label>
                                                    <input type="text" name="country" id="country" class="form-control">
                                                    <br>
                                                </div>
                                                <input type="submit" Class="btn btn-success btn-lg styless btn-block"
                                                    value="ذخیره">
                                        </form>
                                        <script src="js/create.js"></script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- ====================================== -->
        </div>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
</body>
<!--   text-align: center; -->

</html>
<?php
} else {
    header('location:login.php');
}
?>