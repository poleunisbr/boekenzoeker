<?php
// Include the render.php file
include_once "php/render.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZoekJeBoek | Bibliotheek Geel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="bg-color">
        <div class="container bg-color vh-100">
            <div class="row justify-content-center align-items-center">
                <h1 class="col-12 text-center p-4">Boekenzoeker - Kies je zone</h1>
            </div>
            <div class="row justify-content-center align-items-center">
                
                <?php
                // Render the buttons
                renderButtons();
                ?>
            </div>
        </div>
    </main>
</body>

<!-- Import jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Import communicator -->
<script src="js/communicator.js"></script>
</html>