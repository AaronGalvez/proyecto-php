<?php
    $name = "miguel";
    $edad = 25;
    var_dump($name);//Muestra el tipo de dato y su valor
    echo "<br>";
    echo gettype($edad);//Muestra solo el tipo de dato
    echo "<br>";
    echo is_string($edad);//Devuelve true o false si es string
    echo "<br>";

    if($edad >= 18){
        echo "<h1>Eres mayor de edad</h1>";
    } else {
        echo "<h1>Eres menor de edad</h1>";
    }



    $output = match(true){
        $edad < 18 => "Eres menor de edad",
        18 <= $edad && $edad < 65 => "Eres adulto",
        default => "Eres adulto mayor"
    };

    $variable = ["dato1", "dato2", "dato3", 1, 2];
    $variable[3] = "dato4";
?>

<ul>
    <?php foreach($variable as $item) : ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>
<!-- otra forma de hacer los IFs -->

<?php if($edad >= 18): ?>
    <h1>Eres mayor de edad</h1>
<?php else: ?>
    <h1>Eres menor de edad</h1>
<?php endif; ?>

<h1>
<?= "Hola, " . $name . "!"; ?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
    }
</style>