<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style2.css" rel="stylesheet">
    </head>
    <body>
        <div class = 'container'>
            <?php
                $fname = $_POST['fname'];
 
                echo "<span> $fname </span>";
            ?>
        </div>
    </body>
</html>