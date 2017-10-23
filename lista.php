<!DOCTYPE html>
<html>
<head>
    <title>Proba</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <meta http-equiv="Refresh" content="15" /> 
<?php
require_once("connect.php");
$pol = new mysqli($adres, $uzytkownik, $haslo, $baza);

if($pol->connect_errno != 0)
{
   
    echo "Błąd";
    
}
else
{
    
    $sql = "SELECT COUNT(ID) as Suma FROM wygrani;";
    if ($result = $pol->query($sql)) 
    {
        ?><table cellpadding="5px" class="win">
            <tr>
                <th>Nazwa gracza</th>
                <th>Wynik</th></tr><?php
        $baza = $result->fetch_assoc();
        for($i = 1; $i <= $baza['Suma']; $i++)
        {
            
            $id = $i;
            $sql = "SELECT * FROM wygrani WHERE ID = $id;";
            if ($result = $pol->query($sql)) 
            {
                ?><tr>
                    <td><?php
                $ww = $result->fetch_assoc();
                echo $ww['nazwa']
                    ?></td>
                    <td><?php
                echo $ww['czas'];
                    ?></td>
                    </tr><?php
            }
          

        }

        ?></table><?php
    }
}
?>

</html>



