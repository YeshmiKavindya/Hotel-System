<?php

require_once 'dbconf.php';
    function showDetails($connect){

        

        try{
            
            $sql = "SELECT * from Rooms";
        $result = mysqli_query($connect,$sql);

        $numres = mysqli_num_rows($result);

        echo "
            <table>
            <thead>
                <th>RoomID</th>
                <th>RoomType</th>
                <th>PricePerNight</th>
                <th>Capacity</th>
                <th>Status</th>
            </thead>
            <tbody>
        ";
         

        for($i=$numres-5;$i<$numres;$i++){
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