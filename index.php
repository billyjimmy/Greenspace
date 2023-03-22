<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Dashboard</title>
    
    <link rel="stylesheet" href="site.css">

    <?php require("navbar.php"); // adding the navbar

    ?>
</head>
<body>
    
<div class="main-container">
    <h1>My Performance Dashboard</h1>
    <div style="display: flex; flex-direction: row; padding-bottom: 10px;"">
        <a href="#" class="button button-primary current">My Dashboard</a>
        <a href="#" class="button button-primary">Waterman</a> 
    </div>
    <a href="#" class="button-secondary">edit widgets</a>
    <div style="display: flex;">
    </div>
</div>

<div style="display: flex; padding: 5vw;">
    <div class="container">
        <p>Dashboard</p>

        <div class="draggable" draggable="true">
            <div class="timeline-button"></div>
        </div>
        <p class="draggable" draggable="true">2</p>
    </div>
    <div class="container">
        <p>Unused Widgets</p>

        <p class="draggable" draggable="true">3</p>
        <p class="draggable" draggable="true">4</p>
    </div>
</div>




</body>
    <script src="widgets.js"></script>
</html>

