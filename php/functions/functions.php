<?php


    function showDetails(){

        require_once 'dbconf.php';

        $sql = "SELECT * from rooms";
        $result = mysqli_query($connect,$sql);

        $numres = mysqli_num_rows($result);

        for($i=0;$i<$numres;$i++){
            $row = mysqli_fetch_assoc($result);

            foreach($result as $key->$value){
                foreach($value as $values){
                    echo "$values"."<br>";
                }
            }

        }
        

    }

?>