<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Search</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color: #f4f4f4;">
<div class="container" style="padding-top:40px; margin-left:280px;">
<div class="row">
<div class="col-md-6">
<h3>Search</h3>
<form action="">
<div class="form-group" style="width:140%;">
<input type="text" id="search" class="form-control" placeholder="
Enter searching keywords.....">
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div id="result">

</div>
</div>
</div>
</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$('#search').keyup(function(){
	var search = $('#search').val();
	if($.trim(search.length) == 0)
	{
		$('#result').html('Please enter searching keywords');
	}
	else
	{
		$.ajax({
			type : 'POST',
			url : 'search.php',
			data : {'search':search},
            success : function(data)
			{
				$('#result').html(data);
			}			
	    })
	}
})
})	
</script>
</body>
</html>