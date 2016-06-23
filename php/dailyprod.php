<?php
$data_source = 'insert here';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "IF (SELECT Sum(Tonnes) FROM tblProductionData WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101))) > 0
// BEGIN
//
// SELECT Type, Destination, Source, Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// GROUP BY Type, Destination, Source, Date_of_Prod
// HAVING (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND (Type='Dev')
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND (Type='Dev')
//
// UNION ALL
//
// SELECT Type, Destination, Source, Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// GROUP BY Type, Destination, Source, Date_of_Prod
// HAVING (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND (Type='Stope')
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND (Type='Stope')
//
// UNION ALL
//
// SELECT 'Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101));
//
// END
// ELSE
//
// SELECT Type, Destination, Source, Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// GROUP BY Type, Destination, Source, Date_of_Prod
// HAVING (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-2,GETDATE()), 101)) AND (Type='Dev')
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-2,GETDATE()), 101)) AND (Type='Dev')
//
// UNION ALL
//
// SELECT Type, Destination, Source, Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// GROUP BY Type, Destination, Source, Date_of_Prod
// HAVING (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-2,GETDATE()), 101)) AND (Type='Stope')
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-2,GETDATE()), 101)) AND (Type='Stope')
//
// UNION ALL
//
// SELECT 'Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Raw_Oz_Au) AS SumOfRaw_Oz_Au, Sum(Raw_Oz_Ag) AS SumOfRaw_Oz_Ag, Sum(Raw_Oz_Au)*31.10348/Sum(Tonnes) AS AuGrade, Sum(Raw_Oz_Ag)*31.10348/Sum(Tonnes) AS AgGrade
// FROM tblProductionData
// WHERE (Destination<>'MINWASTE') And (Date_of_Prod=CONVERT(nvarchar(30), DATEADD(day,-2,GETDATE()), 101));";
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
// for ($i = 0; $i <= $items - 1; $i++) {
//     $data[$i]["SumOfTonnes"] = number_format($data[$i]["SumOfTonnes"]);
//     $data[$i]["SumOfRaw_Oz_Au"] = number_format($data[$i]["SumOfRaw_Oz_Au"]);
//     $data[$i]["SumOfRaw_Oz_Ag"] = number_format($data[$i]["SumOfRaw_Oz_Ag"]);
//     $data[$i]["AuGrade"] = number_format($data[$i]["AuGrade"],2);
//     $data[$i]["AgGrade"] = number_format($data[$i]["AgGrade"],2);
// }
//
//echo json_encode($data);

$dummy_output = '[{"Type":"Dev","Destination":"SP_1","Source":"Heading_01","SumOfTonnes":"250","SumOfRaw_Oz_Au":"120","SumOfRaw_Oz_Ag":"75","AuGrade":"12.50","AgGrade":"8.00"},{"Type":"Sub Total","Destination":"","Source":"","SumOfTonnes":"250","SumOfRaw_Oz_Au":"120","SumOfRaw_Oz_Ag":"75","AuGrade":"12.50","AgGrade":"8.00"},{"Type":"Stope","Destination":"SP_3","Source":"Stope_01","SumOfTonnes":"400","SumOfRaw_Oz_Au":"125","SumOfRaw_Oz_Ag":"60","AuGrade":"10.00","AgGrade":"4.50"},{"Type":"Stope","Destination":"SP_2","Source":"Stope_02","SumOfTonnes":"800","SumOfRaw_Oz_Au":"200","SumOfRaw_Oz_Ag":"200","AuGrade":"8.00","AgGrade":"7.50"},{"Type":"Sub Total","Destination":"","Source":"","SumOfTonnes":"1,200","SumOfRaw_Oz_Au":"325","SumOfRaw_Oz_Ag":"260","AuGrade":"8.75","AgGrade":"6.00"},{"Type":"Total","Destination":"","Source":"","SumOfTonnes":"1,450","SumOfRaw_Oz_Au":"445","SumOfRaw_Oz_Ag":"275","AuGrade":"9.80","AgGrade":"7.00"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
