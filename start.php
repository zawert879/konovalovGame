<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Можно 5 </title>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</head>
<body >
	<div class="container ">
	<?php
	spl_autoload_register(function ($class_name) {
		include $class_name . '.php';

	});

	include_once "Settings.php";


///////////////////////////////fight/////////////////////////

	if(count($playerDire->getUnits()) !=2 && count($playerRadiant->getUnits()) !=2){
		echo '<h2 class="center"> ты как на войну собрался,собери полную команду,придурок!!! </h2>';
	}else {
		?>
		<table class="striped centered">
			<thead>
				<tr>
					<th><?php echo $playerDire->getTeam() ?></th>
					<th><?php echo $playerRadiant->getTeam() ?></th>
				</tr>
			</thead>
			<tbody><?php 

			while ($playerRadiant->getAllLive() !=0 && $playerDire->getAllLive() !=0) {

				$unitsDire = $playerDire->getUnits();
				$unitsRadiant = $playerRadiant->getUnits();

				$keyDire = array_rand($unitsDire);
				$keyRadiant = array_rand($unitsRadiant);

				if($unitsDire[$keyDire]->atack($playerRadiant)){
					echo '<tr><td colspan="2" class="red white-text" >Юнит игрока '.$playerDire->getTeam()." мертв </td></tr>";
				}
				if($unitsRadiant[$keyRadiant]->atack($playerDire)){
					echo '<tr><td colspan="2" class="red white-text" >Юнит игрока '.$playerRadiant->getTeam()." мертв</td></tr>";
				}
				echo "<tr>";
				echo'<td> '.$playerRadiant->getTeam()."=".$playerRadiant->getAllLive()."</td>";
				echo"<td>".$playerDire->getTeam()."=".$playerDire->getAllLive()."</td>";
				echo "</tr>";
			}

			?>

		</tbody>
	</table>
	<?php 
	if ($playerDire->getAllLive() != 0) {
		echo '<h1 class="center">Игрок '.$playerDire->getTeam()." Победил</h1>";
	}

	if ($playerRadiant->getAllLive() != 0) {
		echo '<h1 class="center"> Игрок '.$playerRadiant->getTeam()." Победил</h1>";
	}
}
?>
</div>
<div class="container">
	Copyright © 2018 Cruches and Bikes
</div>
</body>
</html>