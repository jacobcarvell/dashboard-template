function getFaces() {

        var or1 = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr><tr><td>Face_01</td><td>01</td><td>21/06/2016</td><td>2.50</td></tr><tr><td>Face_02</td><td>03</td><td>21/06/2016</td><td>6.30</td></tr><tr><td>Face_03</td><td>03</td><td>22/06/2016</td><td>12.00</td></tr><tr><td>Face_04</td><td>04</td><td>21/06/2016</td><td>4.25</td></tr><tr><td>Face_05</td><td>04</td><td>22/06/2016</td><td>3.75</td></tr><tr><td>Face_06</td><td>06</td><td>22/06/2016</td><td>2.25</td></tr></table>3';
        var or2 = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr><tr><td>Face_07</td><td>04</td><td>18/06/2016</td><td>3.00</td></tr><tr><td>Face_08</td><td>05</td><td>18/06/2016</td><td>1.00</td></tr></table>2';
        var or3 = '<table><tr><th>Hole_ID</th><th>LastSampled</th><th>Date_Sampled</th><th>W_Au</th></tr><tr><td>Face_09</td><td>06</td><td>19/06/2016</td><td>1.50</td></tr></table>1';

        $('#orebody1').html(or1);
        createDetails("orebody1");
        $('#orebody2').html(or2);
        createDetails("orebody2");
        $('#orebody3').html(or3);
        createDetails("orebody3");

    // $.get('php/facegrades.php?orebody=OR1', function (data) {
    //     var output = data.substring(0, data.indexOf("</table>"));
    //     $('#orebody1').html(output);
    //     createDetails("orebody1");
    // });
    // $.get('php/facegrades.php?orebody=OR2', function (data) {
    //     var output = data.substring(0, data.indexOf("</table>"));
    //     $('#orebody2').html(output);
    //     createDetails("orebody2");
    //
    // });
    // $.get('php/facegrades.php?orebody=OR3', function (data) {
    //     var output = data.substring(0, data.indexOf("</table>"));
    //     $('#orebody3').html(output);
    //     createDetails("orebody3");
    // });
}

function createDetails(value) {
    var headers = [
        "Hole ID",
        "Last Cut Sampled",
        "Date Sampled",
        "Grade (g/t)"
    ]

    $('table').addClass('table table-hover');
    $('#' + value + ' th').each(function(i) {
        $(this).html(headers[i]);
    });
}

function plotdev() {

    var data = [{"Source":"Face_01","Destination":"SP_1","Total_Tonnes":"230"},{"Source":"Face_02","Destination":"SP_1","Total_Tonnes":"290"},{"Source":"Face_03","Destination":"SP_2","Total_Tonnes":"150"},{"Source":"Face_04","Destination":"SP_3","Total_Tonnes":"100"},{"Source":"Face_05","Destination":"SP_1","Total_Tonnes":"250"},{"Source":"Face_06","Destination":"SP_4","Total_Tonnes":"250"},{"Source":"Face_07","Destination":"SP_3","Total_Tonnes":"340"},{"Source":"Face_08","Destination":"SP_5","Total_Tonnes":"120"}];

    var plotData = {
                    labels: column_array(data,"Source"),
                    datasets: [
                        {
                            label: "Tonnes",
                            fillColor: "rgba(52, 73, 94,1.0)",
                            strokeColor: "rgba(44, 62, 80,1.0)",
                            highlightFill: "rgba(52, 73, 94,0.75)",
                            highlightStroke: "rgba(44, 62, 80,0.75)",
                            data: column_array(data,"Total_Tonnes")
                        }
                    ]
            };

    var ctx = $("#dev").get(0).getContext("2d");
    var myLineChart = new Chart(ctx).BarAxisLabel(plotData, {scalelabel: "<%=value%>"});

    // $.ajax({
    //     url: 'php/dev.php',
    //     type: "POST",
    //     dataType: "json",
    //     success: function(data) {
    //
    //         var plotData = {
    //                 labels: column_array(data,"Source"),
    //                 datasets: [
    //                     {
    //                         label: "Tonnes",
    //                         fillColor: "rgba(52, 73, 94,1.0)",
    //                         strokeColor: "rgba(44, 62, 80,1.0)",
    //                         highlightFill: "rgba(52, 73, 94,0.75)",
    //                         highlightStroke: "rgba(44, 62, 80,0.75)",
    //                         data: column_array(data,"Total_Tonnes")
    //                     }
    //                 ]
    //         };
    //
    //         var ctx = $("#dev").get(0).getContext("2d");
    //         var myLineChart = new Chart(ctx).BarAxisLabel(plotData, {scalelabel: "<%=value%>"});
    //     }
    // });
}

