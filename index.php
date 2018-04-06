<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vitamap</title>
    </head>
    <body>
        <?php
        $v=file_get_contents('https://www.vitamap.com/');
        echo $v;
        ?>
    </body>
</html>
