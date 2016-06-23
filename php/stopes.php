<?php
$data_source = 'insert here';
$option = $_GET['option'];

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }

switch ($option) {
    case "table":
        // $query = "SELECT Stope, CONVERT(VARCHAR(10), 100*Planned_Dilution) + '%' AS PlannedDilution, Cast(Round(Design_Tonnes_Undiluted,0) as numeric(36,0)), Remaining_Tonnes, Cast(Round(Au_Diluted,2) as numeric(36,2)) AS Planned_Diluted_Au, Cast(Round(LastGrade_Au,2)as numeric(36,2)) AS CurrentGrade
        // FROM tblStopeDesign
        // WHERE Date_Finished IS NULL;";
        //
        // // Fetch and display the result set value.
        // $rs = odbc_exec($conn, $query);
        // echo odbc_result_all($rs);
        $dummy_output = '<table><tr><th>Stope</th><th>PlannedDilution</th><th></th><th>Remaining_Tonnes</th><th>Planned_Diluted_Au</th><th>CurrentGrade</th></tr>
        <tr><td>Stope_01</td><td>10%</td><td>7500</td><td>1500</td><td>8.00</td><td>8.00</td></tr>
        <tr><td>Stope_02</td><td>20%</td><td>3000</td><td>250</td><td>2.50</td><td>2.00</td></tr>
        <tr><td>Stope_03</td><td>5%</td><td>5000</td><td>4000</td><td>4.50</td><td>4.50</td></tr>
        </table>
        4';
        break;
    case "plot":
        // $query = "SELECT Stope, Cast(100 - Round((
        // Design_Tonnes_Diluted + ISNULL((SELECT SUM(Tonnes) FROM tblStopeDilution WHERE tblStopeDilution.Stope = tblStopeDesign.Stope),0)
        // - (SELECT SUM(Tonnes) FROM tblProductionData WHERE tblProductionData.Source = tblStopeDesign.Stope))
        // / (Design_Tonnes_Diluted + ISNULL((SELECT SUM(Tonnes) FROM tblStopeDilution WHERE tblStopeDilution.Stope = tblStopeDesign.Stope),0))
        // * 100,0) as numeric(36,0)) AS PercentRemaining
        // FROM tblStopeDesign
        // WHERE Date_Finished IS NULL;";
        //
        // // Fetch and display the result set value.
        // $rs = odbc_exec($conn, $query);
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

        $dummy_output = '[{"Stope":"Stope_01","PercentRemaining":"80"},{"Stope":"Stope_02","PercentRemaining":"90"},{"Stope":"Stope_03","PercentRemaining":"15"}]';
        break;
}
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