function column_array(arr, keyVar) {
    var result = [];
    for (var i = 0; i < arr.length; i++) {
        var obj = arr[i];
        for (var key in obj) {
            var attrName = key;
            var attrValue = obj[key];
            if (attrName == keyVar) {
                result.push(attrValue);
            }
        }
    }
    return result;
}

Chart.types.Bar.extend({
    name: "BarAxisLabel",
    draw: function () {
        Chart.types.Bar.prototype.draw.apply(this, arguments);

        var ctx = this.chart.ctx;
        ctx.save();
        // text alignment and color
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";
        ctx.fillStyle = this.options.scaleFontColor;
        // position
        var x = this.scale.xScalePaddingLeft * 0.3;
        var y = this.chart.height / 2.5;
        // change origin
        ctx.translate(x, y)
        // rotate text
        ctx.rotate(-90 * Math.PI / 180);
        ctx.fillText(this.datasets[0].label, 0, 0);
        ctx.restore();
    }
});

function getStopes() {

    var data = '<table><tr><th>Stope</th><th>PlannedDilution</th><th></th><th>Remaining_Tonnes</th><th>Planned_Diluted_Au</th><th>CurrentGrade</th></tr><tr><td>Stope_01</td><td>10%</td><td>7500</td><td>1500</td><td>8.00</td><td>8.00</td></tr><tr><td>Stope_02</td><td>20%</td><td>3000</td><td>250</td><td>2.50</td><td>2.00</td></tr><tr><td>Stope_03</td><td>5%</td><td>5000</td><td>4000</td><td>4.50</td><td>4.50</td></tr></table>4';

    var output = data.substring(0, data.indexOf("</table>"));
    $('#stopes').html(output);
    var headers = [
        "Stope",
        "Planned Dilution",
        "Designed Tonnes (Un)",
        "Remaining Tonnes",
        "Au Diluted(g/t)",
        "Current Au Grade (g/t)"
    ]

    $('table').addClass('table table-hover');
    $('#stopes th').each(function(i) {
        $(this).html(headers[i]);
    });
    var head = $("#stopes th").parent()
    var element = head.detach();
    $("#stopes tbody").before(element.addClass("header"));
    $(".header").wrapAll("<thead />");

//     $.ajax({
//         url: 'php/stopes.php',
//         type: "GET",
//         data: {'option' : 'table'},
//         dataType: "html",
//         success: function(data) {
//             var output = data.substring(0, data.indexOf("</table>"));
//             $('#stopes').html(output);
//             var headers = [
//                 "Stope",
//                 "Planned Dilution",
//                 "Designed Tonnes (Un)",
//                 "Remaining Tonnes",
//                 "Au Diluted(g/t)",
//                 "Current Au Grade (g/t)"
//             ]
//
//             $('table').addClass('table table-hover');
//             $('#stopes th').each(function(i) {
//                 $(this).html(headers[i]);
//             });
//             var head = $("#stopes th").parent()
//             var element = head.detach();
//             $("#stopes tbody").before(element.addClass("header"));
//             $(".header").wrapAll("<thead />");
//
//         }
//     });
}

function plotStopes() {

    var data = [{"Stope":"Stope_01","PercentRemaining":"80"},{"Stope":"Stope_02","PercentRemaining":"90"},{"Stope":"Stope_03","PercentRemaining":"15"}];
    stopePlotData(data);

    // $.ajax({
    //     url: 'php/stopes.php',
    //     type: "GET",
    //     data: {'option': 'plot'},
    //     dataType: "json",
    //     success: function(data) {
    //         stopePlotData(data);
    //         }
    //     });
}

