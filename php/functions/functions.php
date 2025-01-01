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

?>