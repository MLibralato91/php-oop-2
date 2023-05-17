<?php

include_once __DIR__ . '/database/db.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Animals</title>
</head>

<body>

  <div class="container">
    <h1 class="p-5">My Pets Store</h1>
    <div class="row pt-5">
      <?php foreach ($products as $product) { ?>
        <div class="col-4 pb-5">
          <div class="card">
            <img class="card-img-top" src="<?php echo $product->image ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <p class="card-text"><span class="fw-bolder">Tipologia:</span><?php echo $product->type ?></p>
              <p class="card-text"><span class="fw-bolder">Prezzo:</span><?php echo $product->price ?></p>
              <div class="bottom d-flex justify-content-between">
                <a href="#" class="btn btn-primary">Leggi la descrizione</a>
                <span class="fw-bolder">Ideale per: <i class="fa-solid fa-<?php echo $product->category ?>"></i></span>

              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>