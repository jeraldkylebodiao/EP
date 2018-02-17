 <?php

function upload_image()
{
 if(isset($_FILES["c_image"]))
 {
  $extension = explode('.', $_FILES['c_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './upload/' . $new_name;
  move_uploaded_file($_FILES['c_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function get_image_name($CPR)
{
 include('database.php');
 $statement = $connection->prepare("SELECT image FROM CPR WHERE id = '$user_id'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function get_total_all_records()
{
 include('database.php');
 $statement = $connection->prepare("SELECT * FROM CPR");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
   