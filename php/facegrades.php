<?php
$data_source = 'insert here';
$orebody = $_GET["orebody"];

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $FaceGrades = "SELECT Hole_ID, W_Au, CONVERT(VARCHAR(10),Date_Started,103) AS Date_Sampled, Right(Hole_ID,2) AS Cut_Num, Left(Hole_ID,Len(Hole_ID)-3) AS Heading, Left(Hole_ID,3) AS Orebody
// INTO #temp_tblFaceGrades
// FROM tblVWFaceGrades
// WHERE Date_Started>=DATEADD(day, -14, GETDATE())
// ORDER BY Hole_ID DESC;";
// $LastSampleNum = "SELECT Max(Hole_ID) AS MaxOfHole_ID, Left(Hole_ID,Len(Hole_ID)-3) AS Heading, Left(Hole_ID,3) AS Orebody, Max(Right(Hole_ID,2)) AS Cut_Num
// INTO #temp_tblLastSampleNum
// FROM tblDHColl
// GROUP BY Left(Hole_ID,Len(Hole_ID)-3), Left(Hole_ID,3), SUBSTRING(Hole_ID,3,1)
// HAVING SUBSTRING(Hole_ID,3,1)='F';";
// $query = "SELECT f.Hole_ID, #temp_tblLastSampleNum.Cut_Num AS LastSampled, f.Date_Sampled, f.W_Au
// FROM #temp_tblLastSampleNum INNER JOIN ((SELECT heading, MAX(Cut_Num) AS Max_Cut FROM #temp_tblFaceGrades WHERE Orebody = '$orebody' GROUP BY Heading) AS x INNER JOIN #temp_tblFaceGrades AS f ON (x.Max_Cut = f.Cut_Num) AND (x.heading = f.heading)) ON #temp_tblLastSampleNum.Heading = f.Heading;";
//
// // Fetch and display the result set value.
// $rs = odbc_exec($conn, $FaceGrades);
// $rs = odbc_exec($conn, $LastSampleNum);
// $rs = odbc_exec($conn, $query);
// echo odbc_result_all($rs);

switch ($orebody) {
  case "OR1":
    $dummy_output = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr>
    <tr><td>Face_01</td><td>01</td><td>21/06/2016</td><td>2.50</td></tr>
    <tr><td>Face_02</td><td>03</td><td>21/06/2016</td><td>6.30</td></tr>
    <tr><td>Face_03</td><td>03</td><td>22/06/2016</td><td>12.00</td></tr>
    <tr><td>Face_04</td><td>04</td><td>21/06/2016</td><td>4.25</td></tr>
    <tr><td>Face_05</td><td>04</td><td>22/06/2016</td><td>3.75</td></tr>
    <tr><td>Face_06</td><td>06</td><td>22/06/2016</td><td>2.25</td></tr>
    </table>
    3';
    break;
  case "OR2":
    $dummy_output = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr>
    <tr><td>Face_07</td><td>04</td><td>18/06/2016</td><td>3.00</td></tr>
    <tr><td>Face_08</td><td>05</td><td>18/06/2016</td><td>1.00</td></tr>
    </table>
    2';
    break;
  case "OR3":
    $dummy_output = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr>
    <tr><td>Face_09</td><td>06</td><td>19/06/2016</td><td>1.50</td></tr>
    </table>
    1';
    break;
}

echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
