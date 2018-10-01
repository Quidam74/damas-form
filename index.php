<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h1>Formulaire</h1>
	</header>


	<form method='post' action='actions.php'>
		<div>
			<label for='firstname'>Prénom</label>
			<input type='text' id='firstname' name='firstname'/>
		</div>
		<div>
			<label for='lastname'>Nom</label>
			<input type='text' id='lastname' name='lastname'/>
		</div>
		<div>
			<label for='date'>Date</label>
			<input type='date' id='date' name='date'/>
		</div>
		<div>
			<label for='daynight'>Jour ou nuit</label>
			<input type='radio' id='day' name='daynight' value='Day'/> Jour
			<input type='radio' id='night' name='daynight' value='Night'/> Nuit
		</div>
		<div>
			<label for='drink'>Boisson</label>
			<select name='drink'>
				<option value=''>Choisis...</option>
				<option value='coffee'>Café</option>
				<option value='tea'>Thé</option>
				<option value='chocolate'>Chocolat chaud</option>
			</select>
		</div>		

		<div>
			<label for='action'></label>
			<input type='submit' id='action' name='action' value='ok'/>
		</div>
	</form>



	<script src='js/main.js'></script>
</body>
</html>