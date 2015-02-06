<html>
<head>
	<title>Ajax Posts</title>
	<style type="text/css">
		#header {
			height: 300px;
			width: 970px;
			background-color: #FAEBD7;
		}
		#header div {
			border: 1px solid black;
			height: 50px;
			width: 250px;
			display: inline-block;
			vertical-align: top;
			margin: 20px;
		}
		form {
			margin-top: 20px;
		}
		form label, textarea, input {
			display: block;
			margin: 10px;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mainForm').submit(function(){
				$.ajax({
					type: "POST",
					url: "/notes/create", 
					data: $(this).serialize()
				})
				.done(function(output){
					console.log(output);
					for(var i=0; i<=output.length; i++)
						{
						$('#header').append("<div class='posts'> Post id: " + output[i].id + "<br>Message: " + output[i].description + "<br>Date: " + output[i].description + "</div>" ); // this does not output anything
						// $('#id').val() = "";
						}
				}, 'json');
				return false;

				//////////////////////  Before AJAX
				// $.post(
				// 	$(this).attr('action'),  // can also use $('#mainForm')
				// 	$(this).serialize(),
				// 	function(output){
				// 		for(var i=0; i<=output.length; i++)
				// 		{
				// 		$('#header').append("<div class='posts'> Post id: " + output[i].id + "<br>Message: " + output[i].description + "<br>Date: " + output[i].description + "</div>" ); // this does not output anything
				// 		// $('#id').val() = "";
				// 		}
				// 	}, 'json'
				// );
				// return false;
				///////////////////////////
			});
		});
	</script>
</head>
<body>
	<h1>My Posts</h1>
	<div id='header'></div>
	<form id='mainForm' action='/notes/create' method='post'>
		<label>Add a Note:</label>
		<textarea type='text' name='description' rows='10' cols='75'></textarea>
		<input type='submit' value='Post It!'>
	</form>
</body>
</html>