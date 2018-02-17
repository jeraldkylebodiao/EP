 <?php

include('database.php');
include("function.php");

if(isset($_POST["CPR"]))
{
 $image = get_image_name($_POST["CPR"]);
 if($image != '')
 {
  unlink("upload/" . $image);
 }
 $statement = $connection->prepare(
  "DELETE FROM CPR WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["CPR"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}



?>
   