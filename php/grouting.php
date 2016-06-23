<?php
$data_source = 'insert here';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT Drill_Program, Hole_ID
// FROM tblDHColl
// WHERE DataSet = 'UG_Drill' AND Date_Completed > DATEADD(year, -1, GETDATE()) AND SUBSTRING(Hole_ID, 2, 2) != 'ID' AND
// Hole_ID NOT IN (SELECT Hole_ID FROM tblDHGrouting);";
//
// // Fetch and display the result set value.
// $rs = odbc_exec($conn, $query);
//
// $data = array();
// $items = 0;
// while ($data[] = odbc_fetch_array($rs)) {
//     $items++;
// }
//
// $count = count($data);
// unset($data[$count - 1]);
//
// echo json_encode($data);

$dummy_output = '[{"Drill_Program":"Drillsite 1","Hole_ID":"HOLE001"},{"Drill_Program":"Drillsite 1","Hole_ID":"HOLE002"},{"Drill_Program":"Drillsite 1","Hole_ID":"HOLE003"},{"Drill_Program":"Drillsite 1","Hole_ID":"HOLE004"},{"Drill_Program":"Drillsite 1","Hole_ID":"HOLE005"},{"Drill_Program":"Drillsite 2","Hole_ID":"HOLE006"},{"Drill_Program":"Drillsite 2","Hole_ID":"HOLE007"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE008"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE009"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE010"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE011"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE012"},{"Drill_Program":"Drillsite 3","Hole_ID":"HOLE013"}]';
echo $dummy_output;
// Disconnect the database from the database handle.
//odbc_close($conn);
?>
