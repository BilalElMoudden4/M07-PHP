<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica3 M07 PHP</title>
</head>
<body>

    <?php
        $restaurantTaules = array();

        for ($i = 1; $i <= 10; $i++) {
            $comensals = rand(0, 5); // Simular comensales aleatorios
            $restaurantTaules[$i] = $comensals;

            echo "Taula $i ";
            if ($comensals == 0) {
                echo "está vacía";
            } elseif ($comensals == 5) {
                echo "está llena";
            } else {
                echo "tiene $comensals comensals";
            }
            echo "<br>";
            echo "<br>";
        }
        
    ?>

    



</body>
</html>
