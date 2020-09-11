<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Covid Angola</title>
</head>
<body>
<header>Covid Angola</header>

<div class="container-fluid">

<div class="row-fluid">
<div class="active col-sm-12 col-md-4 col-lg-4">
        <header class="headerActive">Activo</header>
        <p class="ValorActive"></p>
</div>

<div class="death col-sm-12 col-md-4 col-lg-4">
    <header class="headerDeath">Mortos</header>
        <p class="ValorDeath"></p>
</div>

<div class="recovered col-sm-12 col-md-4 col-lg-4">
   
    <header class="headerRecovered">Recuperados</header>
        <p class="ValorRecovered"></p>
   
</div>
</div>
</div>


<footer>
    <p id="dadosPeople">População: </p>
    <p id="dadosActivos">Percentagem de Activos: </p>
    <p id="dadosDeath">Percentagem de Mortes: </p>
    <p id="dadosRecovered">Percentagem de Recuperados: </p>
    Desenvolvido por Guel de Almeida
</footer>

<script src="js/GetCovid.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>