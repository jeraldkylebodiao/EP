<!DOCTYPE html>
<html>
<head>
	<title>CRUD CITIES AND REGIONS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->


	<style>
		body{
			margin:10px;
			padding:10px;
			background-color: black;
		}
		.box{
			width: 100%;
			padding: 20px;
			background-color: white;
		
			border-radius: 10px;
			margin-top: 25px;
			
		}
		#user_data{
			border: 5px solid black;
      border-radius: 5px;
		}
		th{
      text-align: center;
      font-weight: bolder;
    }
		h4{
			text-align: center;
			font-weight: bolder;

		}
    h1{
      font-weight: bolder;
      font-family: century gothic;
      letter-spacing: 5px;
    }
    .container{
      width: 80%;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      margin-top: 25px;
    }


	</style>


</head>
<body>
  <div class="container">
   <h1 align="center">PHILIPPINE's CITIES PROVINCES & REGIONS</h1>
  </div>
 
   <div>
   <div class="table-responsive">
    <br />
    <div align="center">
     <button type="button" id="add_button" data-toggle="modal" data-target="#userModal"
		class="btn btn-primary btn-block" style="font-size: 20px; width: 50%; font-family: century gothic">ADD CITY</button>
    </div>
  </div>
</div>
<div class="container box" style="width:100%">
  <br/>
    <table id="user_data" class="table table-bordered " style="font-family: century gothic; text-align: center" >
     <thead>
      <tr>
       <th width="30%">Image</th>
       <th width="5%">City</th>
       <th width="5%">Province</th>
       <th width="5%">Region</th>
       <th width="5%">Edit</th>
       <th width="5%">Delete</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
 </body>
</html>

<!--ADD CITY-->
<div id="userModal" class="modal fade">
 <div class="modal-dialog" style="font-family: century gothic">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">ADD CITY</h4>
    </div>
    <div class="modal-body" style="font-family: century gothic">
     <label>Enter City</label>
     <input type="text" name="city_name" id="city_name" class="form-control" />
     <hr/>
     <label>Enter Province</label>
     <input type="text" name="prov_name" id="prov_name" class="form-control" />
     <hr/>
     <label>Enter Region</label>
     <input type="text" name="reg_name" id="reg_name" class="form-control" />
     <hr/>
	 <label>Select City Image</label>
     <input type="file" name="c_image" id="c_image" />
     <span id="user_uploaded_image"></span>
   	 </div>
   	 <div class="modal-footer" style="font-family: century gothic">
     <input type="hidden" name="cpr" id="cpr" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary btn-lg " value="Add" />
     <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>

<!--IF ADD CITY is CLICKED-->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add City");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#user_uploaded_image').html('');
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 1, 2,3 ,4,5],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var cityName = $('#city_name').val();
  var provName = $('#prov_name').val();
  var regName = $('#reg_name').val();
  var extension = $('#c_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#c_image').val('');
    return false;
   }
  } 
  if(cityName != '' && provName != '' && regName != '')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var cpr = $(this).attr("id");
  $.ajax({
   url:"update.php",
   method:"POST",
   data:{cpr:cpr},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#city_name').val(data.city_name);
    $('#prov_name').val(data.prov_name);
    $('#reg_name').val(data.reg_name);
    $('.modal-title').text("Edit City");
    $('#cpr').val(cpr);
    $('#user_uploaded_image').html(data.c_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var cpr = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{cpr:cpr},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});
</script>