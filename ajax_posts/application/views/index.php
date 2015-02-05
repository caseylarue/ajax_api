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
			height: 250px;
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
	
		});
	</script>
</head>
<body>
	<h1>My Posts</h1>
	<div id='header'>
		<div id='post_1'></div>
		<div id='post_2'></div>
		<div id='post_3'></div>
	</div>
	<form action='/notes/create' method='post'>
		<label>Add a Note:</label>
		<textarea type='text' name='description' rows='10' cols='75'></textarea>
		<input type='submit' value='Post It!'>
	</form>
</body>
</html>