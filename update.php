<?php
session_start();

    $tttt = time();

    $prz = ($tttt - $_SESSION['t']) / 10000000;
    
   require_once("connect.php");
    
    $i1 = $_SESSION['nick'];
    $w1 = round($_SESSION['pkt'] - $prz);
    if($w1 < 0)
    {
        $w1 = 0;
    }
    $_SESSION['pkt'] = $w1;

    $tab = array();
    $pol= new mysqli($adres, $uzytkownik, $haslo, $baza);
    $pol->set_charset('utf8');
    if($pol->connect_errno == 0)
{
    $sql = "SELECT COUNT(ID) as suma FROM wygrani";
    if($r = @$pol->query($sql))
    {
        $rr = @$r->fetch_assoc();
        if($rr['suma'] > 0)
        {

            echo "XX";

            for($i = 1; $i <= (int) $rr['suma'];$i++ )
            {
                $sql = "SELECT * FROM wygrani WHERE ID = $i";
                $ss = @$pol->query($sql);
                $s = $ss->fetch_assoc();
                $tab[] = array($s['ID'], $s['nazwa'], $s['czas']);
            }


            for($s = 0; $s < count($tab);$s++)
            {

                if($w1 >= $tab[$s][2])
                {
                    $p=$s+1;

                    $spqr = "UPDATE wygrani SET ID=$p, nazwa='$i1', czas=$w1 WHERE ID=$p";

                    $sp = $pol->query($spqr);

                    
                    if($rr['suma'] < 10)
                    {
                        
                        for($d = $s; $d <$rr['suma'];$d++)
                        {

                            @$nn = $tab[$d-1][1];
                            @$ww = $tab[$d-1][2];
                            $id = $d +1;
                            $spqr = "UPDATE wygrani SET nazwa='$nn', czas=$ww WHERE ID=$id AND ID != $p";

                            $sp = $pol->query($spqr);

                        }
                        $ii = count($tab) + 1;



                        $nn = $tab[$ii - 2][1];
                        $ww = $tab[$ii - 2][2];


                        $sqls = "INSERT INTO wygrani(ID, nazwa, czas) VALUES ($ii,'$nn','$ww')";



                        $rs = $pol->query($sqls);



                    }
                    else
                    {
                        for($d = $s; $d <$rr['suma'];$d++)
                        {

                            @$nn = $tab[$d-1][1];
                            @$ww = $tab[$d-1][2];
                            $id = $d +1;
                            $spqr = "UPDATE wygrani SET nazwa='$nn', czas=$ww WHERE ID=$id AND ID != $p";

                            $sp = $pol->query($spqr);

                        }
                    }
                    
                    break;

                }
                else if(($rr['suma'] < 10) && $w1 < $tab[count($tab) - 1][2])
                {
                    $ii = count($tab) + 1;
                    $sqls = "INSERT INTO wygrani(ID, nazwa, czas) VALUES ($ii,'$i1','$w1')";
                    $rs = $pol->query($sqls);


                    break;
                }
            }
            header("Location: gamess.php");

        }
        else
        {
            echo "s";
            $sqls = "INSERT INTO wygrani(ID, nazwa, czas) VALUES (1,'$i1','$w1')";


            $rs = $pol->query($sqls);


            header("Location: gamess.php");
        }
        
    }
}
else
{
   
}
?>