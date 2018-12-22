<!DOCTYPE html>
<html>
<head>
<title>PP Constituency</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css">

<script src="js/jquery-1.11.3-jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.bootpag.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 
 $('#search').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});







</script>



</head>
<body>
</br>
<div class="container">
	<div class="panel-body"> 
	</br>
		<div class="col-sm-6">
		
		
		<div class=".col-md-6">
          <div class="panel panel-default">
          <div class="bs-example">
         
		 
		  <div class="form-group">
           <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search" id="search" placeholder="Search Voter Details" class="form-control" />
           </div>
         </div>
		 
		

	       </div>
          </div>
        </div>
			
		
		
		
		
				<table class="table table-striped table-hover" id="main">
				<thead>
				  <tr>
				    <th>PP</th>
					<th>PP Name </th>
					<th>PP No </th>
				  </tr>
				</thead>
				
				

				<tbody id="result">
					
				</tbody>
				</table>
			<div class="paging_link"></div>
		</div>
	</div>
	<div class="panel-footer"></div>
	</div>
</div>

</body>
</html>