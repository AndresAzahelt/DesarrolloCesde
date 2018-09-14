<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            <?php
            //Esto es un comentario
                $PrimeraVariable = 2;
                $SegundaVariable = 5;
                $lenguaje = "Javascript";
                if ($PrimeraVariable == 1 && $SegundaVariable == 5) {
                    echo 'Soy menor';
                }
                else {
                    echo 'Soy mayor';
                }
                switch ($lenguaje) {
                    case "Php":
                        echo 'Php';
                        break;
                    case "Javascript":
                        echo 'Javascript';
                        break;
                    case "html":
                        echo 'Html';
                        break;
                }

            ?>
        </h1>
        <p>
            <h2>
                <?php
                    echo 'Esta es otra sección';
                ?>
            </h2>
        </p>
        
    </body>
</html>
