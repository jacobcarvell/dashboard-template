<?php
$data_source = 'insert here';
$dateFrom = date("m/d/Y", strtotime("-2 week"));
$dateTo = date("m/d/Y", time());

// Connect to the data source and get a handle for that connection.
// $conn = odbc_connect($data_source, '', '');
// if (!$conn) {
//     die("Connection could not be established.");
// }
//
// $query = "SELECT CONVERT(VARCHAR(10), Date_of_Prod, 103) AS Date_Of, Type, SUM(Raw_Oz_Au)* 31.10348 AS Total_Au_gm, SUM(Tonnes) AS Total_Tonnes, Cast(Round((SUM(Raw_Oz_Au)* 31.10348)/SUM(Tonnes),2)as numeric(36,2)) AS Grade
// FROM tblProductionData
// WHERE (Date_of_Prod) Between '".$dateFrom."' And '".$dateTo."' AND Destination != 'MINWASTE'
// GROUP BY Date_of_Prod, Type
//
// UNION ALL
//
// SELECT CONVERT(VARCHAR(10), Date_of_Prod, 103) AS Date_Of, 'Total', SUM(Raw_Oz_Au)* 31.10348 AS Total_Au_gm, SUM(Tonnes) AS Total_Tonnes, Cast(Round((SUM(Raw_Oz_Au)* 31.10348)/SUM(Tonnes),2)as numeric(36,2)) AS Grade
// FROM tblProductionData
// WHERE (Date_of_Prod) Between '".$dateFrom."' And '".$dateTo."' AND Destination != 'MINWASTE'
// GROUP BY Date_of_Prod;";
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

