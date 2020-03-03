<?php


 $Array =["ma","es","na","l","qui","n"];
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCUENTRA LA PALABRA</title>
</head>
<body>
<style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
        </style>
        <div class="container">
    
    ENTRADA<br> <?= implode(',', $Array) ?>
    <br><br>
    SALIDA
    <body>

        <script>

            var pal1=prompt(" primera palabra");
            var pal2=prompt(" segunda palabra");
            var pal3=prompt(" tercera palabra");
            




 var palabra=pal1.charAt(0).toUpperCase() + pal1.slice(1)+", "+pal2.charAt(0).toUpperCase() + pal2.slice(1)+", "+pal3.charAt(0).toUpperCase() + pal3.slice(1)+" ";
            document.write("<br>" + palabra);


        </script>
    </body>



    



