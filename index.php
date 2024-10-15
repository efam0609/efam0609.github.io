<?php
$Server = $_SERVER["HTTP_HOST"];
$dbname = "cedif_bagua_db";
$url = "http://".$Server;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERICK FABRICIO AYMA MORENO</title>
</head>

<body>
    <div style="text-align: center;">
        <div>
            <label for="nombre">Nombre: </label>
            <input id="nombre" name="nombre" type="text" value="ERICK FARBICIO AYMA MORENO" disabled>
        </div>
        <div>
            <label for="host" for="">HOST: </label>
            <input id="host" name="host" type="text" value="<?php echo $url?>" disabled>
        </div>

    </div>
</body>

</html>