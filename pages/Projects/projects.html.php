<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta charset="UTF-8">
        <title>Michael Kubiak</title>
        <meta name="Projects" content="" id="name"/>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <?php include("../../php/menus.php")?>
    </head>
    <body>
        Hello
        <div>
            <?php
                echo json_encode(getMenuLists(".."), JSON_HEX_TAG), "<br>";
            ?>
        </div>
        <?php getCurrentPage(); ?>
    </body>
</html>