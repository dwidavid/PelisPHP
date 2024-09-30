<?php 

 # Url: https://whenisthenextmcufilm.com/api
const API_URL = "https://whenisthenextmcufilm.com/api";
 $ch = curl_init(API_URL);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );

 $result = curl_exec($ch);
 $data = json_decode($result,true);

 curl_close($ch);



?>

<head>
    <title>
        La proxima Pelicula de marvel
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
    <img src="<?= $data["poster_url"];?>" width="300" alt="" style="border-radius: 16px;">
    </section>

    <hgroup>
        <h2><?= $data["title"]; ?> Se estrena en <?= $data["days_until"]; ?> </h2>
        <p> Fecha de estreno <?= $data["release_date"]; ?> </p>
        <p>La siguiente peli es: <?= $data["following_production"]["title"];  ?> </p>
    </hgroup>
</main>

<style>

    body{
        display: grid;
        place-content: center;
    }

img{
    margin: 0 auto;
}

section{
    display: flex;
    justify-content: center;
    text-align: center;
}

hgroup{
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;    
}

</style>
