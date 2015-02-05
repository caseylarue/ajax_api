<html>
<head>
	<title>Weather API</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('form').submit(function(){
				$.get($(this).attr('action')+'?callback=?', $(this).serialize(), function(dojo){
					var temp = dojo.data.current_condition[0].temp_F;
					$('#forecast_F').text("the current temp F is: " + temp);

					var temp = dojo.data.current_condition[0].temp_C;
					$('#forecast_C').text("the current temp C is: " + temp);

					var wind = dojo.data.current_condition[0].windspeedMiles;
					$('#wind').text("the wind mph is: " + wind);

					var desc = dojo.data.current_condition[0].weatherDesc[0].value;
					$('#desc').text("the weather description is: " + desc);

				}, 'json');
				return false;
			});
		});
	</script>
</head>
<body>
	<form action='http://api.worldweatheronline.com/free/v2/weather.ashx' method='get'>
		<select name='q'>
			<option value='94303'>Mountain View</option>
			<option value='98005'>Seattle</option>
			<option value='77005'>Houston</option>
			<option value='40003'>Bagdad</option>
		</select>
		<input type='hidden' name='key' value='0c415d9abfad10448f0def92f1622'>
		<input type='hidden' name='format' value='json'>
		<input type='submit' value='get weather!'>
	</form>
	<div id='forecast_F'>
	</div>
	<div id='forecast_C'>
	</div>
	<div id='wind'>
	</div>
	<div id='desc'>
	</div>
</body>
</html>