function stopePlotData(data) {
    for (var i = 0; i < data.length; i++) {
        var obj = data[i];

        var remainingPercent = obj['PercentRemaining'];

        if (remainingPercent === null) {
            remainingPercent = 0;
        }

        var output = '<div class="col-sm-12 col-md-4"> <canvas id="stopeplots' + i + '" height="100" width="100"></canvas>' +
            '<div class="donut-inner"><h5>' + obj['Stope'] + '</h5><span>' + remainingPercent + '%</span></div></div>';
        $("#stopeplots").append(output);

        if (remainingPercent > 100) {
            remainingPercent = 100;
        }

        var pieData = [
            {
            value: remainingPercent,
            color:"#34495e"
            },
            {
            value : 100-remainingPercent,
            color : "#ecf0f1"
            }
        ];

        var myPie = new Chart(document.getElementById("stopeplots"+ i).getContext("2d")).Doughnut(pieData,
            {percentageInnerCutout : 80});

    }
}

function plotMill(dateFrom, dateTo) {
    if (dateFrom == '' || dateTo == '') {
        $today = new Date();
        $yesterday = new Date($today);
        $yesterday.setDate($today.getDate() - 1);
        var $dd = $yesterday.getDate();
        var $mm = $yesterday.getMonth()+1; //January is 0!
        var $yyyy = $yesterday.getFullYear();

        dateFrom = $mm+'/01/'+$yyyy;
        dateTo = $mm+'/'+$dd+'/'+$yyyy;;
    }

    data = [{"Date_of":"02\/06\/2016","MilledTonnes":"1555","MilledGrade":"6.54","CrushedTonnes":"1410","CrushedGrade":"6.82"},{"Date_of":"03\/06\/2016","MilledTonnes":"1588","MilledGrade":"6.93","CrushedTonnes":"973","CrushedGrade":"10.49"},{"Date_of":"04\/06\/2016","MilledTonnes":"1582","MilledGrade":"7.42","CrushedTonnes":"1790","CrushedGrade":"5.93"},{"Date_of":"05\/06\/2016","MilledTonnes":"1577","MilledGrade":"4.94","CrushedTonnes":"1899","CrushedGrade":"5.88"},{"Date_of":"06\/06\/2016","MilledTonnes":"1595","MilledGrade":"3.51","CrushedTonnes":"1320","CrushedGrade":"5.06"},{"Date_of":"07\/06\/2016","MilledTonnes":"1587","MilledGrade":"3.45","CrushedTonnes":"1884","CrushedGrade":"3.16"},{"Date_of":"08\/06\/2016","MilledTonnes":"1583","MilledGrade":"4.34","CrushedTonnes":"1631","CrushedGrade":"3.46"},{"Date_of":"09\/06\/2016","MilledTonnes":"1581","MilledGrade":"4.70","CrushedTonnes":"1334","CrushedGrade":"4.64"},{"Date_of":"10\/06\/2016","MilledTonnes":"1572","MilledGrade":"5.28","CrushedTonnes":"1561","CrushedGrade":"5.17"},{"Date_of":"11\/06\/2016","MilledTonnes":"1564","MilledGrade":"5.20","CrushedTonnes":"1671","CrushedGrade":"5.99"},{"Date_of":"12\/06\/2016","MilledTonnes":"1543","MilledGrade":"4.28","CrushedTonnes":"1539","CrushedGrade":"5.44"},{"Date_of":"13\/06\/2016","MilledTonnes":"1548","MilledGrade":"3.32","CrushedTonnes":"1534","CrushedGrade":"4.26"},{"Date_of":"14\/06\/2016","MilledTonnes":"1530","MilledGrade":"4.18","CrushedTonnes":"980","CrushedGrade":"4.51"},{"Date_of":"15\/06\/2016","MilledTonnes":"1542","MilledGrade":"3.86","CrushedTonnes":"1721","CrushedGrade":"4.82"},{"Date_of":"16\/06\/2016","MilledTonnes":"1612","MilledGrade":"3.60","CrushedTonnes":"310","CrushedGrade":"9.60"},{"Date_of":"17\/06\/2016","MilledTonnes":"1545","MilledGrade":"5.15","CrushedTonnes":"1794","CrushedGrade":"7.67"},{"Date_of":"18\/06\/2016","MilledTonnes":"1591","MilledGrade":"4.63","CrushedTonnes":"1587","CrushedGrade":"9.06"},{"Date_of":"19\/06\/2016","MilledTonnes":"1504","MilledGrade":"6.34","CrushedTonnes":"273","CrushedGrade":"9.28"},{"Date_of":"20\/06\/2016","MilledTonnes":"1380","MilledGrade":"5.81","CrushedTonnes":"1272","CrushedGrade":"8.13"},{"Date_of":"21\/06\/2016","MilledTonnes":"1449","MilledGrade":"4.93","CrushedTonnes":"1636","CrushedGrade":"9.00"},{"Date_of":"22\/06\/2016","MilledTonnes":"1464","MilledGrade":"6.18","CrushedTonnes":"1882","CrushedGrade":"9.97"}];

    var plotData = {
            labels: column_array(data,"Date_of"),
            datasets: [
                {
                    label: "Milled Tonnes",
                    type: "bar",
                    yAxesGroup: "Tonnes",
                    fillColor: "rgba(149, 165, 166,1.0)",
                    strokeColor: "rgba(149, 165, 166,1.0)",
                    highlightFill: "rgba(127, 140, 141,0.75)",
                    highlightStroke: "rgba(127, 140, 141,0.75)",
                    data: column_array(data,"MilledTonnes")
                },
                {
                    label: "Crushed Tonnes",
                    type: "bar",
                    yAxesGroup: "Tonnes",
                    fillColor: "rgba(44, 62, 80,1.0)",
                    strokeColor: "rgba(44, 62, 80,1.0)",
                    highlightFill: "rgba(52, 73, 94,0.75)",
                    highlightStroke: "rgba(52, 73, 94,0.75)",
                    data: column_array(data,"CrushedTonnes")
                },
                {
                    label: "Milled Grade",
                    type: "line",
                    yAxesGroup: "Grade (Au g/t)",
                    fillColor: "rgba(155, 89, 182,0)",
                    strokeColor: "rgba(127, 140, 141,1.0)",
                    pointColor: "rgba(127, 140, 141,1.0)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(127, 140, 141,0.8)",
                    data: column_array(data,"MilledGrade")
                },
                {
                    label: "Crushed Grade",
                    type: "line",
                    yAxesGroup: "Grade (Au g/t)",
                    fillColor: "rgba(52, 152, 219,0)",
                    strokeColor: "rgba(44, 62, 80,1.0)",
                    pointColor: "rgba(44, 62, 80,1.0)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(52, 73, 94,0.8)",
                    data: column_array(data,"CrushedGrade")
                }
            ],
            yAxes: [{
                     name: "Grade (Au g/t)",
                     scalePositionLeft: false //setting to false will dispaly this on the right side of the graph
                 }, {
                     name: "Tonnes",
                     scalePositionLeft: true
                 }]
    };

    $("#mill").remove();
    $("#canvasWrapper").append('<canvas id="mill" width="100vw" height="100vh"></canvas>');

    var multiLineBar = $("#mill").get(0).getContext("2d");
    var bar = new Chart(multiLineBar).Overlay(plotData);

    // $.ajax({
    //     url: 'php/crushmill.php',
    //     type: "GET",
    //     data: {"dateFrom": dateFrom, "dateTo": dateTo},
    //     dataType: "json",
    //     success: function(data) {
    //
    //         var plotData = {
    //                 labels: column_array(data,"Date_of"),
    //                 datasets: [
    //                     {
    //                         label: "Milled Tonnes",
    //                         type: "bar",
    //                         yAxesGroup: "Tonnes",
    //                         fillColor: "rgba(149, 165, 166,1.0)",
    //                         strokeColor: "rgba(149, 165, 166,1.0)",
    //                         highlightFill: "rgba(127, 140, 141,0.75)",
    //                         highlightStroke: "rgba(127, 140, 141,0.75)",
    //                         data: column_array(data,"MilledTonnes")
    //                     },
    //                     {
    //                         label: "Crushed Tonnes",
    //                         type: "bar",
    //                         yAxesGroup: "Tonnes",
    //                         fillColor: "rgba(44, 62, 80,1.0)",
    //                         strokeColor: "rgba(44, 62, 80,1.0)",
    //                         highlightFill: "rgba(52, 73, 94,0.75)",
    //                         highlightStroke: "rgba(52, 73, 94,0.75)",
    //                         data: column_array(data,"CrushedTonnes")
    //                     },
    //                     {
    //                         label: "Milled Grade",
    //                         type: "line",
    //                         yAxesGroup: "Grade (Au g/t)",
    //                         fillColor: "rgba(155, 89, 182,0)",
    //                         strokeColor: "rgba(127, 140, 141,1.0)",
    //                         pointColor: "rgba(127, 140, 141,1.0)",
    //                         pointStrokeColor: "#fff",
    //                         pointHighlightFill: "#fff",
    //                         pointHighlightStroke: "rgba(127, 140, 141,0.8)",
    //                         data: column_array(data,"MilledGrade")
    //                     },
    //                     {
    //                         label: "Crushed Grade",
    //                         type: "line",
    //                         yAxesGroup: "Grade (Au g/t)",
    //                         fillColor: "rgba(52, 152, 219,0)",
    //                         strokeColor: "rgba(44, 62, 80,1.0)",
    //                         pointColor: "rgba(44, 62, 80,1.0)",
    //                         pointStrokeColor: "#fff",
    //                         pointHighlightFill: "#fff",
    //                         pointHighlightStroke: "rgba(52, 73, 94,0.8)",
    //                         data: column_array(data,"CrushedGrade")
    //                     }
    //                 ],
    //                 yAxes: [{
    //                          name: "Grade (Au g/t)",
    //                          scalePositionLeft: false //setting to false will dispaly this on the right side of the graph
    //                      }, {
    //                          name: "Tonnes",
    //                          scalePositionLeft: true
    //                      }]
    //         };
    //
    //         $("#mill").remove();
    //         $("#canvasWrapper").append('<canvas id="mill" width="100vw" height="100vh"></canvas>');
    //
    //         var multiLineBar = $("#mill").get(0).getContext("2d");
    //         var bar = new Chart(multiLineBar).Overlay(plotData);
    //     }
    // });
}