$dummy_output = '[{"Date_Of":"09\/06\/2016","Type":"Dev","Total_Au_gm":"1073.9704517200003","Total_Tonnes":"258.47725600000001","Grade":"4.15"},{"Date_Of":"10\/06\/2016","Type":"Dev","Total_Au_gm":"4557.77296888","Total_Tonnes":"829.19221600000003","Grade":"5.50"},{"Date_Of":"11\/06\/2016","Type":"Dev","Total_Au_gm":"536.00365686399994","Total_Tonnes":"249.17105600000002","Grade":"2.15"},{"Date_Of":"12\/06\/2016","Type":"Dev","Total_Au_gm":"934.761259","Total_Tonnes":"229.490892","Grade":"4.07"},{"Date_Of":"13\/06\/2016","Type":"Dev","Total_Au_gm":"4035.18085888","Total_Tonnes":"700.23767200000009","Grade":"5.76"},{"Date_Of":"14\/06\/2016","Type":"Dev","Total_Au_gm":"78.587430400000017","Total_Tonnes":"42.710560000000008","Grade":"1.84"},{"Date_Of":"15\/06\/2016","Type":"Dev","Total_Au_gm":"769.30965984000011","Total_Tonnes":"278.73538400000001","Grade":"2.76"},{"Date_Of":"16\/06\/2016","Type":"Dev","Total_Au_gm":"2032.08655024","Total_Tonnes":"325.05087200000003","Grade":"6.25"},{"Date_Of":"17\/06\/2016","Type":"Dev","Total_Au_gm":"2460.2428692000003","Total_Tonnes":"159.13602","Grade":"15.46"},{"Date_Of":"18\/06\/2016","Type":"Dev","Total_Au_gm":"3929.8270339999995","Total_Tonnes":"563.58347200000014","Grade":"6.97"},{"Date_Of":"20\/06\/2016","Type":"Dev","Total_Au_gm":"894.908682","Total_Tonnes":"98.44980000000001","Grade":"9.09"},{"Date_Of":"21\/06\/2016","Type":"Dev","Total_Au_gm":"1581.7996958400001","Total_Tonnes":"248.710644","Grade":"6.36"},{"Date_Of":"22\/06\/2016","Type":"Dev","Total_Au_gm":"3919.4072247200002","Total_Tonnes":"283.60399600000005","Grade":"13.82"},{"Date_Of":"09\/06\/2016","Type":"Stope","Total_Au_gm":"3361.7737504909519","Total_Tonnes":"813.7047399999999","Grade":"4.13"},{"Date_Of":"10\/06\/2016","Type":"Stope","Total_Au_gm":"3024.1453246243927","Total_Tonnes":"705.46873599999992","Grade":"4.29"},{"Date_Of":"11\/06\/2016","Type":"Stope","Total_Au_gm":"6553.6816188730436","Total_Tonnes":"1602.3709040000001","Grade":"4.09"},{"Date_Of":"12\/06\/2016","Type":"Stope","Total_Au_gm":"8792.2714796411819","Total_Tonnes":"2342.5566640000002","Grade":"3.75"},{"Date_Of":"13\/06\/2016","Type":"Stope","Total_Au_gm":"6598.255917397134","Total_Tonnes":"1341.9834280000005","Grade":"4.92"},{"Date_Of":"14\/06\/2016","Type":"Stope","Total_Au_gm":"10027.689322600854","Total_Tonnes":"2210.6143400000005","Grade":"4.54"},{"Date_Of":"15\/06\/2016","Type":"Stope","Total_Au_gm":"7672.2188243402115","Total_Tonnes":"1686.0581320000003","Grade":"4.55"},{"Date_Of":"16\/06\/2016","Type":"Stope","Total_Au_gm":"3870.917163412646","Total_Tonnes":"631.79302000000007","Grade":"6.13"},{"Date_Of":"17\/06\/2016","Type":"Stope","Total_Au_gm":"6354.3384838080001","Total_Tonnes":"795.98377600000015","Grade":"7.98"},{"Date_Of":"18\/06\/2016","Type":"Stope","Total_Au_gm":"15106.174282104001","Total_Tonnes":"1547.9149400000003","Grade":"9.76"},{"Date_Of":"19\/06\/2016","Type":"Stope","Total_Au_gm":"8190.3197818920016","Total_Tonnes":"886.28330399999993","Grade":"9.24"},{"Date_Of":"20\/06\/2016","Type":"Stope","Total_Au_gm":"13482.625944483998","Total_Tonnes":"1393.4516119999998","Grade":"9.68"},{"Date_Of":"21\/06\/2016","Type":"Stope","Total_Au_gm":"11522.196761995998","Total_Tonnes":"1232.7345176000003","Grade":"9.35"},{"Date_Of":"22\/06\/2016","Type":"Stope","Total_Au_gm":"11556.652536471998","Total_Tonnes":"1295.2565079999997","Grade":"8.92"},{"Date_Of":"09\/06\/2016","Type":"Total","Total_Au_gm":"4435.7442022109517","Total_Tonnes":"1072.1819959999998","Grade":"4.14"},{"Date_Of":"10\/06\/2016","Type":"Total","Total_Au_gm":"7581.9182935043918","Total_Tonnes":"1534.660952","Grade":"4.94"},{"Date_Of":"11\/06\/2016","Type":"Total","Total_Au_gm":"7089.6852757370452","Total_Tonnes":"1851.54196","Grade":"3.83"},{"Date_Of":"12\/06\/2016","Type":"Total","Total_Au_gm":"9727.0327386411809","Total_Tonnes":"2572.0475560000014","Grade":"3.78"},{"Date_Of":"13\/06\/2016","Type":"Total","Total_Au_gm":"10633.436776277134","Total_Tonnes":"2042.2210999999998","Grade":"5.21"},{"Date_Of":"14\/06\/2016","Type":"Total","Total_Au_gm":"10106.276753000857","Total_Tonnes":"2253.3249000000001","Grade":"4.49"},{"Date_Of":"15\/06\/2016","Type":"Total","Total_Au_gm":"8441.5284841802113","Total_Tonnes":"1964.7935160000004","Grade":"4.30"},{"Date_Of":"16\/06\/2016","Type":"Total","Total_Au_gm":"5903.0037136526462","Total_Tonnes":"956.8438920000001","Grade":"6.17"},{"Date_Of":"17\/06\/2016","Type":"Total","Total_Au_gm":"8814.5813530080013","Total_Tonnes":"955.11979600000006","Grade":"9.23"},{"Date_Of":"18\/06\/2016","Type":"Total","Total_Au_gm":"19036.001316104001","Total_Tonnes":"2111.4984120000004","Grade":"9.02"},{"Date_Of":"19\/06\/2016","Type":"Total","Total_Au_gm":"8190.3197818920016","Total_Tonnes":"886.28330399999993","Grade":"9.24"},{"Date_Of":"20\/06\/2016","Type":"Total","Total_Au_gm":"14377.534626484001","Total_Tonnes":"1491.9014120000004","Grade":"9.64"},{"Date_Of":"21\/06\/2016","Type":"Total","Total_Au_gm":"13103.996457835998","Total_Tonnes":"1481.4451616000003","Grade":"8.85"},{"Date_Of":"22\/06\/2016","Type":"Total","Total_Au_gm":"15476.059761191995","Total_Tonnes":"1578.860504","Grade":"9.80"}]';
echo $dummy_output;

// Disconnect the database from the database handle.
//odbc_close($conn);
?>
