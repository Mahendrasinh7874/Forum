<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php require('partials/nav.php') ?>
    <?php require('partials/_connect.php') ?>

    

    <div class="container my-3">
        <h2 class="text-center my-2">IDiscuss -categories</h2>

        <div class="row my-5" grid-gutter-width='10px'>

            <?php 
    $sql = 'SELECT * FROM `category`';
    $result = mysqli_query($conn,$sql) ;
    while ($row = mysqli_fetch_assoc($result)) {

      $cat = $row['category_name'];
      $desc = $row['category_description'];

      echo ' <div class="col-md-6 col-lg-4 mb-md-3 mb-3">
      <div class="card w-md-75 w-100" >
<div class="card-body">
  <h5 class="card-title">' .$cat .' </h5>
  <p class="card-text">' .substr($desc,0,65) .'... </p>
  <a href="threads.php" class="btn btn-primary">Go somewhere</a>
</div>
</div>
      </div>';
    }
    ?>

        </div>

    </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>

</html>