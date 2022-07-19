<?php
require_once './user/env.php';
if (isset($_SESSION["id"])) {
?>
    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add contact | Phone Book</title>
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
                                <h2>Phone Book</h2>
                            </div>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Home </a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Add </a>
                            </li>

                            <li>
                                <a href="edit.php"><i class="fa fa-file fa-fw"></i> Edit </a>
                            </li>

                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Contact</h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- ====================== -->
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-12">
                        <div style="text-align:center; margin-bottom:10px;">
                            <img src="img/demoavatar.png" width="200px" height="180px">
                            <br>
                            <p>Change Profile</p>
                            <br>

                            <center><input type="file" name="profileavatar"></center>
                        </div>
                        <br>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Add
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-12">
                                        <!-- <fieldset> -->
                                            <form action="submit.php" method="post" >
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="firstname" class="form-control" pattern="[a-zA-Z]+" required>
                                                    <br>

                                                    <label>Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" pattern="[a-zA-Z]+">
                                                    <br>

                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" required>
                                                    <br>

                                                    <label>Gender</label>
                                                    <select name="gender" class="form-control">
                                                        <option value="Mr">Man </option>
                                                        <option value="Miss"> Woman</option>
                                                    </select>
                                                    <br>


                                                    <div class="form-group">

                                                        <label>Phone Number</label>
                                                        <input type="tel" name="Phonenumber" class="form-control" maxlength="11" required>
                                                        <br>

                                                        <label>Location</label>
                                                        <input type="text" name="location" id="location" class="form-control">
                                                        <br>

                                                        <label>Cell</label>
                                                        <input type="text" name="cell" id="cell" class="form-control">
                                                        <br>

                                                        <label>Country</label>
                                                        <input type="text" name="country" id="country" class="form-control">
                                                        <br>
                                                    <!-- <input type="submit" name="add" class="btn btn-success btn-lg styless btn-block" value="Submit"> -->
                                                    <!-- <input type="submit" name="edit" class="btn btn-warning btn-lg styless btn-block" value="Submit"> -->
                                                    <button type="submit" class="btn btn-success btn-lg styless btn-block" name="add">Submit</button>
                                                    </div>

                                                </form>
                                            <!-- <script src="js/create.js"></script> -->
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