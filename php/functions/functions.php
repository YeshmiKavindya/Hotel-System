<?php


    function showDetails(){

        require_once 'dbconf.php';

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

        for($i=0;$i<$numres;$i++){
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            foreach($result as $key=>$value){
                foreach($value as $values){
                    echo "<td>".$values."</td>";
                }
            }
            echo "</tr>";
        }

        echo "</tbody>
            </table>";
        

    }

?>