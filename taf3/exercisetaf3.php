<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Exo Taf 3</title>

</head>
<body>
	<form method="POST">
		Donner une valeur supérieure à 10.000
		<input type="text" name="nombre">
		<input type="submit" name="bouton" value="validate">
	</form>

	<br/> <br/>

	<?php
        $tp="";
        if (isset($_POST['nombre'])) {
            $n = intval($_POST['nombre']);

            if ($n <= 10000) {
                echo "Incorrect, veuillez saisir un nombre supérieur à 10000";
            } else {
                $t = array();
                $k=0;
                for ($i=1; $i <= $n; $i++) {
                    $t[$k] = $i;
                    $k++;
                }
            }
            $_SESSION[$tp] = $t;
        }
   
    if (isset($_SESSION[$tp])) {
        // var_dump($_SESSION[$tp]);

        $tab = array("inferieur" => array(),
                "superieur" => array());
        $valeurTotal = sizeof($_SESSION[$tp]);

        $somme = array_sum($_SESSION[$tp]);

        $moyenne = $somme / $valeurTotal;
        echo 'La moyenne est:  ' .$moyenne;

        foreach ($_SESSION[$tp] as $value) {
            if ($value>$moyenne) {
                array_push($tab["superieur"], $value);
            } else {
                array_push($tab["inferieur"], $value);
            }
        }

        $NbreParPage = 100;
        $valeurTotalInf = sizeof($tab["inferieur"]);
        $valeurTotalSup = sizeof($tab["superieur"]);
        $NbreDePageInf = ceil($valeurTotalInf / $NbreParPage);
        $NbreDePageSup = ceil($valeurTotalSup / $NbreParPage);
    
        if (isset($_GET['page'])) {
            $pageActuelle=$_GET['page'];
        } else {
            $pageActuelle=1;
        }
        echo "<br/>";
        echo "<br/>";
        echo '<div style=" width : 100%; height: 300px; ">';
        echo'
		<div style=" float: left ;width: 40%; height: 300px; background-color: white;">
		<table style="width:100%" cellspacing="0";>
		<legend style="text-align: center"> <strong>Tableau de quelques valeurs inférieures à la moyenne</strong></legend>
		<tr>';
        for ($i=($pageActuelle-1)*100;$i<$pageActuelle*100;$i+=10) {
            for ($j=$i;$j<=$i+9;$j++) {
                if ($j>=$valeurTotalInf) {
                    break;
                }
                echo'<td style="border: 2px solid grey;">'.$tab["inferieur"][$j].'</td>';
            }
            echo'</tr>';
        }
        echo'</table>';

        for ($i=1; $i <=$NbreDePageInf ; $i++) {
            echo ' <a href="exercisetaf3.php?page='.$i.'">'.$i.'</a> ';
        }

        echo("<div/>");
        echo "<br/>";
        echo "<br/>";

        echo '
		<div style=" float: right ;width: 100%; height: 300px; background-color: white;">
		<table style="width:100%" cellspacing="0";>
		<legend style="text-align: center"> <strong>Tableau de quelques valeurs supérieures à la moyenne</strong></legend>
		<tr>';
        for ($i=($pageActuelle-1)*100;$i<$pageActuelle*100;$i+=10) {
            for ($j=$i;$j<=$i+9;$j++) {
                if ($j>=$valeurTotalSup) {
                    break;
                }
                echo'<td style="border: 2px solid grey;">'.$tab["superieur"][$j].'</td>';
            }
            echo'</tr>';
        }
        echo'</table>';

        for ($i=1; $i <=$NbreDePageSup ; $i++) {
            echo ' <a href="exercisetaf3.php?page='.$i.'">'.$i.'</a> ';
        }

        echo("<div/>");
        echo "<div/>";
    }

        
    

     ?>

</body>
</html>