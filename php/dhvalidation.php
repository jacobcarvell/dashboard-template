<?php
$data_source = 'insert here';

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT tblDHColl.Hole_ID, CONVERT(VARCHAR(24), tblDHColl.Date_Started, 103) AS DateStarted,
// 	CONVERT(VARCHAR(24), tblDHColl.Date_Completed, 103) AS DateCompleted, Orig_Survey_Method, Max_Depth, mTo AS MetaDepth,
// 	(SELECT MAX(mTo) FROM tblDHLithology WHERE tblDHColl.Hole_ID = tblDHLithology.Hole_ID) AS LithDepth,
// 	(SELECT MAX(mTo) FROM tblDHAlteration WHERE tblDHColl.Hole_ID = tblDHAlteration.Hole_ID) AS AltDepth,
// 	(SELECT MAX(mTo) FROM tblDHVeins WHERE tblDHColl.Hole_ID = tblDHVeins.Hole_ID) AS VeinDepth,
// 	Logged_By, (SELECT DHSurvey_Method FROM tblDHSurv WHERE tblDHColl.Hole_ID = tblDHSurv.Hole_ID AND Depth = 0) AS CollSurvey,
// 	(SELECT MAX(Depth) FROM tblDHSurv WHERE tblDHColl.Hole_ID = tblDHSurv.Hole_ID) AS MaxSurveyDepth
// FROM tblDHColl LEFT JOIN tblDHMetaData ON tblDHMetaData.Hole_ID = tblDHColl.Hole_ID
// WHERE tblDHColl.DataSet = 'UG_Drill' AND tblDHColl.Date_Started > DATEADD(month, -6, GETDATE()) AND tblDHColl.Validated = 0
// ORDER BY tblDHColl.Hole_ID DESC;";
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
// for ($i = 0; $i < $numRows; $i++) {
//     $data[$i]["Max_Depth"] = number_format($data[$i]["Max_Depth"],1);
//     $data[$i]["MetaDepth"] = number_format($data[$i]["MetaDepth"],1);
//     $data[$i]["LithDepth"] = number_format($data[$i]["LithDepth"],1);
//     $data[$i]["AltDepth"] = number_format($data[$i]["AltDepth"],1);
//     $data[$i]["VeinDepth"] = number_format($data[$i]["VeinDepth"],1);
// }
//
// echo json_encode($data);

$dummy_output = '[{"Hole_ID":"HOLE001","DateStarted":"19\/06\/2016","DateCompleted":"19\/06\/2016","Orig_Survey_Method":"COLL","Max_Depth":"999.0","MetaDepth":"0.0","LithDepth":"0.0","AltDepth":"0.0","VeinDepth":"0.0","Logged_By":null,"CollSurvey":"PLAN","MaxSurveyDepth":"117.0"},
{"Hole_ID":"HOLE002","DateStarted":"15\/06\/2016","DateCompleted":"18\/06\/2016","Orig_Survey_Method":"COLL","Max_Depth":"189.2","MetaDepth":"189.2","LithDepth":"189.2","AltDepth":"189.2","VeinDepth":"177.5","Logged_By":"Geologist","CollSurvey":"PLAN","MaxSurveyDepth":"171.0"},
{"Hole_ID":"HOLE003","DateStarted":"08\/06\/2016","DateCompleted":"15\/06\/2016","Orig_Survey_Method":"COLL","Max_Depth":"290.9","MetaDepth":"290.9","LithDepth":"290.9","AltDepth":"290.9","VeinDepth":"244.1","Logged_By":"Geologist","CollSurvey":"PLAN","MaxSurveyDepth":"290.0"},
{"Hole_ID":"HOLE004","DateStarted":"15\/04\/2016","DateCompleted":"24\/04\/2016","Orig_Survey_Method":"COLL","Max_Depth":"300.0","MetaDepth":"100.0","LithDepth":"100.0","AltDepth":"100.0","VeinDepth":"100.0","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"295.0"},
{"Hole_ID":"HOLE005","DateStarted":"15\/04\/2016","DateCompleted":"24\/04\/2016","Orig_Survey_Method":"COLL","Max_Depth":"250.0","MetaDepth":"250.0","LithDepth":"250.0","AltDepth":"250.0","VeinDepth":"250.0","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"12.0"},
{"Hole_ID":"HOLE006","DateStarted":"15\/04\/2016","DateCompleted":"24\/04\/2016","Orig_Survey_Method":"COLL","Max_Depth":"353.8","MetaDepth":"353.8","LithDepth":"353.8","AltDepth":"353.8","VeinDepth":"353.8","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"330.0"},
{"Hole_ID":"HOLE007","DateStarted":"07\/04\/2016","DateCompleted":"16\/04\/2016","Orig_Survey_Method":"COLL","Max_Depth":"261.0","MetaDepth":"261.0","LithDepth":"261.0","AltDepth":"261.0","VeinDepth":"261.0","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"261.0"},
{"Hole_ID":"HOLE008","DateStarted":"02\/01\/2016","DateCompleted":"03\/01\/2016","Orig_Survey_Method":"COLL","Max_Depth":"32.1","MetaDepth":"32.1","LithDepth":"32.1","AltDepth":"32.1","VeinDepth":"0.0","Logged_By":"Geologist","CollSurvey":"PLAN","MaxSurveyDepth":"30.0"},
{"Hole_ID":"HOLE009","DateStarted":"06\/02\/2016","DateCompleted":"06\/02\/2016","Orig_Survey_Method":"COLL","Max_Depth":"9.9","MetaDepth":"9.9","LithDepth":"9.9","AltDepth":"9.9","VeinDepth":"9.9","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"0.0"},
{"Hole_ID":"HOLE010","DateStarted":"06\/02\/2016","DateCompleted":"06\/02\/2016","Orig_Survey_Method":"COLL","Max_Depth":"9.9","MetaDepth":"9.9","LithDepth":"9.9","AltDepth":"9.9","VeinDepth":"9.9","Logged_By":"Geologist","CollSurvey":"COLL","MaxSurveyDepth":"0.0"}]';

echo $dummy_output;
// Disconnect the database from the database handle.
//odbc_close($conn);
?>
