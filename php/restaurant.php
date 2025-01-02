<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body style="margin: 1px">
    <!--Navigation bar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light"
      style="background-color: black"
    >
      <div class="container-fluid">
        
        <?php
          require_once 'functions/navbar.php';
          addLogo();
          addToggleButton();
          navigationbar();
        ?>
      </div>
    </nav>

    <!--add image-->
    <div>
      <img src="../images/58.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <div
          class="content text-and text-bg-secondary p-3 bg-opacity-75 bg-body-tertiary"
        >
          <h2
            style="
              color: black;
              font-family: 'Times New Roman', Times, serif;
              font-weight: bold;
            "
          >
            WELCOME TO THE HEIGHTS BISTRO
          </h2>
          <p
            style="
              color: black;
              font-family: 'Times New Roman', Times, serif;
              font-weight: bold;
              font-size: 16pt;
            "
          >
            Discover culinary excellence at The Heights Bistro, where our chefs
            skillfully craft seasonal menus that highlight fresh, locally
            sourced ingredients. Our dishes draw inspiration from diverse global
            cuisines while celebrating the rich flavors of our region, providing
            a unique taste journey for every palate.
          </p>
        </div>
        <form class="d-flex" style="padding-top: 5vh">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            style="line-height: 2; background-color: azure"
          />
          <button
            class="btn btn-outline-success"
            type="submit"
            style="
              background-color: azure;
              font-family: Arial, Helvetica, sans-serif;
            "
          >
            Search
          </button>
        </form>
      </div>
    </div>

    <!--food_category_1-->
    <div class="row" style="padding: 3.5vh; background-color: #d8a25e;">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">Sri Lankan Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(30,41,31,$connect);

            ?></div>
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li class="types">
                    Dishes:
                    <ul>
                      <li>Rice and Curry</li>
                      <li>Hoppers</li>
                      <li>Kottu Roti</li>
                      <li>Fish Ambul Thiyal</li>
                      <li>Pol Sambol</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Stewing</li>
                      <li>Frying</li>
                      <li>Grilling</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Coconut</li>
                      <li>Spices (cinnamon, cardamom)</li>
                      <li>lentils</li>
                      <li>Seafood</li>
                    </ul>
                    <br />
                  </li>

                  <li>
                    Dietary Options:
                    <ul>
                      <li>
                        Vegan-friendly dishes And Spice levels can be adjusted
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">Chinese Cuisine</h3></center>
            

            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(29,28,32,$connect);

            ?></div>
      
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Dumplings</li>
                      <li>Peking Duck</li>
                      <li>Kung Pao Chicken</li>
                      <li>Fried Rice</li>
                      <li>Sweet and Sour Pork</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Stir-frying</li>
                      <li>Steaming</li>
                      <li>Deep-frying</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Soy sauce</li>
                      <li>Ginger</li>
                      <li>Garlic</li>
                      <li>Sesame oil</li>
                      <li>Rice</li>
                    </ul>
                  </li>
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Vegetariane</li>
                      <li>Vluten-free options available</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--food_category_2-->
    <div class="row" style="padding: 3.5vh; background-color: #d8a25e">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h5 class="card-title">Indian Cuisine</h5></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(27,31,35,$connect);

            ?></div>
            
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Butter Chicken</li>
                      <li>Biryani</li>
                      <li>Palak Paneer</li>
                      <li>Dosa</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Tandoori</li>
                      <li>Curries</li>
                      <li>Frying</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Spices (cumin, coriander)</li>
                      <li>Rice</li>
                      <li>lentils</li>
                    </ul>
                  </li>
                  <br />
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Vegan</li>
                      <li>Vegetarian And Gluten-free options available</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">Italian Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(39,37,40,$connect);

            ?></div>
           
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Pasta (Spaghetti, Fettuccine)</li>
                      <li>Risotto</li>
                      <li>Pizza</li>
                      <li>Tiramisua</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Baking</li>
                      <li>Sautéing</li>
                      <li>Boiling</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Olive oil</li>
                      <li>Tomatoes</li>
                      <li>Garlic</li>
                      <li>Cheese (Parmesan, Mozzarella)</li>
                    </ul>
                  </li>
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Gluten-free pasta</li>
                      <li>Vegetarian pizzas available</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--food_category_3-->
    <div class="row" style="padding: 3.5vh; background-color: #d8a25e">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">Japanese Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(39,33,41,$connect);

            ?></div>
            
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Sushin</li>
                      <li>Ramen</li>
                      <li>Tempurar</li>
                      <li>Miso Soup</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Frying</li>
                      <li>Rolling</li>
                      <li>Boiling</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Rice</li>
                      <li>Seaweed</li>
                      <li>Fish</li>
                      <li>Soy sauce</li>
                    </ul>
                  </li>
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Vegetarian sushi</li>
                      <li>Gluten-free soy sauce</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">French Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(35,29,34,$connect);

            ?></div>
            
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Coq au Vin</li>
                      <li>Ratatouille</li>
                      <li>Crème Brûlée</li>
                      <li>Quiche</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Simmering</li>
                      <li>Sautéing</li>
                      <li>Baking</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Butter</li>
                      <li>Creams</li>
                      <li>Herbs</li>
                      <li>Fresh vegetables</li>
                    </ul>
                  </li>
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Vegetarian options</li>
                      <li>Gluten-free pastries</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--food_category_4-->
    <div class="row" style="padding: 3.5vh; background-color: #d8a25e">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">Thai Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(41,28,35,$connect);

            ?></div>
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Pad Thai</li>
                      <li>Green Curry</li>
                      <li>Tom Yum Soup</li>
                      <li>Mango Sticky Rice</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Stir-frying</li>
                      <li>Steaming</li>
                      <li>Boiling</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Rice</li>
                      <li>Coconut milk</li>
                      <li>Fresh herbs</li>
                      <li>Seafood</li>
                    </ul>
                  </li>
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Vegan and gluten-free options available</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div
            class="card-body"
            style="font-family: 'Times New Roman'; background-color: #f3f3e0"
          >
          <center><h3 class="card-title">American Cuisine</h3></center>
            
            <!-- add image -->
            <div><?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(27,41,30,$connect);

            ?></div>
            
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-6">
                <ul>
                  <li>
                    Dishes:
                    <ul>
                      <li>Burgers</li>
                      <li>BBQ Ribs</li>
                      <li>Mac and Cheese</li>
                      <li>Apple Pie</li>
                    </ul>
                  </li>
                  <li>
                    Preparation Styles:
                    <ul>
                      <li>Grillingg</li>
                      <li>Frying</li>
                      <li>Baking</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <ul>
                  <li>
                    Ingredients:
                    <ul>
                      <li>Chicken</li>
                      <li>Potatoes</li>
                      <li>Seasonal Vegetables</li>
                    </ul>
                  </li>
                  <br />
                  <li>
                    Dietary Options:
                    <ul>
                      <li>Plant-based burgers</li>
                      <li>Gluten-free Options</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a
                href="foods.php"
                class="btn btn-secondary"
                style="background-color: burlywood; border: none"
                >Order Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>