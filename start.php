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
	
		$data = $_POST;
		$playerRadiant = new Player($data['nameRadiant']);
		$playerDire = new Player($data['nameDire']);

		unset($data['nameRadiant']);
		unset($data['nameDire']);
		
		for ($i = 1; $i < 11; $i++) {

			if (isset($data['unitRadiant'.$i])) {
				$className = "Units\\".$data['unitRadiant'.$i];
				$unitsRadiant[] = new $className();			
			}
			if (isset($data['unitDire'.$i])) {
				$className = "Units\\".$data['unitDire'.$i];
				$unitsDire[] =new $className();			
			}
		}

		$playerRadiant->setUnits($unitsRadiant);
		$playerDire->setUnits($unitsDire);


///////////////////////////////fight/////////////////////////

		if(count($playerDire->getUnits()) !=10 && count($playerRadiant->getUnits()) !=10){
			echo '<h2 class="center"> ты как на войну собрался,собери полную команду,придурок!!! </h2>';
		}
		else {
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
						$playerDire->removeUnit($unitsDire[$keyDire]);
					}
					if($unitsRadiant[$keyRadiant]->atack($playerDire)){
						echo '<tr><td colspan="2" class="red white-text" >Юнит игрока '.$playerRadiant->getTeam()." мертв</td></tr>";
						$playerRadiant->removeUnit($unitsRadiant[$keyRadiant]);
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