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

function foodDetails($connect){

    $sql = "SELECT file_path FROM images where description like '%food%'";
    $result = mysqli_query($connect,$sql);

    $numrecords = mysqli_num_rows($result);

    // echo "$numrecords";

    for ($i=0;$i<$numrecords;$i++){

        $data = mysqli_fetch_assoc($result);
        foreach($data as $filepath){
            echo "<div class='card' style='width: 25rem; margin:1em;padding:3px;'>
            <img src='$filepath' class='card-img-top' alt='...' style='margin:1px;padding:10px;'>
            <div class='card-body'>
                <h5 class='card-title'>Card title</h5>
                <p class='card-text' >Heights Bistro offers a delectable menu featuring fresh, flavorful dishes crafted with locally sourced ingredients. From savory appetizers to satisfying mains and indulgent desserts, each item is designed to provide a memorable dining experience.</p>
                <input type='submit' value='Add to cart' name='submit' class='btn btn-warning' >
            </div>
            </div>";

         }

        if($i%3 == 0){
            echo "<br>";
        }
    }
}

?>