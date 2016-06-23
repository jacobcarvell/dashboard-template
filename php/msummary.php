<?php
$data_source = 'insert here';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT Sum(tblProductionData.Tonnes) AS TonnesM, Sum(tblProductionData.Raw_Oz_Au) AS AuOz, Sum(tblProductionData.Raw_Oz_Ag) AS AgOz, ((Sum(tblProductionData.Raw_Oz_Au))*31.10348)/Sum(tblProductionData.Tonnes) AS AuGrade, ((Sum(tblProductionData.Raw_Oz_Ag))*31.10348)/Sum(tblProductionData.Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (((tblProductionData.Destination)<>'MINWASTE') And ((Month([Date_of_Prod]))=Month(GETDATE())))
//
// UNION ALL
//
// SELECT Sum(tblCrushing.Tonnes*(1-Moisture)) AS TonnesM, Sum(Au_gm)/31.10348 AS AuOz, Sum(Ag_gm)/31.10348 AS AgOz, ((Sum(Au_gm)/31.10348)*31.10348/Sum(tblCrushing.Tonnes*(1-Moisture))) AS AuGrade, ((Sum(Ag_gm)/31.10348)*31.10348/Sum(tblCrushing.Tonnes*(1-Moisture))) AS AgGrade
// FROM tblCrushing, tblFactors
// WHERE (((Month([Date_of]))=Month(GETDATE())) AND ((Month([Month_of_Application]))=Month(GETDATE())))
//
// UNION ALL
//
// SELECT Sum(Tonnes) AS TonnesM, Sum(Au_gm)/31.10348 AS AuOz, Sum(Ag_gm)/31.10348 AS AgOz, Sum(Au_gm)/Sum(Tonnes) AS AuGrade, Sum(Ag_gm)/Sum(Tonnes) AS AgGrade
// FROM tblMilling
// WHERE (((Month([Date_Completed]))=Month(GETDATE())))
//
// UNION ALL
//
// SELECT Sum(Tonnes) AS TonnesM, Sum(Au_gm)/31.10348 AS AuOz, Sum(Ag_gm)/31.10348 AS AgOz, Sum(Au_gm)/Sum(Tonnes) AS AuGrade, Sum(Ag_gm)/Sum(Tonnes) AS AgGrade
// FROM tblClosingROMStocks
// WHERE Date_of=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101) AND (Left(Stockpile,3) = 'ROM');";
//
// // Fetch and display the result set value.
// $rs = odbc_exec($conn, $query);
// $data = array();
// $row = 1;
// $numRows = odbc_num_rows($rs);
// while ($row <= $numRows) {
//     $data[] = odbc_fetch_array($rs, $row);
//     $row++;
// }
//
// for ($i = 0; $i <= 3; $i++) {
//     $data[$i]["TonnesM"] = number_format($data[$i]["TonnesM"]);
//     $data[$i]["AuOz"] = number_format($data[$i]["AuOz"]);
//     $data[$i]["AgOz"] = number_format($data[$i]["AgOz"]);
//     $data[$i]["AuGrade"] = number_format($data[$i]["AuGrade"],2);
//     $data[$i]["AgGrade"] = number_format($data[$i]["AgGrade"],2);
// }
//
// echo json_encode($data);

$dummy_output = '[{"TonnesM":"35,000","AuOz":"6,500","AgOz":"4,000","AuGrade":"5.50","AgGrade":"3.50"},{"TonnesM":"30,500","AuOz":"6,000","AgOz":"3,750","AuGrade":"6.00","AgGrade":"3.75"},{"TonnesM":"34,250","AuOz":"5,750","AgOz":"3,250","AuGrade":"5.25","AgGrade":"3.00"},{"TonnesM":"20,000","AuOz":"3,000","AgOz":"1,750","AuGrade":"4.75","AgGrade":"3.00"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
