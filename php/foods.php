<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foods</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<?php
    require_once 'functions/functions.php';

    echo "<center><div class='row' style='margin:10px;'>";
   
    foodDetails($connect);
    
   echo  "</div></center>";
    
    

?>
    
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>