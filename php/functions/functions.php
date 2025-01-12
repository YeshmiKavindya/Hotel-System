<?php

require_once 'dbconf.php';
    function showDetailsRooms($connect){
        try{
            
            $sql = "SELECT * from roomreservations";
            $result = mysqli_query($connect,$sql);
            $numres = mysqli_num_rows($result);
            
            echo "
                <table>
                <thead>
                    <th>ReservationID</th>
                    <th>CustomerID</th>
                    <th>RoomID</th>
                    <th>CheckInDate</th>
                    <th>CheckOutDate</th>
                    <th>TotalAmount</th>
                    <th>PaymentStatus</th>
                </thead>
                <tbody>
            ";
            
            for($i=0;$i<$numres;$i++){
                $row = mysqli_fetch_assoc($result);
                echo "<tr>";
                foreach($row as $key){
                        echo "<td>".$key."</td>";
                    }
                echo "</tr>";
            }
            echo "</tbody>
                </table>";
    }catch(Exception $ex){

    }

        
}



function showDetailsRestaurant($connect){

    try{
        
        $sql = "SELECT * from restaurantreservations";
        $result = mysqli_query($connect,$sql);
        $numres = mysqli_num_rows($result);

        echo "
            <table>
            <thead>
                <th>ReservationID</th>
                <th>CustomerID</th>
                <th>TableID</th>
                <th>ReservationDate</th>
                <th>NumberOfGuests</th>
                <th>SpecialRequests</th>
                <th>Status</th>
            </thead>
            <tbody>
        ";
        
        for($i=0;$i<$numres;$i++){
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            foreach($row as $key){
                    echo "<td>".$key."</td>";
                }
            echo "</tr>";
        }
        echo "</tbody>
            </table>";

        mysqli_close($connect);
}catch(Exception $ex){

}   
}


function getFoodDetails($connect){

    // require_once 'functions/dbconf.php';

    $sql = "SELECT food_name,description,price,category,stock_quantity,image_url FROM food_items ";
    $result = mysqli_query($connect,$sql);

    $numrecords = mysqli_num_rows($result);

    for ($i=0; $i < $numrecords ; $i++) { 
        
        $row = mysqli_fetch_assoc($result);
        $food_name = $row['food_name'];
        $description = $row['description'];
        $price = $row['price'];
        $category = $row['category'];
        $stock = $row['stock_quantity'];
        $img = $row['image_url'];

        echo "<div class='card' style='width: 25rem; margin:1em;padding:3px;'>
            <img src='$img' class='card-img-top' alt='...' style='margin:1px;padding:15px;'>
            <center>
            <div class='card-body'>
                <h5 class='card-title'>$food_name</h5>
                <p class='card-text' >$description</p>
                <p class='card-text'>Price : $$price</p>
                <input type='submit' value='Add to cart' name='submit' class='btn btn-warning' >
            </div>
            </center>
            </div>";

        if ($i%3 == 0) {
            echo "<br>";
        }

    }
   
}




?>