 <?php
        use EJEMPLOS\POO\Mascota as Mascota;
        require_once __DIR__ . '/Mascotas.php';
        echo '<ul>';
        $masc1 = new Mascota('Princesa', 'Pitbull', '5', '30kl', '');
        $masc1->mostrar();
        echo '<ul>';
        $masc2 = new Mascota('Duke', 'Pastor Aleman', '2', '20kl', '');
        $masc2->mostrar();
        echo '<ul>';
        $masc3 = new Mascota('Galleta', 'Mestizo', '2', '15kl', '');
        $masc3->mostrar();
        echo '<ul>';
        $masc4 = new Mascota('Princesa', 'Pitbull', '5', '50kl', '');
        $masc4->mostrar();
        echo '<ul>';
        $masc5 = new Mascota('Princesa', 'Pitbull', '5', '50kl', '');
        $masc5->mostrar();
        echo '<ul>';
        
    ?>