function dailyReport() {

    var data = [{"Date_Of":"09\/06\/2016","Type":"Dev","Total_Au_gm":"1073.9704517200003","Total_Tonnes":"258.47725600000001","Grade":"4.15"},{"Date_Of":"10\/06\/2016","Type":"Dev","Total_Au_gm":"4557.77296888","Total_Tonnes":"829.19221600000003","Grade":"5.50"},{"Date_Of":"11\/06\/2016","Type":"Dev","Total_Au_gm":"536.00365686399994","Total_Tonnes":"249.17105600000002","Grade":"2.15"},{"Date_Of":"12\/06\/2016","Type":"Dev","Total_Au_gm":"934.761259","Total_Tonnes":"229.490892","Grade":"4.07"},{"Date_Of":"13\/06\/2016","Type":"Dev","Total_Au_gm":"4035.18085888","Total_Tonnes":"700.23767200000009","Grade":"5.76"},{"Date_Of":"14\/06\/2016","Type":"Dev","Total_Au_gm":"78.587430400000017","Total_Tonnes":"42.710560000000008","Grade":"1.84"},{"Date_Of":"15\/06\/2016","Type":"Dev","Total_Au_gm":"769.30965984000011","Total_Tonnes":"278.73538400000001","Grade":"2.76"},{"Date_Of":"16\/06\/2016","Type":"Dev","Total_Au_gm":"2032.08655024","Total_Tonnes":"325.05087200000003","Grade":"6.25"},{"Date_Of":"17\/06\/2016","Type":"Dev","Total_Au_gm":"2460.2428692000003","Total_Tonnes":"159.13602","Grade":"15.46"},{"Date_Of":"18\/06\/2016","Type":"Dev","Total_Au_gm":"3929.8270339999995","Total_Tonnes":"563.58347200000014","Grade":"6.97"},{"Date_Of":"20\/06\/2016","Type":"Dev","Total_Au_gm":"894.908682","Total_Tonnes":"98.44980000000001","Grade":"9.09"},{"Date_Of":"21\/06\/2016","Type":"Dev","Total_Au_gm":"1581.7996958400001","Total_Tonnes":"248.710644","Grade":"6.36"},{"Date_Of":"22\/06\/2016","Type":"Dev","Total_Au_gm":"3919.4072247200002","Total_Tonnes":"283.60399600000005","Grade":"13.82"},{"Date_Of":"09\/06\/2016","Type":"Stope","Total_Au_gm":"3361.7737504909519","Total_Tonnes":"813.7047399999999","Grade":"4.13"},{"Date_Of":"10\/06\/2016","Type":"Stope","Total_Au_gm":"3024.1453246243927","Total_Tonnes":"705.46873599999992","Grade":"4.29"},{"Date_Of":"11\/06\/2016","Type":"Stope","Total_Au_gm":"6553.6816188730436","Total_Tonnes":"1602.3709040000001","Grade":"4.09"},{"Date_Of":"12\/06\/2016","Type":"Stope","Total_Au_gm":"8792.2714796411819","Total_Tonnes":"2342.5566640000002","Grade":"3.75"},{"Date_Of":"13\/06\/2016","Type":"Stope","Total_Au_gm":"6598.255917397134","Total_Tonnes":"1341.9834280000005","Grade":"4.92"},{"Date_Of":"14\/06\/2016","Type":"Stope","Total_Au_gm":"10027.689322600854","Total_Tonnes":"2210.6143400000005","Grade":"4.54"},{"Date_Of":"15\/06\/2016","Type":"Stope","Total_Au_gm":"7672.2188243402115","Total_Tonnes":"1686.0581320000003","Grade":"4.55"},{"Date_Of":"16\/06\/2016","Type":"Stope","Total_Au_gm":"3870.917163412646","Total_Tonnes":"631.79302000000007","Grade":"6.13"},{"Date_Of":"17\/06\/2016","Type":"Stope","Total_Au_gm":"6354.3384838080001","Total_Tonnes":"795.98377600000015","Grade":"7.98"},{"Date_Of":"18\/06\/2016","Type":"Stope","Total_Au_gm":"15106.174282104001","Total_Tonnes":"1547.9149400000003","Grade":"9.76"},{"Date_Of":"19\/06\/2016","Type":"Stope","Total_Au_gm":"8190.3197818920016","Total_Tonnes":"886.28330399999993","Grade":"9.24"},{"Date_Of":"20\/06\/2016","Type":"Stope","Total_Au_gm":"13482.625944483998","Total_Tonnes":"1393.4516119999998","Grade":"9.68"},{"Date_Of":"21\/06\/2016","Type":"Stope","Total_Au_gm":"11522.196761995998","Total_Tonnes":"1232.7345176000003","Grade":"9.35"},{"Date_Of":"22\/06\/2016","Type":"Stope","Total_Au_gm":"11556.652536471998","Total_Tonnes":"1295.2565079999997","Grade":"8.92"},{"Date_Of":"09\/06\/2016","Type":"Total","Total_Au_gm":"4435.7442022109517","Total_Tonnes":"1072.1819959999998","Grade":"4.14"},{"Date_Of":"10\/06\/2016","Type":"Total","Total_Au_gm":"7581.9182935043918","Total_Tonnes":"1534.660952","Grade":"4.94"},{"Date_Of":"11\/06\/2016","Type":"Total","Total_Au_gm":"7089.6852757370452","Total_Tonnes":"1851.54196","Grade":"3.83"},{"Date_Of":"12\/06\/2016","Type":"Total","Total_Au_gm":"9727.0327386411809","Total_Tonnes":"2572.0475560000014","Grade":"3.78"},{"Date_Of":"13\/06\/2016","Type":"Total","Total_Au_gm":"10633.436776277134","Total_Tonnes":"2042.2210999999998","Grade":"5.21"},{"Date_Of":"14\/06\/2016","Type":"Total","Total_Au_gm":"10106.276753000857","Total_Tonnes":"2253.3249000000001","Grade":"4.49"},{"Date_Of":"15\/06\/2016","Type":"Total","Total_Au_gm":"8441.5284841802113","Total_Tonnes":"1964.7935160000004","Grade":"4.30"},{"Date_Of":"16\/06\/2016","Type":"Total","Total_Au_gm":"5903.0037136526462","Total_Tonnes":"956.8438920000001","Grade":"6.17"},{"Date_Of":"17\/06\/2016","Type":"Total","Total_Au_gm":"8814.5813530080013","Total_Tonnes":"955.11979600000006","Grade":"9.23"},{"Date_Of":"18\/06\/2016","Type":"Total","Total_Au_gm":"19036.001316104001","Total_Tonnes":"2111.4984120000004","Grade":"9.02"},{"Date_Of":"19\/06\/2016","Type":"Total","Total_Au_gm":"8190.3197818920016","Total_Tonnes":"886.28330399999993","Grade":"9.24"},{"Date_Of":"20\/06\/2016","Type":"Total","Total_Au_gm":"14377.534626484001","Total_Tonnes":"1491.9014120000004","Grade":"9.64"},{"Date_Of":"21\/06\/2016","Type":"Total","Total_Au_gm":"13103.996457835998","Total_Tonnes":"1481.4451616000003","Grade":"8.85"},{"Date_Of":"22\/06\/2016","Type":"Total","Total_Au_gm":"15476.059761191995","Total_Tonnes":"1578.860504","Grade":"9.80"}];

    var plotData = {
            labels: column_array_filter(data,"Date_Of", "Type", "Total"),
            datasets: [
                {
                    label: "Total",
                    fillColor: "rgba(52, 73, 94,0.2)",
                    strokeColor: "rgba(44, 62, 80,0.8)",
                    pointColor: "rgba(44, 62, 80,1.0)",
                    pointStrokeColor: "rgba(236, 240, 241,1.0)",
                    pointHighlightFill: "rgba(236, 240, 241,1.0)",
                    pointHighlightStroke: "rgba(44, 62, 80,1.0)",
                    data: column_array_filter(data,"Grade", "Type", "Total")
                },
                {
                    label: "Dev",
                    fillColor: "rgba(52, 73, 94,0)",
                    strokeColor: "rgba(39, 174, 96,0.4)",
                    pointColor: "rgba(39, 174, 96,0.5)",
                    pointStrokeColor: "rgba(236, 240, 241,0.5)",
                    pointHighlightFill: "rgba(236, 240, 241,0.5)",
                    pointHighlightStroke: "rgba(39, 174, 96,0.5)",
                    data: column_array_filter(data,"Grade", "Type", "Dev")
                },
                {
                    label: "Stope",
                    fillColor: "rgba(52, 73, 94,0)",
                    strokeColor: "rgba(41, 128, 185,0.4)",
                    pointColor: "rgba(41, 128, 185,0.5)",
                    pointStrokeColor: "rgba(236, 240, 241,0.5)",
                    pointHighlightFill: "rgba(236, 240, 241,0.5)",
                    pointHighlightStroke: "rgba(41, 128, 185,0.5)",
                    data: column_array_filter(data,"Grade", "Type", "Stope")
                }
            ],
    };

    var LineChart = $("#dailygrade").get(0).getContext("2d");
    var bar = new Chart(LineChart).Line(plotData, {scaleBeginAtZero: true});

    var data = [{"TonnesM":"35,000","AuOz":"6,500","AgOz":"4,000","AuGrade":"5.50","AgGrade":"3.50"},{"TonnesM":"30,500","AuOz":"6,000","AgOz":"3,750","AuGrade":"6.00","AgGrade":"3.75"},{"TonnesM":"34,250","AuOz":"5,750","AgOz":"3,250","AuGrade":"5.25","AgGrade":"3.00"},{"TonnesM":"20,000","AuOz":"3,000","AgOz":"1,750","AuGrade":"4.75","AgGrade":"3.00"}];
    drawTable(data, "#summary");

    // $.ajax({
    //     url: 'php/dreport.php',
    //     type: "POST",
    //     dataType: "json",
    //     success: function(data) {
    //
    //         var plotData = {
    //                 labels: column_array_filter(data,"Date_Of", "Type", "Total"),
    //                 datasets: [
    //                     {
    //                         label: "Total",
    //                         fillColor: "rgba(52, 73, 94,0.2)",
    //                         strokeColor: "rgba(44, 62, 80,0.8)",
    //                         pointColor: "rgba(44, 62, 80,1.0)",
    //                         pointStrokeColor: "rgba(236, 240, 241,1.0)",
    //                         pointHighlightFill: "rgba(236, 240, 241,1.0)",
    //                         pointHighlightStroke: "rgba(44, 62, 80,1.0)",
    //                         data: column_array_filter(data,"Grade", "Type", "Total")
    //                     },
    //                     {
    //                         label: "Dev",
    //                         fillColor: "rgba(52, 73, 94,0)",
    //                         strokeColor: "rgba(39, 174, 96,0.4)",
    //                         pointColor: "rgba(39, 174, 96,0.5)",
    //                         pointStrokeColor: "rgba(236, 240, 241,0.5)",
    //                         pointHighlightFill: "rgba(236, 240, 241,0.5)",
    //                         pointHighlightStroke: "rgba(39, 174, 96,0.5)",
    //                         data: column_array_filter(data,"Grade", "Type", "Dev")
    //                     },
    //                     {
    //                         label: "Stope",
    //                         fillColor: "rgba(52, 73, 94,0)",
    //                         strokeColor: "rgba(41, 128, 185,0.4)",
    //                         pointColor: "rgba(41, 128, 185,0.5)",
    //                         pointStrokeColor: "rgba(236, 240, 241,0.5)",
    //                         pointHighlightFill: "rgba(236, 240, 241,0.5)",
    //                         pointHighlightStroke: "rgba(41, 128, 185,0.5)",
    //                         data: column_array_filter(data,"Grade", "Type", "Stope")
    //                     }
    //                 ],
    //         };
    //
    //         var LineChart = $("#dailygrade").get(0).getContext("2d");
    //         var bar = new Chart(LineChart).Line(plotData, {scaleBeginAtZero: true});
    //     }
    // });

    // $.ajax({
    //     url: 'php/msummary.php',
    //     type: "POST",
    //     dataType: "json",
    //     success: function(data) {
    //         drawTable(data, "#summary");
    //     }
    // });
}

