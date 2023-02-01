<html>
    <head>
        <title>Penggunaan Method GET</title>
    </head>
    <body>

        <form action="#" method="get">
            Nama: <input type="text" name="nama"><br>

            <input type="submit">
        </form>

        <?php
            if(isset($_GET["nama"])){
                echo "Nama : ".$_GET["nama"];
            }
        ?>
    </body>
</html>