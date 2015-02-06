<html>
<head>
	<title>Ajax Notes</title>
	<style type="text/css">
		form label, input, textarea {
			display: block;
			margin: 10px;
		}
		.new {
			border: 1px solid black;
			display: inline-block;
			vertical-align: top;
			max-height: 100px;
			width: 150px;
			overflow-y: scroll;
			margin: 10px;
			padding: 5px;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
		
		function process() {
	        $.ajax({
            	url:"/notes/pull_posts",
            	type: "GET", 
    		   	dataType: "json",
    			data: $(this).serialize()
	        })
	        .done(function(output) {
	          	for(var i=0; i<=output.length; i++)
					{
						$('#notes').append("<div class='new'> Title:" + output[i].title + "<br><br> Notes:" + output[i].description + "</div>");
					}
	        }, 'json');
	        return false;
	        // console.log('hello');
		};

		$(document).ready(function() {

			process();

			$('#mainForm').submit(function() {
				$.ajax({
					type: "POST",
					url: "/notes/posts",
					dataType: "json",
					data: $(this).serialize()
				})
				.done(function(output){
					for(var i=0; i<=output.length; i++)
					{
						$('#notes').append("<div class='new'>" + output[i].title + "<br>" + output[i].description + "</div>");
					}
				}, 'json');
				return false;
			});
		});	
	</script>
</head>
<body>
	<h1>Welcome to our Message App!</h1>
	<h3>Make your own message board</h3>
	<form id='mainForm' action='/notes/posts' method='post'>
		<label>Title</label>
		<textarea type='text' name='title' rows='1' cols='40' placeholder='insert your title'></textarea>
		<label>Notes</label>
		<textarea type='text' name='description' rows='10' cols='75' placeholder='insert your note'></textarea>
		<input type='submit'>
	</form>
	<div id='notes'></div>
</body>
</html>