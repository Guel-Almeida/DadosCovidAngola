<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<main>
<header>Covid Angola</header>

<section>
    <div class="active">
        <header class="headerActive">Activos</header>
        <p class="ValorActive"></p>
    </div>
</section>

<section>
    <div class="death">
    <header class="headerDeath">Mortos</header>
        <p class="ValorDeath"></p>
    </div>
</section>

<section>
    <div class="recovered">
    <header class="headerRecovered">Recuperados</header>
        <p class="ValorRecovered"></p>
    </div>
</section>

</main>


<footer>
    <p id="dadosPeople">População: </p>
    <p id="dadosActivos">Percentagem de Activos: </p>
    <p id="dadosDeath">Percentagem de Mortes: </p>
    <p id="dadosRecovered">Percentagem de Recuperados: </p>
</footer>





<script src="js/GetCovid.js">
   
</script>
</body>
</html>