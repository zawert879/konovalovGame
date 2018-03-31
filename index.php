<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Можно 5 </title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<div class="row">
		<form class="col s12" action="start.php" method="post">
			<div class="row">
				<div class="input-field col s6">
					<input placeholder="Name" id="first_name" type="text" name="nameRadiant" class="validate">
					<label for="first_name">Name Radiant</label>

					<div class="input-field  s3">
						<select name="unitRadiant1">
							<optgroup label="Человек">
								<option value="Humen\Warrior">Воин</option>
								<option value="Humen\Archer">Лучник</option>
								<option value="Humen\Rider">Всадник</option>
							</optgroup>
							<optgroup label="Эльф">
								<option value="Elf\Archer">Лучник</option>
								<option value="Elf\Warrior">Воин</option>
							</optgroup>
							<optgroup label="Орк">
								<option value="Orc\Big">Большой</option>
								<option value="Orc\Small">Малый</option>
							</optgroup>
							<optgroup label="Независымый Орк">
								<option value="IndependentOrc\Medium">Средний</option>
							</optgroup>		
							<optgroup label="Гном">
								<option value="Gnome\Warrior">Воин</option>
							</optgroup>		
							<optgroup label="Колдун">
								<option value="Witch\Warrior">Воин</option>
							</optgroup>			
						</select>

						<label>Персонаж</label>
					</div>
					<?php for ($i = 1; $i < 11; $i++) { ?>
					<div class="input-field  s3">
						<select name="<?php echo 'unitRadiant'.$i ?>">
							<optgroup label="Человек">
								<option value="Humen\Warrior">Воин</option>
								<option value="Humen\Archer">Лучник</option>
								<option value="Humen\Rider">Всадник</option>
							</optgroup>
							<optgroup label="Эльф">
								<option value="Elf\Archer">Лучник</option>
								<option value="Elf\Warrior">Воин</option>
							</optgroup>
							<optgroup label="Орк">
								<option value="Orc\Big">Большой</option>
								<option value="Orc\Small">Малый</option>
							</optgroup>
							<optgroup label="Независымый Орк">
								<option value="IndependentOrc\Medium">Средний</option>
							</optgroup>		
							<optgroup label="Гном">
								<option value="Gnome\Warrior">Воин</option>
							</optgroup>		
							<optgroup label="Колдун">
								<option value="Witch\Warrior">Воин</option>
							</optgroup>			
						</select>
						<label>Персонаж</label>
					</div>
					<?php } ?>
				</div>


				<div class="input-field col s6">
					<input placeholder="Name" id="first_name" type="text" name="nameDire" class="validate">
					<label for="first_name">Name Dire</label>
					<?php for ($i = 0; $i < 11; $i++) { ?>

					<div class="input-field  s3">
						<select name="<?php echo 'unitDire'.$i; ?>">
							<optgroup label="Человек">
								<option value="Humen\Warrior">Воин</option>
								<option value="Humen\Archer">Лучник</option>
								<option value="Humen\Rider">Всадник</option>
							</optgroup>
							<optgroup label="Эльф">
								<option value="Elf\Archer">Лучник</option>
								<option value="Elf\Warrior">Воин</option>
							</optgroup>
							<optgroup label="Орк">
								<option value="Orc\Big">Большой</option>
								<option value="Orc\Small">Малый</option>
							</optgroup>
							<optgroup label="Независымый Орк">
								<option value="IndependentOrc\Medium">Средний</option>
							</optgroup>		
							<optgroup label="Гном">
								<option value="Gnome\Warrior">Воин</option>
							</optgroup>		
							<optgroup label="Колдун">
								<option value="Witch\Warrior">Воин</option>
							</optgroup>			
						</select>
						<label>Персонаж</label>
					</div>
					<?php } ?>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Submit
				<i class="material-icons right">send</i>
			</button>
		</form>
	</div>

	<script type="text/javascript">


		$(document).ready(function(){
			$('select').formSelect();
		});
	</script>
</body>
</html>