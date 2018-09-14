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
                echo '<br>';
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
                echo "<br>";
                $arreglo = array(2,"hola",5);
                print_r($arreglo);
                //echo $arreglo[2] . "<br>" . $arreglo[1];
            ?>
        </h1>
        <pre>
            <h3>
                <?php
                    var_dump($arreglo);
                    echo '<br>';
                    $arreglo[] = "Python";
                    var_dump($arreglo);

                    //Arreglos asociativas
                    $usuarios = array('nombre' => "Juan",
                            "Apellido" => "zabala","Cedula" => 1234);
                    echo "<h1>" . $usuarios['nombre'] . "</h1>"; 
                    echo 'hola' . "<br>";
                    $existe = in_array("Juan", array_values($usuarios));
                    var_dump($existe);
                    //Recorriendo un arreglo con foreach
                    //foreach
                    /*foreach ($usuarios as $user){
                        echo "<li>". $user."</li>";
                    }*/
                ?>
                <ul>
                    <?php
                        //Recorriendo un arreglo con foreach
                        //foreach
                        foreach ($usuarios as $user){
                            echo "<li>". $user."</li>";
                        }
                        //foreach mostrando indice y valor del arreglo
                        foreach ($usuarios as $key => $user){
                            echo "<li>".$key." ".$user."</li>";
                        }
                        //ciclo for
                        for($i =0; $i <4; $i++){
                            echo $i;
                        }
                        //ciclo while
                        echo '<br>';
                        $cont = 0;
                        while($cont < 5){
                            echo $cont;
                            if($cont ==3){
                                break;
                            }
                            $cont++;
                        }
                    ?>
                </ul>
            </h3>
            
        </pre>
    </body>
</html>
