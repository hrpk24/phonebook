<?php
require_once './user/env.php';
if (isset($_SESSION["id"])) {
    if (isset($_POST["add"])) {

        $signup = mysqli_query($db, "INSERT INTO `contacts` (`fname`, `lname`, `email`, `gender`, `phone`, `location`, `cell`, `country`, `userid`) VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["gender"]."', '".$_POST["Phonenumber"]."', '".$_POST["location"]."', '".$_POST["cell"]."', '".$_POST["country"]."', '".$_SESSION["id"]."');");
    
?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered successfully | Phone Book</title>
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
                            <a href="add.php"><i class="fa fa-user fa-fw"></i> Add </a>
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
                    <h1 class="page-header"></h1>
                </div>
            </div>
            <!-- /.row -->
         <div class="alert alert-success" role="alert">
            <h3>Contact successfully registered.</h3>
        </div>
  
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
    }else{
        ?>
        <html>

        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registered  not successfully | Phone Book</title>
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
                                    <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Home </a>
                                </li>
                                
                                <li>
                                    <a href="add.html"><i class="fa fa-user fa-fw"></i> Add </a>
                                </li>
        
                                <li>
                                    <a href="edit.html"><i class="fa fa-file fa-fw"></i> Edit </a>
                                </li>
                        </div>
                    </div>
                </nav>
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                    </div>
                    <!-- /.row -->
                 <div class="alert alert-danger" role="alert">
                    <h3>The contact was not registered.</h3>
                </div>
          
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

    }
} else {
    header('location:login.php');
}
?>