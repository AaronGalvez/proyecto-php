<?php
//inicializar una nueva sesion de curl; ch = curl handle
const API_URL = "https://whenisthenextmcufilm.com/api";
//indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
$ch = curl_init(API_URL);
//ejecutar la peticion y guardamos el resultado
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
//cerrar la sesion de curl

//alternativa seria utilizar file_get_contents
// $response = file_get_contents(API_URL); //solo si quieres hacer un get de una API

$data = json_decode($response, true);

curl_close($ch);
?>
<head>
    <title>La proxima pelicula de Marvel</title>
    
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>

<section>
    <pre>
<?php //var_dump($data); ?>
    </pre>
</section>


<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" alt="Poster de la pelicula" width="300"/>
        <h1>Próxima película de Marvel en <?= $data["following_production"]["days_until"] ?> días</h1>
        <h2><?= $data["title"] ?></h2>
        <h3>Fecha de estreno: <?= $data["release_date"] ?></h3>
        <p><?= $data["overview"] ?></p>
        <p> cual es la siguiente pelicula de Marvel<?= $data["following_production"]["title"] ?></p>
    </section>
    
</main>

<style>
    main {
        display: grid;
        place-content: center;
        text-align: center;
        gap: 1rem;
    }
    section {
        max-width: 600px;
    }
</style>