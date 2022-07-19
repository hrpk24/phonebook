<?php
require_once './user/env.php';
if (isset($_SESSION["id"])) {
    if (isset($_GET["editid"])){
        // mysqli_query($db, "UPDATE `contacts` SET `fname` = '".$_POST["firstname"]."', `lname` = '".$_POST["lastname"]."', `email` = '".$_POST["email"]."', `gender` = '".$_POST["list"]."', `phone` = '".$_POST["Phonenumber"]."', `location` = '".$_POST["location"]."', `cell` = '".$_POST["cell"]."', `country` = '".$_POST["country"]."' WHERE `contacts`.`id` =".$_POST["id"]);
        $qqq= mysqli_query($db, "UPDATE `contacts` SET `fname` = '".$_POST["firstname"]."', `lname` = '".$_POST["lastname"]."', `email` = '".$_POST["email"]."', `gender` = '".$_POST["gender"]."', `phone` = '".$_POST["Phonenumber"]."', `location` = '".$_POST["location"]."', `cell` = '".$_POST["cell"]."', `country` = '".$_POST["country"]."' WHERE `contacts`.`id` =".$_GET["editid"]);
    
    ?>
        <html>

        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>change successfully | Phone Book</title>
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
                    <h3>Update Contact successfully.</h3>
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
    
    } else{

        echo "fffff";
    }
    






} else {
    header('location:login.php');
}
?>