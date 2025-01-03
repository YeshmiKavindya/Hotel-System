<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <table>
               
                    <tr><td>Profile</td></tr>
                    <tr><td>Rooms Reservation</td></tr> 
                    <tr><td>Restaurant Reservation</td></tr>
                    <tr><td>Wedding Hall Reservation</td></tr>
            </table>
        </div>
        <div class="col">
            <center><h4 class="tHead">YARROW HEIGHTS HOTEL</h4></center>
            <div class="row">
                <div class="col">
                    <br>
                    <h5>Rooms Reservation</h5>
                    <?php require_once 'functions/functions.php';
                        
                            showDetailsRooms($connect);
                        ?>
                    <br>
        <form action="">
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" value="Add Reservation" class="form-control">
            </div>

        </form>
                    
                </div>
                <div class="col">
                    <br>
                    <h5>Restaurant Reservation</h5>
                    <?php 
                    
                    require_once 'functions/functions.php';
                    
                    
                    showDetailsRestaurant($connect);
                    ?>
                    <br>
                   
        <form action="">
            <div class="d-grid gap-2 col-4 mx-auto">
                <input type="submit" value="Add Reservations" class="form-control">
            </div>

        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>