function drawTable(data, domElement) {
    for (var i = 0; i < data.length; i++) {
        drawRow(data[i], i, ["Mined", "Crushed", "Milled", "Closing Stocks"], domElement);
    }
    $(domElement + " tr").wrapAll("<table class='table table-hover' />")
    $(domElement + " tr").wrapAll("<tbody />");
    var headers = "<thead><tr><th></th><th>Tonnes</th><th>Au (oz)</th><th>Ag (oz)</th><th>Au Grade (g/t)</th><th>Ag Grade (g/t)</th></tr></thead><tbody>"
    $(domElement + " .table").prepend(headers);
}

function drawRow(rowData, index, rowHeadings, domElement) {
    var row = $("<tr />");
    $(domElement).append(row);
    row.append($("<td><b>" + rowHeadings[index] + "</b></td>"))
    for (var key in rowData) {
        row.append($("<td>" + rowData[key] + "</td>"));
    }
}

function column_array_filter(arr, keyVar, field, filter) {
    var result = [];
    for (var i = 0; i < arr.length; i++) {
        var obj = arr[i];
        for (var key in obj) {
            var attrName = key;
            var attrValue = obj[key];
            if (attrName == keyVar) {
                if (obj[field] == filter) {
                    result.push(attrValue);
                }
            }
        }
    }
    return result;
}

