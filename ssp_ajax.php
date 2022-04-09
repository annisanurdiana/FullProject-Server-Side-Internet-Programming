<?php 
  // Database configuration
  include "config.php";


  ## -- Read Values
  $draw = $_POST['draw'];
  $row = $_POST['start'];

  // Rows display per page
  $rowperpage = $_POST['length'];
  // Column index 
  $columnIndex = $_POST['order'][0]['column']; 
  // Column name
  $columnName = $_POST['columns'][$columnIndex]['data']; 
  // Asc or Desc
  $columnSortOrder = $_POST['order'][0]['dir']; 
  $searchValue = mysqli_real_escape_string($link,$_POST['search']['value']); // Search value


  ## -- Search 
  $searchQuery = " ";
  // Prepare search query if $searchValue is not empty.
  if($searchValue != ''){
    $searchQuery = " AND (med_name LIKE '%".$searchValue."%' OR group_ LIKE '%".$searchValue."%' OR category_ LIKE'%". $searchValue."%' OR benefit_ LIKE'%". $searchValue."%') ";
  }


  ## -- Total number of records without filtering
  // Count the total number of records in the medicine table.
  $sel = mysqli_query($link,"SELECT count(*) as allcount FROM medicine");
  $records = mysqli_fetch_assoc($sel);
  $totalRecords = $records['allcount'];


  ## -- Total number of record with filtering
  // Count the total number of records with the Search filter from the medicine table.
  $sel = mysqli_query($link,"SELECT count(*) as allcount FROM medicine WHERE 1 ".$searchQuery);
  $records = mysqli_fetch_assoc($sel);
  $totalRecordwithFilter = $records['allcount'];

  ## -- Fetch records from medicine table.
  $medQuery = "SELECT * FROM medicine WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
  $medRecords = mysqli_query($link, $medQuery);
  $data = array();
 
  // Loop on the records and initialize $data Array with an associative array.  
  while ($row = mysqli_fetch_assoc($medRecords)) {
    // In the Array, the key will the same as defined in columns option during DataTable initialization.
    $data[] = array( 
      "med_name"=>$row['med_name'],
      "group_"=>$row['group_'],
      "category_"=>$row['category_'],
      "benefit_"=>$row['benefit_']
    );
  }

  ## -- Response
  // Prepare $response an array that has a draw
  $response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "Data" => $data
  );
  // Return $response JSON format
  echo json_encode($response);
?>