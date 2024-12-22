<?php
    function navigationbar(){
        echo "<div class='collapse navbar-collapse' id='navbarNav'>";
        echo "<ul class='navbar-nav ms-auto'>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/index.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>HOME</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/about.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>ABOUT</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/rooms.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>ROOMS</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/restaurant.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>RESTAURANT</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/booknow.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>BOOKNOW</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='#' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>GALLERY</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/contact.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>CONTACT</a>";
            echo "</li>";
        echo "</ul>";
        echo "</div>";

    }

    function addLogo(){
        echo "<img class='logo' src='../logo.PNG' >";
        echo "<a class='navbar-brand' href='../php/dashboard.php' style='color:goldenrod;font-style: italic;'>Yarrow Heights Hotel</a>";
    }

    function addToggleButton(){
        echo "<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
            echo "<span class='navbar-toggler-icon'></span>";
        echo "</button>";
    }

    function image($id1, $id2, $id3,$connect) {
        // Include the database connection configuration
        //require_once 'functions/dbconf.php';
        // Query the database to get the file paths for the three specific image IDs
        $sql = "SELECT file_path FROM images WHERE imageID IN ($id1, $id2, $id3)";
        $result = mysqli_query($connect, $sql);
    
        // Check if we have any results
        if (mysqli_num_rows($result) > 0) {
            // Fetch all file paths into an array
            $images = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $images[] = $row['file_path'];
            }
    
            // Ensure we have exactly 3 images for the carousel
            if (count($images) == 3) {
                // Generate the carousel HTML
                echo '<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">';
    
                // Loop through the images and generate carousel items
                foreach ($images as $index => $image) {
                    $activeClass = ($index === 0) ? 'active' : '';  // Make the first image active
                    echo '<div class="carousel-item ' . $activeClass . '">
                            <img src="' . $image . '" class="d-block w-100" alt="...">
                          </div>';
                }
    
                // Carousel controls
                echo '  </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>';
            } else {
                // If less than 3 images are found
                echo 'Not all images found for the given IDs.';
            }
        } else {
            // If no images are found
            echo 'No images found for the provided IDs.';
        }
    
        // Close the database connection
        mysqli_close($connect);
    }
?>