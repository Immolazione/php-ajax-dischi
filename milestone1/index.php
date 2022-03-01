<?php

include 'data.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VUE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.common.dev.min.js" integrity="sha512-TpgbLHXaTCAZ7ULhjopb1PveTz5Jx6KEQUtMfXhV0m0EArh+6O8ybZjjDN1Yug6oagN6iFm6EoMjuYSiFr0qXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Vue Dischi</title>
</head>
<body>
    <div id="root">
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
    </div>
</body>
</html>