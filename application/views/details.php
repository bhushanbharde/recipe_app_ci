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
      .bord {
        border: 2px solid #ccc;
        padding: 3rem 1rem;
      }

      .bullet{
        background-color: black;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 12px;
        border-radius: 50px;
        margin-right: 20px;
      }
    </style>
  </head>

    <body >
       <div class="container py-5">
            <div class="row bord">
                <?php
                    if(count($data['recipe']) == 0){
                        echo "no records found<br>   "; ?>
                        
                        <a href="<?= base_url()?>maincontroller/create" class="btn btn-primary">Add Recipe</a>
                            
                <?php         
                    }
                        
                else {
                ?>
                    <div class="col-sm-8">
                        <h1 class="mb-5"><?= $data['recipe'][0]['name']; ?></h1>
                        <p class="h5"><?= $data['recipe'][0]['desc']; ?></p>

                        <p>Recipe by : <strong class="text-success"><?= $data['recipe'][0]['creator']; ?></strong></p>

                        <h3 class="mb-3">Ingredients You Need</h3>
                        <ul class="list-group">
                            <?php
                            foreach ($data['ingredients'] as $ing) { ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: large;padding: 7px 20px;">
                                    <?= $ing['items'] ?>
                                    <span class="badge badge-primary badge-pill" style="padding: 7px 15px;font-weight: 500;"><?= $ing['amount']; ?> <?= $ing['unit']; ?></span>
                                </li>
                            <?php } ?>
                        </ul>
                        <hr>
                        <h3 class="mb-3">Steps</h3>
                        <?php
                            $no = 1; 
                            foreach ($data['steps'] as $step) { ?>
                            <div style="display:flex; align-items:center;padding:20px 0px;border-bottom: 1px solid #ccc;">
                                <div class="bullet"><?= $no; ?></div>
                                <h5> <?= $step['step']; ?></h5>
                            </div>
                                
                        <?php $no++; } ?>

                    </div>

                    <div class="col-sm-4">
                        <img src="<?= base_url()?>images/<?= $data['recipe'][0]['image_url'];  ?>" width="100%" alt="">
                    </div>
                <?php }?>
            </div>
       </div>
    </body>
</html>
