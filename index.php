<?php
require_once __DIR__ . "/models/production.php";
require_once __DIR__ . "/models/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($films as $film): ?>
                <div class="col-4 my-5">
                    <div class="card bg-dark" style="width:18rem;">
                      <img src="" class="card-img-top" alt="...">
                      <div class="card-body text-light">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        b5
                      </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>