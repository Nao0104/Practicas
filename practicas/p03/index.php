<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 2</title>
</head>
<body>
    <h2>Inciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta <br>';

        $_7var = 11;
        echo '$_7var es correcta <br>' ;

        //myvar = 3.141516;
        echo 'myvar es incorrecta <br>';
    ?>
    <h2>Inciso 2</h2>
    <p>2. Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”, $b = 'MySQL', $c = &$a</p>
    <?php
        $a = 'ManejadorSQL';
        $b = 'MySQL';
        $c = &$a;
        $a = 'PHP server';
        $b = &$a;
        echo "$a <br>";
        echo "$b <br>";
        echo "$c <br>";
    ?>
    <p>Se les asigno los mismos valores debido a que tenemos en nuestras variables &$a lo que significa que las variables tomaran dicho valor que en este caso es PHP server</p>
    <br>
    <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables (imprime todos los componentes de los arreglo):</p>
    <p> $a = “PHP5”, $z[] = &$a, $b = “5a version de PHP”, $c = $b*10, $a .= $b, $b *= $c, $z[0] = “MySQL”;</p>
    <?php
       $a = 'PHP5';
       echo "$a <br>";
       $z[] = &$a;
       var_dump ($z);
       $b = '5a version de PHP';
       echo "<br> $b <br>";
       $c = "$b*10";
       print_r($c);
       $a .= $b;
       echo "<br> $a <br>";
       "$b *= $c";
       echo "$b <br>";
       $z[0] = 'MySQL';
       var_dump($z);
    ?>

</body>
</html>