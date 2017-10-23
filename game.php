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
        <div id="opisn">
          

<?php
   session_start();
   require_once("connect.php");
   $pol = @new mysqli($adres, $uzytkownik, $haslo, $baza);
   $pol->set_charset("utf8");
    


 
    if ($pol->connect_errno != 0) 
    {
        echo '<div class="error">[!!!] Błąd połączenia z bazą danych. Skontaktuj się z administratorem systemy [!!!]</div>';
    }
    else
    {
        if(isset($_POST['wynik']))
        {
            $www = $_POST['wynik'];

            $id = (int) $_SESSION['w'];
 

            $sql = "SELECT * FROM gra WHERE ID = $id";
            $r = @$pol->query($sql);
            $rr = $r->fetch_assoc();
 

            $sql = "SELECT * FROM gra WHERE ID = $id AND tekst = \"$www\";";
            if($r = @$pol->query($sql))
            {


                $results = $r->num_rows;
 
                if($results == 1)
                {

                    if(isset($_SESSION['pkt']))
                    {
                        $_SESSION['pkt'] +=2000;
                    }
                    else
                    {
                        $_SESSION['pkt'] = 1;
                    }
                }
            }
        }
        $d = array(0);
        if($_SESSION['licz'] != 11)
        {
            $sql = "SELECT COUNT(ID) as Wiersz FROM gra;";
            if($result = @$pol->query($sql))
            {
                $w = $result->fetch_assoc();
                $ww = $w['Wiersz'];

                if($ww > 1)
                {
                    do
                    {
                        $a = rand(1, $ww);
                    }
                    while(in_array($a, $d));
                    $d[] = $a;
                    
                }

                else
                {
                    $a = 1;
                }

                $sql = "SELECT ID, adres FROM gra WHERE ID = $a";
                if($result = $pol->query($sql))
                {
                    
                    $w = $result->fetch_assoc();
                    $_SESSION['w'] = $w['ID'];
                    $_SESSION['licz'] +=1;


                    echo '<center><img src='.$w['adres'].' alt="kot"/><br/>';
                    
                    echo '<form method="POST" action="">';
                    echo '<input type="text" name="wynik" autocomplete="off" required/><br/>';
                    echo '<input type="submit" value="Wyślij"/>';

                    echo '</form></center>';


                }

                
            }
        }
        else
        {
            header("Location: update.php");
        }
        $pol->close();
    }
?>

</div>
  </div>
</body>
