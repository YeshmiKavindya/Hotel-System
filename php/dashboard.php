<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dashboard.css">
    <style>
        body{
        
        background-size: cover;
        position: relative;
        height: auto;
        background-repeat: no-repeat;
        margin: 1em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .tHead{
            padding: 1em;
            height: 3em;
            background-color: goldenrod;
        }
    </style>
</head>
<body>
    <center><h3>ADMIN DASHBOARD</h3></center>
    <div class="row">
        <center>
        <div class="col-8">
            <?php

                require_once 'functions/tables.php';
                require_once 'functions/dbconf.php';

                echo '<h4><br>Rooms Details</h4>';
                showDetailsRooms($connect);
                echo "<br>";

                echo '<h4>Restaurant Details</h4>';
                showDetailsRestaurant($connect)

            ?>
        </div>
        </center>

    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>