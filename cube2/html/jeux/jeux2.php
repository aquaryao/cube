<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux2 - Cesisport</title>
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/jeux2.css">
</head>
<body>
    <?php require_once("../../php/menu-lvl2.php")?>   


    <h1>
      <h1>MEMORY</h1>
    </h1>

    <section class="main">
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>
      <div class="box play"></div>

      <div id="state">
        <span id="time">0</span>
        <span id="score">0</span>
      </div>
    </section>

    <footer>
      <p>
       footer ici 
      </p>
    </footer>

    <section id="pre" class="">
      <div id="themes">
        <h2>Choose your theme</h2>
        <p id="pokemon" class="themes" title="Pokemon">Pokemon</p>
        <p id="starwars" class="themes" title="Star Wars">Star Wars</p>
        <p id="lotr" class="themes" title="Lord of the Ring">Lord of the Ring</p>
        <p id="disney" class="themes" title="Disney">Disney</p>
        <p id="pixar" class="themes" title="Pixar">Pixar</p>
        <p id="harrypotter" class="themes" title="Harry Potter">Harry Potter</p>
      </div>
    </section>

    <section id="post" class="hidden">
      <div>
        <h2>BRAVO !</h2>
        <p id="final"></p>
        <br />
        <p>
          <a id="again">Play Again !</a>
        </p>
      </div>
    </section>

    <script src="../../js/jeux2.js"></script>
    <script src="../../js/menu.js"></script>
</body>
</html>