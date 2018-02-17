   <?php
include('database.php');
include('function.php');
include('index.php');
if(isset($_POST["CPR"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM regions and city
  WHERE id = '".$_POST["CPR"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["city_name"] = $row["city_name"];
  $output["prov_name"] = $row["prov_name"];
  $output["reg_name"] = $row["reg_name"];

  if($row["image"] != '')
  {
   $output['c_image'] = '<img src="upload/'.$row["image"].'"  width="100%" height="100%" /><input type="hidden" name="hidden_c_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['c_image'] = '<input type="hidden" name="hidden_c_image" value="" />';
  }
 }
 echo json_encode($output);
}
?>