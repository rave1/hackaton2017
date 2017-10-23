<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Witamy w naszym projekcie Klawiaturnoix 4000" />
  <meta name="klawiatura,grywalizacja,contest,wyscigi,kto,czyta,tagi,ten,ma,lagi" />
  <link rel="stylesheet" href="style.css" type="text/css"/>
  <title>Klawiaturonix</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
  <div id="container">
      <div id="main">
      <div id="logo">Klawiaturonix 4000</div>
          <div id="wyniki">
          <div id="menu">
            <center><p id="mm"><h1>Menu:</h1></p></center>
          <a href="index.php"><div class="button">Strona główna</div></a> 
          <a href="newGame.php"><div class="button1">Nowa Gra</div></a>
          <div style="clear:both;"></div>
        </div>

            <?php header('refresh: 10;');
              include_once("lista.php")?>
        </div>    
        <div id="opis">
          <center><p><h1>Witamy w grze Klawiaturonix 4000</h1></p><br/>
          <p>Nasza gra polega na przepisywaniu wyświetlonego tekstu na czas.<br>
          Punkty są liczone za poprawnie napisane zdania oraz za czas.<br/>
          Aby rozpocząć grę należy wejść w zakładkę "Nowa Gra", a następnie podać Swój nick i rozpocząć grę.</p></center>
          <div class="line"></div>
          <br/><br/>
          <center><p title="s">Autorami strony są:<p></center>

          <a href="https://www.facebook.com/BartoszBlyszcz" target="_blank">
          <div class="container">
            <img src="img/bb1.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Bartosz Błyszcz</div>
            </div>
          </div>
          </a>

          <a href="https://www.facebook.com/linuxik.is.my.city" target="_blank">
          <div class="container">
            <img src="img/ks.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Jakub Sopel</div>
            </div>
          </div>
          </a>

          <a href="https://www.facebook.com/profile.php?id=100003020573903" target="_blank">
          <div class="container">
            <img src="img/jw.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text">Jakub Włodarczyk</div>
            </div>
          </div>
          </a>
          <div style="clear: both;"></div>
        </div>
      </div>
</div>
  </div>
</body>






</html>
