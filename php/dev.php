<?php
$data_source = 'insert here';
$dateFrom = date("m/d/Y", strtotime("-1 week"));
$dateTo = date("m/d/Y", time());

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT Source, Destination, Sum(Load_Weight) AS Total_Tonnes
// FROM tblProductionData
// WHERE (Type='Dev') AND (Date_of_Prod) Between '".$dateFrom."' And '".$dateTo."'
// GROUP BY Source, Destination
// ORDER BY Source;";
//
// // Fetch and display the result set value.
// $rs = odbc_exec($conn, $query);
// //echo odbc_result_all($rs);
//
// $data = array();
// $row = 1;
// $numRows = odbc_num_rows($rs);
// while ($row <= $numRows) {
//     $data[] = odbc_fetch_array($rs, $row);
//     $row++;
// }
//
// echo json_encode($data);

$dummy_output = '[{"Source":"Face_01","Destination":"SP_1","Total_Tonnes":"230"},{"Source":"Face_02","Destination":"SP_1","Total_Tonnes":"290"},{"Source":"Face_03","Destination":"SP_2","Total_Tonnes":"150"},{"Source":"Face_04","Destination":"SP_3","Total_Tonnes":"100"},{"Source":"Face_05","Destination":"SP_1","Total_Tonnes":"250"},{"Source":"Face_06","Destination":"SP_4","Total_Tonnes":"250"},{"Source":"Face_07","Destination":"SP_3","Total_Tonnes":"340"},{"Source":"Face_08","Destination":"SP_5","Total_Tonnes":"120"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
