<html>
<head>
	<title>Ajax_jQuery</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mainForm').submit(function(){
				$.post(
					$('#mainForm').attr('action'),
					$('#mainForm').serialize(),
					function(output){
						$('#messages').append("name: "+output.name+" age: "+output.age+"<br/>");
					}, "json"
					);
				return false;
			});
		});
	</script>
</head>
<body>
	<form id='mainForm' action='/users/random' method='post'>
		<button type='submit'>Via Ajax, grab information of a random person</button>
	</form>
	<div id='messages'>
	</div>
</body>
</html>