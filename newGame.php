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
            <center>            
              <form method="POST" action="games.php">                
                <p id="lst">Podaj swój nick:</p><br/>
                <input type="text" name="nick" required/><br/>           
                <input type="submit" value="Start"/>           
              </form>
            </center>
          </div>
        </div>
  </div>
</body>






</html>
