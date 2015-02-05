<html>
<head>
	<title>Google Maps API</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('form').submit(function(){
					alert('hello');
					$.ajax({
						type: "POST",
						url: "/main/direction",
						data: $(this).serialize()
					})
				

					.done(function(response) {
						for(var i=0; i<=response.routes[0].legs[0].steps.length; i++)
						{
							var step1 = response.routes[0].legs[0].steps[i].html_instructions;
							$('#steps').append("<p>" + step1 + "</p>");
						}
					}, 'json');
					return false;
			});
		});
	</script>
<body>
	<h3>Let's take a road trip with Google Directions API!</h3>
	<form action="/main/direction" method="post">
		<label>From:</label>
		<input type="text" name="origin">
		<label>To:</label>
		<input type="text" name="destination">
		<button type="submit">Get Directions!</button>
	</form>
	<div id="steps">
	</div>
</body>
</html>