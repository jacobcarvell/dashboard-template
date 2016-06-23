function getFaces() {

    $.get('php/facegrades.php?orebody=OR1', function (data) {
        var output = data.substring(0, data.indexOf("</table>"));
        $('#orebody1').html(output);
        createDetails("orebody1");
    });
    $.get('php/facegrades.php?orebody=OR2', function (data) {
        var output = data.substring(0, data.indexOf("</table>"));
        $('#orebody2').html(output);
        createDetails("orebody2");

    });
    $.get('php/facegrades.php?orebody=OR3', function (data) {
        var output = data.substring(0, data.indexOf("</table>"));
        $('#orebody3').html(output);
        createDetails("orebody3");
    });
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
    $.ajax({
        url: 'php/dev.php',
        type: "POST",
        dataType: "json",
        success: function(data) {

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
        }
    });
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
    $.ajax({
        url: 'php/stopes.php',
        type: "GET",
        data: {'option' : 'table'},
        dataType: "html",
        success: function(data) {
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

        }
    });
}

function plotStopes() {
    $.ajax({
        url: 'php/stopes.php',
        type: "GET",
        data: {'option': 'plot'},
        dataType: "json",
        success: function(data) {
            stopePlotData(data);
            }
        });
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

    $.ajax({
        url: 'php/crushmill.php',
        type: "GET",
        data: {"dateFrom": dateFrom, "dateTo": dateTo},
        dataType: "json",
        success: function(data) {

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
        }
    });
}

function dailyReport() {
    $.ajax({
        url: 'php/dreport.php',
        type: "POST",
        dataType: "json",
        success: function(data) {

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
        }
    });

    $.ajax({
        url: 'php/msummary.php',
        type: "POST",
        dataType: "json",
        success: function(data) {
            drawTable(data, "#summary");
        }
    });
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
