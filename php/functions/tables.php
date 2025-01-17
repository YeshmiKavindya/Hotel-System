<?php

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
    }catch(Exception $ex){}}

    function showDetailsRestaurant($connect){
        try{
            
            
            $sql = "SELECT * from restauranttables";
            $result = mysqli_query($connect,$sql);
            $numres = mysqli_num_rows($result);
            
            echo "
                <table>
                <thead>
                    <th>TableID</th>
                    <th>TableNumber</th>
                    <th>Location</th>
                    <th>SeatingCapacity</th>
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
    }catch(Exception $ex){}}

?>