<?php
$data_source = 'insert here';
if (!empty($_GET)) {
    $dateFrom = date("m/d/Y", strtotime($_GET['dateFrom']));
    $dateTo = date("m/d/Y", strtotime($_GET['dateTo']));
} else {
    $dateFrom = date("m/d/Y", strtotime("-3 week"));
    $dateTo = date("m/d/Y", time());
}

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT CONVERT(VARCHAR(10), Date_Completed, 103) AS Date_of, tblMilling.Tonnes AS MilledTonnes, tblMilling.Au_Grade AS MilledGrade, Sum(tblCrushing.Tonnes)*(1- (SELECT Moisture FROM tblFactors WHERE Month(Month_of_Application)=Month('02/04/2016') )) AS CrushedTonnes,
// CASE
//     WHEN Sum(tblCrushing.Tonnes) != 0
//         THEN Sum(tblCrushing.Au_gm)/(Sum(tblCrushing.Tonnes)*(1- (SELECT Moisture FROM tblFactors WHERE Month(Month_of_Application)=Month('02/04/2016') )))
// ELSE
//     0
// END AS CrushedGrade
// FROM tblCrushing INNER JOIN tblMilling ON tblCrushing.Date_of = tblMilling.Date_Completed
// GROUP BY Date_Completed, tblCrushing.Date_of, tblMilling.Tonnes, tblMilling.Au_Grade
// HAVING Date_of Between '".$dateFrom."' And '".$dateTo."' ORDER BY Date_Completed ASC;";
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
// for ($i = 0; $i < $row - 1; $i++) {
//     $data[$i]["MilledTonnes"] = number_format($data[$i]["MilledTonnes"],0,".","");
//     $data[$i]["CrushedTonnes"] = number_format($data[$i]["CrushedTonnes"],0,".","");
//     $data[$i]["MilledGrade"] = number_format($data[$i]["MilledGrade"],2);
//     $data[$i]["CrushedGrade"] = number_format($data[$i]["CrushedGrade"],2);
// }
//
//echo json_encode($data);

$dummy_output = '[{"Date_of":"02\/06\/2016","MilledTonnes":"1555","MilledGrade":"6.54","CrushedTonnes":"1410","CrushedGrade":"6.82"},{"Date_of":"03\/06\/2016","MilledTonnes":"1588","MilledGrade":"6.93","CrushedTonnes":"973","CrushedGrade":"10.49"},{"Date_of":"04\/06\/2016","MilledTonnes":"1582","MilledGrade":"7.42","CrushedTonnes":"1790","CrushedGrade":"5.93"},{"Date_of":"05\/06\/2016","MilledTonnes":"1577","MilledGrade":"4.94","CrushedTonnes":"1899","CrushedGrade":"5.88"},{"Date_of":"06\/06\/2016","MilledTonnes":"1595","MilledGrade":"3.51","CrushedTonnes":"1320","CrushedGrade":"5.06"},{"Date_of":"07\/06\/2016","MilledTonnes":"1587","MilledGrade":"3.45","CrushedTonnes":"1884","CrushedGrade":"3.16"},{"Date_of":"08\/06\/2016","MilledTonnes":"1583","MilledGrade":"4.34","CrushedTonnes":"1631","CrushedGrade":"3.46"},{"Date_of":"09\/06\/2016","MilledTonnes":"1581","MilledGrade":"4.70","CrushedTonnes":"1334","CrushedGrade":"4.64"},{"Date_of":"10\/06\/2016","MilledTonnes":"1572","MilledGrade":"5.28","CrushedTonnes":"1561","CrushedGrade":"5.17"},{"Date_of":"11\/06\/2016","MilledTonnes":"1564","MilledGrade":"5.20","CrushedTonnes":"1671","CrushedGrade":"5.99"},{"Date_of":"12\/06\/2016","MilledTonnes":"1543","MilledGrade":"4.28","CrushedTonnes":"1539","CrushedGrade":"5.44"},{"Date_of":"13\/06\/2016","MilledTonnes":"1548","MilledGrade":"3.32","CrushedTonnes":"1534","CrushedGrade":"4.26"},{"Date_of":"14\/06\/2016","MilledTonnes":"1530","MilledGrade":"4.18","CrushedTonnes":"980","CrushedGrade":"4.51"},{"Date_of":"15\/06\/2016","MilledTonnes":"1542","MilledGrade":"3.86","CrushedTonnes":"1721","CrushedGrade":"4.82"},{"Date_of":"16\/06\/2016","MilledTonnes":"1612","MilledGrade":"3.60","CrushedTonnes":"310","CrushedGrade":"9.60"},{"Date_of":"17\/06\/2016","MilledTonnes":"1545","MilledGrade":"5.15","CrushedTonnes":"1794","CrushedGrade":"7.67"},{"Date_of":"18\/06\/2016","MilledTonnes":"1591","MilledGrade":"4.63","CrushedTonnes":"1587","CrushedGrade":"9.06"},{"Date_of":"19\/06\/2016","MilledTonnes":"1504","MilledGrade":"6.34","CrushedTonnes":"273","CrushedGrade":"9.28"},{"Date_of":"20\/06\/2016","MilledTonnes":"1380","MilledGrade":"5.81","CrushedTonnes":"1272","CrushedGrade":"8.13"},{"Date_of":"21\/06\/2016","MilledTonnes":"1449","MilledGrade":"4.93","CrushedTonnes":"1636","CrushedGrade":"9.00"},{"Date_of":"22\/06\/2016","MilledTonnes":"1464","MilledGrade":"6.18","CrushedTonnes":"1882","CrushedGrade":"9.97"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
