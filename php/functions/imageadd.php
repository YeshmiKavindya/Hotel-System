<?php

function addImage($id1, $id2, $id3){
    
  

  
  $sql = "SELECT file_path FROM images WHERE imageID IN ($id1, $id2, $id3)";
  $result = mysqli_query($connect, $sql);

  
  if (mysqli_num_rows($result) > 0) {
      
      $images = [];
      while ($row = mysqli_fetch_assoc($result)) {
          $images[] = $row['file_path'];
      }

     
      if (count($images) == 3) {
          
          echo '<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">';

          
          foreach ($images as $index => $image) {
              $activeClass = ($index === 0) ? 'active' : ''; 
              echo '<div class="carousel-item ' . $activeClass . '">
                      <img src="' . $image . '" class="d-block w-100" alt="...">
                    </div>';
          }

         
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
      } 
  }


  mysqli_close($connect);
}
?>