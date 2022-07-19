<?php
require_once './user/env.php';
if (isset($_SESSION["id"])) {


    $contact = mysqli_query($db, "SELECT `id`, `fname`, `lname`, `email`, `gender`, `phone`, `location`, `cell`, `country`, `userid` FROM `contacts` WHERE `userid`= '".$_SESSION["id"]."';");
?>
    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Phone Book</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/apicss.css">
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
                                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Home </a>

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
                        <h1 class="page-header">Contacts</h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Contacts List
                            </div>
                            <form>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">


                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th>gender</th> -->
                                                    <th hidden>id</th>
                                                    <th>Avatar</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Location</th>
                                                    <th>Cell</th>
                                                    <th>Country</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                <?php
                                                // $x = 1;
                                                while ($contacts = mysqli_fetch_array($contact)) {
                                                ?>
                                                    <tr>
                                                        <!-- <th>gender</th> -->
                                                        <td hidden><?php $_SESSION["hi"] = $contacts["id"]; ?></td>
                                                        <td>Avatar</td>
                                                        <td><?= $contacts["gender"].". ".$contacts["fname"]." ".$contacts["lname"] ?></td>
                                                        <td><?= $contacts["phone"] ?></td>
                                                        <td><?= $contacts["email"] ?></td>
                                                        <td><?= $contacts["location"] ?></td>
                                                        <td><?= $contacts["cell"] ?></td>
                                                        <td><?= $contacts["country"] ?></td>
                                                        <td><button type="button" class="btn btn-warning" neme="update" onclick="location.href='edit.php?editid=<?= $contacts['id'] ?>'">edit</button></td>
                                                        <td><button type="button" class="btn btn-danger" name="del" onclick="location.href='delete.php?delid=<?=$contacts['id'] ?>'">delete</button></td>
                                                        
                                                    </tr>
                                                <?php
                                                    // $x++;
                                                    // break;
                                                }
                                                ?>
                                            </thead>
                                            <tbody id="tBody"></tbody>
                                        </table>
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <span class="page-link">Previous</span>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/sb-admin.js"></script>
    </body>

    </html>
<?php
} else {
    header('location:login.php');
}
?>