
<?php
if(trim($_POST['nick']) == '')
{
    header("Location: newGame.php");
}
else
{
    $_SESSION['t'] = time();
    session_start();
    $_SESSION['nick'] = $_POST['nick'];
    $_SESSION['licz'] = 0;
    $_SESSION['pkt'] = 0;
    
    header("Location: game.php");
}

?>