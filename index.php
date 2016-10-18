<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANGELONI TP4</title>
        <link rel="stylesheet" href="general.css" />
    </head>
    <body>
        <?php
            // put your code here
            include 'menu.html';
            include_once './tracks/Track.php';
            
            $track = new Track(3, "artas", "a song of ice and fire", "e0e95d17-82c4-450b-8ab4-ed984eb54d02", "7f91a2fb-67cb-4a1d-aac5-ff45b01145c0", "c8d2e15f-949b-44ac-8ccc-2238026b1df9", 336000, 2711, 13733, "AR1C7VA1187FB37AF3", "SOLXPCK12A58A7B064", 344.98667, 94.994, -4.718, 0.156996, 0.562216, 0.872874, 1, 1, 4, 2008);
            $xml = $track->getInfoXML();
            echo $xml;
        ?>
        
    </body>
</html>
