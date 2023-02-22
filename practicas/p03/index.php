<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Práctica 2</title>
</head>
<body>
    <h2>Inciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta ya que es valido, inicia con un underscore <br>';

        $_7var = 11;
        echo '$_7var es correcta ya que es valido, inicia con un underscore <br>' ;

        //myvar = 3.141516;
        echo 'myvar es incorrecta <br>';

        $myvar = 3.1416;
        echo '$myvar es correcta, uso correcto del nombre y contiene el signo $';

        $var7 = 21;
        echo '$var7 es correcta';

        $_element1 = '<3';
        echo '$_element1 es correcto';

        //$house*5 = 'hola';
        echo '$house*5 es incorrecto';

    ?>
    <h2>Inciso 2</h2>
    <p>2. Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”, $b = 'MySQL', $c = "ampa"</p>
    <?php
        $a = 'ManejadorSQL';
        $b = 'MySQL';
        $c = "&amp$a";
        $a = 'PHP server';
        $b = "&amp$a";
        echo "$a <br>";
        echo "$b <br>";
        echo "$c <br>";
    ?>
    <p>Se les asigno los mismos valores debido a que tenemos en nuestras variables "amp$a" lo que significa que las variables tomaran dicho valor que en este caso es PHP server &nbsp;</p>
    <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables (imprime todos los componentes de los arreglo):</p>
    <p> $a = “PHP5”, $z[] = amp$a, $b = “5a version de PHP”, $c = $b*10, $a .= $b, $b *= $c, $z[0] = “MySQL”;</p>
    <?php
       $a = 'PHP5';
       echo "$a <br>";
       $z[] = "&amp$a";
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
    <h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
la matriz $GLOBALS o del modificador global de PHP.</p>
    <p> $a = “PHP5”, $z[] = "amp$a", $b = “5a version de PHP”, $c = $b*10, $a .= $b, $b *= $c, $z[0] = “MySQL”;</p>
    <?php
       $a = "PHP5";
       $z[] = "&amp$a";
       $b = '5a version de PHP';
       $c = "$b*10";
       $a .= $b;
       "$b *= $c";
       $z[0] = "MySQL";
       function test()
       {
       global $a, $z, $b, $c;
       }
       test();
       echo "$a <br>";
       var_dump ($z);
       echo "<br> $b <br>";
       print_r($c);
       //echo "<br> $a <br>";
    ?>
    <h2>Inciso 5</h2>
    <p>5. Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
    <p>$a = “7 personas”;
$b = (integer) $a;
$a = “9E3”;
$c = (double) $a;</p>
    <?php
        $a = "7 personas";
        echo "El valor de a es: $a";
        $b = (integer)$a;
        echo "<br> El valor de b es: $b <br>";
        $a = "9E3";
        echo "El valor nuevo de a es: $a <br>";
        $c = (double) $a;
        echo "El valor de c es: $c";
    ?>

    <h2>Inciso 6</h2>
    <p>
    Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas &nbsp;
    usando la función var_dump("datos"). &nbsp;
    </p>

    <?php
    $a = TRUE;
    $b = TRUE;
    $c = FALSE;
    $d = FALSE;
    $e = TRUE;
    $f = FALSE;

    var_dump($a); echo '<br>';
    var_dump($b); echo '<br>';
    var_dump($c); echo '<br>';
    var_dump($d); echo '<br>';
    var_dump($e); echo '<br>';
    var_dump($f);

    echo '<br>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e <br>
    en uno que se pueda mostrar con un echo:<br>';

    unset($a, $b, $c, $d, $e, $f);

    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    echo 'Valor de a: '.$a.'<br>';
    echo 'Valor de b: '.$b.'<br>';
    settype($c, "integer");
    echo ' Valor de $c: '.$c.'<br>';
    echo 'Valor de $d: '.$d;
    settype($e, "integer");
    echo '<br> Valor de $e: '.$e.'<br>';
    echo 'Valor de $f: '.$f.'<br>';
    ?>

    <h2>Inciso 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <p> a. La versión de Apache y PHP, &nbsp; b. El nombre del sistema operativo (servidor), &nbsp; c. El idioma del navegador (cliente). &nbsp;</p>

    <?php
    echo $_SERVER['SERVER_SIGNATURE'];
    echo $_SERVER['SERVER_NAME'];echo '<br>';
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?> 
    <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="XHTML 1.1 válido" height="31" width="88" /></a>
    </p>
</body>
</html>