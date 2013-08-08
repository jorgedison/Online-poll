<?php
    require('conexion.php');
    $sql = "SELECT * FROM encuestas ORDER BY id DESC";
    $req = mysql_query($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <h1>Consulta</h1>
        <ul class="votacion index">
        <?php
            while($result = mysql_fetch_object($req)){
                echo '<li><a href="encuesta.php?id='.$result->id.'">'.$result->titulo.'</a></li>';
            }
        ?>
        </ul>
    </div>
</body>
</html>
