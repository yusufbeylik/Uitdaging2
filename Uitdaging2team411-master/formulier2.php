<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Psycode</title>

    <!-- CSS: Bootstrap, new-age, FA5 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="css/new-age.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#ff2222">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
</head>

<body id="page-top">

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Bedankt voor uw Opmerking!</h1>
        <p class="lead">Wij komen hier zo spoedig mogelijk op terug!</p>

    </div>
</div>

<div class="container" >
    <p>Wij hebben de volgende gegevens van u ontvangen: </p>
    <?php
    echo "<ul><li>" . $_POST["naam"] . "</li></ul>";
    echo "<ul><li>" . $_POST["mail"] . "</li></ul>";
    echo "<ul><li>" . $_POST["opmerking"] . "</li></ul>";
    ?>
    <p>Tot binnenkort!</p>
</div>


<!-- JS: jQuery, Bootstrap, new-age -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/new-age.min.js"></script>

</body>

</html>
