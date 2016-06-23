<?php
$data_source = 'insert here';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "IF (SELECT Sum(Tonnes) FROM tblOreForecast WHERE Date_of_Forecast=(CONVERT(nvarchar(30), GETDATE(), 101))) > 0
// BEGIN
//
// SELECT Shift, Stockpile, Location, Sum(Tonnes) AS SumOfTonnes, Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// GROUP BY Shift, Type, Location, Au_Grade, Date_of_Forecast, Stockpile
// HAVING Date_of_Forecast =(CONVERT(nvarchar(30), GETDATE(), 101)) AND Shift = 'Day'
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), GETDATE(), 101)) AND Shift = 'Day'
//
// UNION ALL
//
// SELECT Shift, Stockpile, Location, Sum(Tonnes) AS SumOfTonnes, Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// GROUP BY Shift, Type, Location, Au_Grade, Date_of_Forecast, Stockpile
// HAVING Date_of_Forecast=(CONVERT(nvarchar(30), GETDATE(), 101)) AND Shift = 'Night'
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), GETDATE(), 101)) AND Shift = 'Night'
//
// UNION ALL
//
// SELECT 'Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), GETDATE(), 101))
//
// END
// ELSE
//
// SELECT Shift, Stockpile, Location, Sum(Tonnes) AS SumOfTonnes, Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// GROUP BY Shift, Type, Location, Au_Grade, Date_of_Forecast, Stockpile
// HAVING Date_of_Forecast =(CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND Shift = 'Day'
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND Shift = 'Day'
//
// UNION ALL
//
// SELECT Shift, Stockpile, Location, Sum(Tonnes) AS SumOfTonnes, Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// GROUP BY Shift, Type, Location, Au_Grade, Date_of_Forecast, Stockpile
// HAVING Date_of_Forecast=(CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND Shift = 'Night'
//
// UNION ALL
//
// SELECT 'Sub Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101)) AND Shift = 'Night'
//
// UNION ALL
//
// SELECT 'Total', '', '', Sum(Tonnes) AS SumOfTonnes, Sum(Ounces) * 31.10348 / Sum(Tonnes) AS Au_Grade, Sum(Ounces) AS SumOfOunces
// FROM tblOreForecast
// WHERE Date_of_Forecast=(CONVERT(nvarchar(30), DATEADD(day,-1,GETDATE()), 101));";
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
//     $data[$i]["SumOfOunces"] = number_format($data[$i]["SumOfOunces"]);
//     $data[$i]["Au_Grade"] = number_format($data[$i]["Au_Grade"],2);
// }
//
// echo json_encode($data);
$dummy_output = '[{"Shift":"Day","Stockpile":"SP_1","Location":"Heading_10","SumOfTonnes":"500","Au_Grade":"10.00","SumOfOunces":"170"},{"Shift":"Sub Total","Stockpile":"","Location":"","SumOfTonnes":"500","Au_Grade":"10.00","SumOfOunces":"170"},{"Shift":"Night","Stockpile":"SP_2","Location":"Heading_05","SumOfTonnes":"1,000","Au_Grade":"7.50","SumOfOunces":"250"},{"Shift":"Sub Total","Stockpile":"","Location":"","SumOfTonnes":"1,000","Au_Grade":"7.50","SumOfOunces":"250"},{"Shift":"Total","Stockpile":"","Location":"","SumOfTonnes":"1,500","Au_Grade":"9.00","SumOfOunces":"400"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
