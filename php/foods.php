<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foods</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<style>

.card {
            width: 25rem;
            margin: 1em;
            padding: 3px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scale and shadow */
        }

        /* Card hover effect */
        .card:hover {
            transform: scale(1.1);  /* Increase size when hovered */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Add shadow */
        }
</style>
<?php
    require_once 'functions/functions.php';

    echo "<center><div class='row' style='margin:25px;'>";
   
    foodDetails($connect);
    
   echo  "</div></center>";
    
    

?>
    
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>