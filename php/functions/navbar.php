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
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/signin.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>SIGNIN</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
                echo "<a class='nav-link ' href='../php/signup.php' style='color: darkgoldenrod;font-family: 'Times New Roman', Times,serif'>SIGNUP</a>";
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
?>