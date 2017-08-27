<?php
/**
 * Created by PhpStorm.
 * User: JohnNate
 * Date: 8/26/17
 * Time: 9:59 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
<!--        Title-->
        <title><?php echo $page_title ?></title>

<!--        Meta-tags-->
        <meta charset="UTF-8">
        <meta name="description" content="Masakin">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Byteforce Indonesia">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--        CSS-->
        <link rel="stylesheet" href="./assets/css/bootstrap.css">

<!--        JS-->
        <script src="./assets/js/bootstrap.js"></script>
    </head>
    <body>

        <section id="header">

        </section>

        <section id="body">
            <?php echo $body ?>
        </section>

        <section id="footer">

        </section>

    </body>
</html>