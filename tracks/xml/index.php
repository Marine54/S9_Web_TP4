<!DOCTYPE html>

<html>
    <head>
        <title>TP3 ANGELONI</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="../../general.css" />

    </head>

    <body> 
        <?php
        include_once '../../menu.html';
        ?>
        <form>
            <label>Choisissez un titre</label>
            <input type="text" name="search" id="bsearch" onkeyup="retrieve()" />
        </form>

        <div id="results">

        </div>
        <!-- Insertion du script pure JavaScript -->
        <script type="text/javascript" src="js/tp3.js"></script>
    </body>
</html>
