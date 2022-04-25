<!-- # by OTOUNGA Gwaldys -->
<html>
    <head>
        <title>My Beautiful</title>
    </head>

    <body>
        <h1>my shop is here</h1>
        <ul>
            <?php

            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);

            $products = $obj->products;

            foreach ($products as $product) {
                echo "<li>$product</li>";
            }

            ?>
        </ul>
    </body>
</html>
