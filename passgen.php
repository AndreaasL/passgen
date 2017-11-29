<!DOCTYPE html>
<html>
    <head>
        <title>Vaš password je: </title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
    </head>

    <body>
    <p><?php echo('Vaš password je:'); ?></p>
<?php 
//print_r($polje);

function izgen($koliko)
{
    $velika = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V',
    'W','X','Y','Z');
    $mala = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v',
    'w','x','y','z');
    $brojevi = array('0','1','2','3','4','5','6','7','8','9');
    $posebni = array(',','.',';','!','.');

    for($i = 0;$i <$koliko; $i++)
    {
        if(isset($_POST['brojevi']) == true && isset($_POST['posebni'])==true)
            {
                $spojeno = array_merge($velika, $mala, $brojevi, $posebni);
                echo($spojeno[rand(0, sizeof($spojeno)-1)]);
            }
        elseif(isset($_POST['brojevi']) == true && isset($_POST['posebni']) !=true)
            {
                $spojeno = array_merge($velika, $mala, $brojevi);
                echo($spojeno[rand(0, sizeof($spojeno)-1)]);
            }
        elseif(isset($_POST['posebni'])== true && isset($_POST['brojevi']) != true)
            {
                $spojeno = array_merge($velika, $mala, $posebni);
                echo($spojeno[rand(0, sizeof($spojeno)-1)]);
            }
        else
            {
                $spojeno = array_merge($velika, $mala);
                echo($spojeno[rand(0, sizeof($spojeno)-1)]);
            }
    }
}

izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
izgen($_POST['broj_znakova']); echo('<br>');
?>
    </body>
</html>