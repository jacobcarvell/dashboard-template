<?php
$data_source = 'Datashed_Cracow';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT CONVERT(varchar(25), tblDrillPlod.Plod_Date, 103) + SPACE(1) + tblDrillPlod.Shift AS Date_of, tblDrillPlod.Rig, SUM(tblDrillPlodDetails.mTo-tblDrillPlodDetails.mFrom) AS Metres, MAX(tblDrillPlodDetails.Drilling_Hours) AS DrillHours
// FROM tblDrillPlod INNER JOIN tblDrillPlodDetails ON tblDrillPlod.Plod_No = tblDrillPlodDetails.Plod_No
// WHERE tblDrillPlod.Plod_Date > DATEADD(week, -1, (SELECT MAX(Plod_Date) FROM tblDrillPlod))
// GROUP BY tblDrillPlod.Plod_Date, tblDrillPlod.Shift, tblDrillPlod.Rig
// ORDER BY tblDrillPlod.Plod_Date, tblDrillPlod.Shift, Date_of, tblDrillPlod.Rig;";
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
//     $data[$i]["Metres"] = number_format($data[$i]["Metres"],1);
//     $data[$i]["DrillHours"] = number_format($data[$i]["DrillHours"],2);
// }
//
// echo json_encode($data);

$dummy_output = '[{"Date_of":"15\/06\/2016 D","Rig":"RIG_001","Metres":"0.0","DrillHours":"0.00"},
{"Date_of":"15\/06\/2016 D","Rig":"RIG_002","Metres":"36.0","DrillHours":"9.83"},
{"Date_of":"15\/06\/2016 D","Rig":"RIG_003","Metres":"18.0","DrillHours":"5.00"},
{"Date_of":"15\/06\/2016 D","Rig":"RIG_001","Metres":"74.1","DrillHours":"8.83"},
{"Date_of":"15\/06\/2016 N","Rig":"RIG_002","Metres":"24.0","DrillHours":"9.17"},
{"Date_of":"15\/06\/2016 N","Rig":"RIG_003","Metres":"18.2","DrillHours":"3.33"},
{"Date_of":"15\/06\/2016 N","Rig":"RIG_001","Metres":"42.0","DrillHours":"7.00"},
{"Date_of":"16\/06\/2016 D","Rig":"RIG_001","Metres":"31.1","DrillHours":"8.17"},
{"Date_of":"16\/06\/2016 D","Rig":"RIG_002","Metres":"24.0","DrillHours":"7.17"},
{"Date_of":"16\/06\/2016 D","Rig":"RIG_003","Metres":"38.7","DrillHours":"9.00"},
{"Date_of":"16\/06\/2016 D","Rig":"RIG_001","Metres":"27.0","DrillHours":"6.50"},
{"Date_of":"16\/06\/2016 N","Rig":"RIG_002","Metres":"30.0","DrillHours":"9.83"},
{"Date_of":"16\/06\/2016 N","Rig":"RIG_003","Metres":"36.3","DrillHours":"6.83"},
{"Date_of":"16\/06\/2016 N","Rig":"RIG_001","Metres":"5.2","DrillHours":"1.33"},
{"Date_of":"17\/06\/2016 D","Rig":"RIG_002","Metres":"24.0","DrillHours":"8.00"},
{"Date_of":"17\/06\/2016 D","Rig":"RIG_003","Metres":"24.0","DrillHours":"6.17"},
{"Date_of":"17\/06\/2016 D","Rig":"RIG_001","Metres":"62.7","DrillHours":"9.17"},
{"Date_of":"17\/06\/2016 N","Rig":"RIG_002","Metres":"36.0","DrillHours":"9.50"},
{"Date_of":"17\/06\/2016 N","Rig":"RIG_003","Metres":"36.0","DrillHours":"9.00"},
{"Date_of":"17\/06\/2016 N","Rig":"RIG_001","Metres":"43.0","DrillHours":"9.67"},
{"Date_of":"18\/06\/2016 D","Rig":"RIG_002","Metres":"30.0","DrillHours":"9.17"},
{"Date_of":"18\/06\/2016 D","Rig":"RIG_003","Metres":"18.0","DrillHours":"4.83"},
{"Date_of":"18\/06\/2016 D","Rig":"RIG_001","Metres":"32.3","DrillHours":"9.33"},
{"Date_of":"18\/06\/2016 N","Rig":"RIG_002","Metres":"36.0","DrillHours":"8.50"},
{"Date_of":"18\/06\/2016 N","Rig":"RIG_001","Metres":"44.3","DrillHours":"6.00"},
{"Date_of":"19\/06\/2016 D","Rig":"RIG_001","Metres":"33.0","DrillHours":"7.67"},
{"Date_of":"19\/06\/2016 D","Rig":"RIG_002","Metres":"36.0","DrillHours":"10.17"},
{"Date_of":"19\/06\/2016 D","Rig":"RIG_003","Metres":"6.2","DrillHours":"2.50"},
{"Date_of":"19\/06\/2016 D","Rig":"RIG_001","Metres":"63.0","DrillHours":"9.33"},
{"Date_of":"19\/06\/2016 N","Rig":"RIG_002","Metres":"17.5","DrillHours":"4.50"},
{"Date_of":"19\/06\/2016 N","Rig":"RIG_003","Metres":"42.0","DrillHours":"8.00"},
{"Date_of":"19\/06\/2016 N","Rig":"RIG_001","Metres":"39.0","DrillHours":"9.00"},
{"Date_of":"20\/06\/2016 D","Rig":"RIG_002","Metres":"12.2","DrillHours":"2.67"},
{"Date_of":"20\/06\/2016 D","Rig":"RIG_003","Metres":"36.0","DrillHours":"6.33"},
{"Date_of":"20\/06\/2016 D","Rig":"RIG_001","Metres":"35.2","DrillHours":"6.67"},
{"Date_of":"20\/06\/2016 N","Rig":"RIG_002","Metres":"36.3","DrillHours":"9.83"},
{"Date_of":"20\/06\/2016 N","Rig":"RIG_003","Metres":"36.0","DrillHours":"7.67"},
{"Date_of":"20\/06\/2016 N","Rig":"RIG_001","Metres":"57.0","DrillHours":"9.33"},
{"Date_of":"21\/06\/2016 D","Rig":"RIG_001","Metres":"16.3","DrillHours":"4.00"},
{"Date_of":"21\/06\/2016 D","Rig":"RIG_002","Metres":"29.9","DrillHours":"9.00"}]';

echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
