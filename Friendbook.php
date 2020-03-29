<!DOCTYPE html>
<html>
    <head>
        <title>Friendbook</title>
        <meta charset="utf-8" />
    </head>
    <body>  

        <header bgcolor="black">
       	    <h1 color="white">
            Friend book
            </h1>
        </header>
        	
        <form action="Friendbook.php" method="post">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>

        <?php

        $filename = 'friens.txt';
        $file = fopen($filename,"r");
        while (!feof($file)){
            $ligne = fgets($filename);
        }

        $file = fopen($filename, "a");
        fwrite($filename, "some string");
        ?>
    </body>
</html>