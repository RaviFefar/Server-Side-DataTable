<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "devnote";
$conn = mysqli_connect($host,$username,$password,$database) or die("Connection failed: " . mysqli_connect_error());

$request = $_REQUEST;

$columns = array(
    0 => 'student_name',
    1 => 'student_fee',
    2 => 'student_age'
);

$sql = "SELECT student_name, student_fee, student_age";
$sql .= " FROM student";
$res = mysqli_query($conn, $sql);

$totalData = mysqli_num_rows($res);
$totalFilteredData = $totalData;
 
$sql = " SELECT student_name, student_fee, student_age  ";
$sql .= "FROM student WHERE 1 = 1";
 
if(!empty($request['columns'][0]['search']['value'])){ // student name column
    $sql .= " AND student_name LIKE '%".$request ['columns'][0]['search']['value']."%' ";
}

if(!empty($request['columns'][1]['search']['value'])){ // student fee column
    $sql.=" AND student_fee LIKE '".$request ['columns'][1]['search']['value']."%' ";
}

if(!empty($request ['columns'][2]['search']['value'])){ // student age column
    $rangeArray = explode("-",$request ['columns'][2]['search']['value']);
    $minRange = $rangeArray[0];
    $maxRange = $rangeArray[1];
    $sql .= " AND ( student_age >= '".$minRange."' AND  student_age <= '".$maxRange."' ) ";
}

$res = mysqli_query($conn, $sql);
$totalFilteredData = mysqli_num_rows($res);
 
$sql .= " ORDER BY ". $columns[$request ['order'][0]['column']] ."   ". $request['order'][0]['dir'] ." LIMIT ". $request ['start'] ." ,". $request ['length'] ."   ";

$res = mysqli_query($conn, $sql);
 
$data = array();
while($row=mysqli_fetch_array($res) ) {
    $nestedArray = array();
    $nestedArray[] = $row["student_name"];
    $nestedArray[] = $row["student_fee"];
    $nestedArray[] = $row["student_age"];
 
    $data[] = $nestedArray;
}
 
$json_data = array(
    "draw"            => intval($request['draw']),
    "recordsTotal"    => intval($totalData),
    "recordsFiltered" => intval($totalFilteredData),
    "data"            => $data
);

echo json_encode($json_data);

?>