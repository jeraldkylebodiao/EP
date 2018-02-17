  <?php
include('database.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM CPR ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE city_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR prov_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR reg_name LIKE "%'.$_POST["search"]["value"].'%" ';

}

 $query .= 'ORDER BY reg_name DESC ';

if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
  $image = '<img src="upload/'.$row["image"].'"  width="100%" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["city_name"];
 $sub_array[] = $row["prov_name"];
 $sub_array[] = $row["reg_name"];
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-success btn-sm update" >Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-sm delete" >Delete</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>