<?php

include 'includes/data.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Vue Dischi</title>
</head>
<body>
    <header>
        <img class="header-logo" src="img/spotify.png" alt="spotify_logo">
        <!-- <div>
            <select v-model="selectedOption">
                <option value="">{{ placeholder || 'Choose an Option:' }}</option>
                <option v-for="(option, index) in options" :key="option.id || index">{{ option }}</option>
            </select>
        </div> -->
    </header>
    <main>
        <section id="card-section">
            <?php foreach($albums as $album): ?> <!-- CICLO FOR QUA -->
                <div id="card">
                    <img src="<?= $album['poster'] ?>" alt="album_cover">
                    <h1><?= $album['title'] ?></h1>
                    <h5><?= $album['author'] ?></h5>
                    <h6><?= $album['year'] ?></h6>
                </div>
            <?php endforeach; ?> <!-- FINE CICLO FOR QUA -->
        </section>
    </main>
</body>
</html>