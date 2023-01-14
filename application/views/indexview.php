
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>All Recipes</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #fafafa;
      }
      .banner{
        background-image: url('<?php echo base_url() ?>images/banner.jpg');
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        display:flex;
        height: 70vh;
      }
      .title {
        display: flex;
        height: 70vh;
        align-items: center;
      }

      .main {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding: 5rem 0;
      }
    </style>
  </head>

    <body class="">
      <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Recipes</a>
        <a>Bhushan</a>
      </nav>
  
      <div class="banner" >
        <div class="container">
          <div class="title">
            <h1>Delicious Recipes <br/>For You</h1>
          </div>
        </div>
      </div>

      <div id="main-content" class="container main">

        <?php
            if(count($recipes) == 0){
                echo "<h3>No Recipes Added<h3>"; ?>
                <a href="<?= base_url()?>maincontroller/create" class="btn btn-primary">Add Recipe</a>
                    
        <?php         
            }
                
        else {
        ?>
          <?php foreach ($recipes as $recipe) { ?>
          
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" style="width:100%;height:250px;object-fit:cover" src="<?php echo base_url();?>/images/<?= $recipe['image_url'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $recipe['name'];?></h5>
              <p class="text-secondary">by Bhushan</p>
              <p class="card-text"><?= $recipe['desc'];?></p>
              <a href="recipes/<?= $recipe['id'] ?>" class="btn btn-primary">View</a>
            </div>
          </div>

          <?php }
        } ?>

      </div>
    </body>
</html>
