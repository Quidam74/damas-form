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


	<form class="myForm" method='post' action='actions.php'>
		<div class="mainDiv">
		<div>
			<label for='firstname'>Prénom</label>
			<input class="anInput" type='text' id='firstname' name='firstname'/>
		</div>
		<div>
			<label for='lastname'>Nom</label>
			<input  class="anInput" type='text' id='lastname' name='lastname'/>
		</div>
		<div>
			<label for='date'>Date</label>
			<input  class="anInput" type='date' id='date' name='date'/>
		</div>
		<div>
			<label for='daynight'>Jour ou nuit</label>
			<div  class="anInput">
			<input type='radio' id='day' name='daynight' value='Day'/> Jour
			<input  type='radio' id='night' name='daynight' value='Night'/> Nuit
			</div>
		</div>
		<div>
			<label for='drink'>Boisson</label>
			<select  class="anInput" name='drink'>
				<option value=''>Choisis...</option>
				<option value='coffee'>Café</option>
				<option value='tea'>Thé</option>
				<option value='chocolate'>Chocolat chaud</option>
			</select>
		</div>		
<div>
		<div>
			<input class="action" type='submit' id='action' name='action' value='ok'/>
		</div>
	</form>



	<script src='js/main.js'></script>
</body>
</html>