function rigPlotData(data) {
    var rigs = [];
    for (var i = 0; i < data.length; i++) {
        if ($.inArray(data[i].Rig,rigs) == -1) {
            rigs.push(data[i].Rig);
        }
    }
    for (var i = 0; i < rigs.length; i++) {

        var output = '<div class="col-xs-12 col-md-12"> <h3>' + rigs[i] + '</h3><canvas id="dhProd' + i + '" height="100" width="100"></canvas></div>';
        $("#dhProd").append(output);

        var plotData = {
                    labels: column_array_filter(data,"Date_of","Rig", rigs[i]),
                    datasets: [
                        {
                            label: "Metres",
                            type: "bar",
                            yAxesGroup: "Metres",
                            fillColor: "rgba(44, 62, 80,1.0)",
                            strokeColor: "rgba(44, 62, 80,1.0)",
                            highlightFill: "rgba(52, 73, 94,0.75)",
                            highlightStroke: "rgba(52, 73, 94,0.75)",
                            data: column_array_filter(data,"Metres","Rig", rigs[i])
                        },
                        {
                            label: "BOB Time",
                            type: "line",
                            yAxesGroup: "BOB Time",
                            fillColor: "rgba(155, 89, 182,0)",
                            strokeColor: "rgba(127, 140, 141,1.0)",
                            pointColor: "rgba(127, 140, 141,1.0)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(127, 140, 141,0.8)",
                            data: column_array_filter(data,"DrillHours","Rig", rigs[i])
                        }
                    ],
                    yAxes: [{
                             name: "BOB Time",
                             scalePositionLeft: false //setting to false will dispaly this on the right side of the graph
                         }, {
                             name: "Metres",
                             scalePositionLeft: true
                         }]
            };

            var multiLineBar = $("#dhProd"+ i).get(0).getContext("2d");
            var bar = new Chart(multiLineBar).Overlay(plotData);

    }
}
