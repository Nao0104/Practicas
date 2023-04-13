<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t04</title>
</head>
<body>
    <!--EJERCICIO DE POO EN PHP:

Crea un index.php que muestre en html la informacion de una lista de mascotas. Para esto crea en un archivo PHP independiente que contenga la implementacion de la clase Mascota.
Una mascota tiene un nombre, una raza, una edad y un peso.
La clase mascota debe tener un constructor y sus metodos "set", asi como un metodo para mostrar la informacion en forma de listas no ordenadas (ul).
En el mismo archivo de la clase Mascota, crea una clase Mascota2 que ademas tenga el atributo foto, que haga referencia al path o url de una imagen.

Haz Uso del namespace adecuado para usar la clase que deberias usar.-->
    <?php
        use EJEMPLOS\POO\Mascota as Mascota;
        require_once __DIR__ . '/Mascotas.php';

        $masc1 = new Mascota('Princesa', 'Pitbull', '5', '30kl', 'img/princesa.jpg');
        $masc2 = new Mascota('Duke', 'Pastor Aleman', '2', '20kl', 'img/duke.jpg');
        $masc3 = new Mascota('Galleta', 'Mestizo', '2', '15kl', 'img/galleta.jpg');
        $masc4 = new Mascota('Fido', 'Labrador', '5', '30kl', 'img/Fido.jpg');
        $masc5 = new Mascota('Rufus', 'Golden Retriever', '2', '50kl', 'img/rufus.jpg');

        $mascotas = array($masc1, $masc2, $masc3, $masc4, $masc5);

        foreach ($mascotas as $mascota) {
			$mascota->mostrar();
		}
    ?>

</body>
</html>