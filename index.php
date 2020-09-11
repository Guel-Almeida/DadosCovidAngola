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
<header><h1>Covid Angola</h1></header>
<div class="container-fluid">

<div class="row-fluid">
<div class="geral active col-sm-12 col-md-4 col-offset-md-6">
        <header class="headerActive"><h3>Activo</h3></header>
        <div class="dados">
            <p class="ValorActive"></p>
        </div>
       
</div>

<div class="geral death col-sm-12 col-md-4 col-offset-md-6">
    <header class="headerDeath"><h3>Mortos</h3></header>
    <div class="dados"><p class="ValorDeath"></p></div>
</div>

<div class="geral recovered col-sm-12 col-md-4 col-offset-md-6">
   
    <header class="headerRecovered"><h3>Recuperados</h3></header>
    <div class="dados"> <p class="ValorRecovered"></p></div>
   
</div>
</div>
</div>
<div class="row-fluid">
<footer class="footer">
<table class="table .table-dark">
  <thead>
    <tr>
      <th >População</th>
      <th >Activos</th>
      <th > Mortos</th>
      <th >Recuperados</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="dadosPeople"></td>
      <td id="dadosActivos"></td>
      <td id="dadosDeath"></td>
      <td id="dadosRecovered"></td>
    </tr>
  </tbody>
    
</table>
     Desenvolvido por Miguel Almeida
</footer>
</div>






<script src="js/GetCovid.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>