<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="site.css">

    <title>Muuri Grid</title>
</head>
<body>

    <div class="grid">
        <div class="item">
            <div class="item-content" id="compliance-pie">
            </div>
        </div>
        <div class="item">
            <div class="item-content">
                Two
            </div>
        </div>
        <div class="item tall">
            <div class="item-content">
                Three
            </div>
        </div>
        <div class="item">
            <div class="item-content">
                Four
            </div>
        </div>
        <div class="item wide">
            <div class="item-content">
                Five
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>

    <script>
        const grid = new Muuri('.grid', {
            dragEnabled: true,
        });
    </script>
</body>
</html>