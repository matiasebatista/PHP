<html>
    <head>
        <title>Hola PHP</title>
    </head>
    
    <body>
        <?php
        /* Comentario en PHP */
        /*
         * las variables comienzan siempre con $
         */
        $frase = "hola a todos";
        $_frase2 = "adios";
        $nro = 5;
        $option = true;
        $nrodeci = 5.5;
        $nrodeci2 = 3.51;
        echo gettype($frase)."<br>";
        print gettype($nro) ."<br>"; /* el . es relacion de pertenencia y asume el formato por primera carga */
        print gettype($option)."<br>";
        echo gettype($nrodeci)."<br>";
        $nro3 = (integer) $nrodeci2;
        echo $nro3;
        ?>

        <?php
        $mensaje_es = "hola";
        $mensaje_en = "hello";
        $idioma = "en";
        $mensaje = "mensaje_" . $idioma;

        print "<br>".$mensaje;
        print "<br>".$$mensaje; /* $$ hace que ejecute el contenido de lo que esta escrito */

        $A = "chau";
        $a = "hola";
        $$a = "mundo";
        echo "<br>"."$a ${$a}"."<br>";
        echo $$a."<br>";
        echo "$$a"
        ?>
        <?php
        $nombre = "ana";
        $alias = & $nombre;
        $alias2 = $nombre;         //el & ubica la posicion de memoria donde nombre queda colocado
        print "<br>" . $nombre;
        print "<br>".$alias;
        $nombre = "matias";
        print "<br>" . $nombre;
        print "<br>".$alias;
        print "<br>".$alias2."<br>";
        ?>
      
        <?php
          /*definicion de constantes*/
        const VALOR_MIN = 10;
        const VALOR_MAX = 20;

        echo "<br>".VALOR_MAX;
        

        
        ?>

    </body>
</html>