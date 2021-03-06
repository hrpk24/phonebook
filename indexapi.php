<?php
session_start();
if (isset($_SESSION["id"])) {
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
                            <a href="adden.php"><i class="fa fa-user fa-fw"></i> Add </a>
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
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Cell</th>
                                                <th>Country</th>
                                                <!-- <th>Edit</th>
                                                <th>Delete</th> -->
                                            </tr>
                                        </thead>
                                        <tbody id="tBody"></tbody>
                                    </table>
                                    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
                                    <script>
                                        $(document).ready(function(params) {
                                            $.ajax({
                                                url: 'https://randomuser.me/api/?seed=erfan&results=10&page=1',
                                                type: 'GET',
                                                success: function(response) {
                                                    console.log(response);
                                                    var trHTML = '';
                                                    $.each(response.results, function(i, item) {
                                                        console.log(item);
                                                        trHTML +=
                                                            '<tr><td>' +
                                                            '<img src=' + item.picture
                                                            .thumbnail + '>' +
                                                            '</td><td>' +
                                                            item.name.title + '.' + item
                                                            .name.first + ' ' + item.name
                                                            .last +
                                                            '</td><td>' +
                                                            item.phone

                                                            +
                                                            '</td><td>' +
                                                            item.email +
                                                            '</td><td>' +
                                                            item.location.street.number +
                                                            '' + item.location.street.name +
                                                            '</td><td>' +
                                                            item.cell +
                                                            '</td><td>' +
                                                            item.nat
                                                            // + '</td><td>'

                                                            // + '</td><td>'

                                                            +
                                                            '</td></tr>';

                                                    });
                                                    $('#tBody').append(trHTML);
                                                },
                                                error: function() {

                                                }
                                            })
                                        })
                                    </script>

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