   <?php
include('database.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["c_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO CPR (city_name, prov_name, reg_name, c_image) 
   VALUES (:city_name, :prov_name, :reg_name, :c_image)
  ");
  $result = $statement->execute(
   array(
    ':city_name' => $_POST["city_name"],
    ':prov_name' => $_POST["prov_name"],
    ':reg_name' => $_POST["reg_name"],
    ':c_image'  => $image
   )
  );
  if(!empty($result))
  {
   echo 'City successfully added to database.';
  }
  else{
    echo 'Data not Inserted. :(';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["c_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_c_image"];
  }
  $statement = $connection->prepare(
   "UPDATE regions and city
   SET city_name = :city_name, prov_name = :prov_name, reg_name = :reg_name, c_image = :c_image  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':city_name' => $_POST["city_name"],
    ':prov_name' => $_POST["prov_name"],
    ':reg_name' => $_POST["reg_name"],
    ':image'  => $image,
    ':id'   => $_POST["CPR"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>