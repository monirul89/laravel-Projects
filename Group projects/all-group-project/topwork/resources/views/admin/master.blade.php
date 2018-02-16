<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> TopWork || @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('/')}}admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('/')}}admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/font-awesome.min.css" rel="stylesheet" />
    <style type="text/css">

        .amcharts-graph-g1 .amcharts-graph-stroke {
            stroke-dasharray: 3px 3px;
            stroke-linejoin: round;
            stroke-linecap: round;
            -webkit-animation: am-moving-dashes 1s linear infinite;
            animation: am-moving-dashes 1s linear infinite;
        }

        @-webkit-keyframes am-moving-dashes {
            100% {
                stroke-dashoffset: -30px;
            }
        }
        @keyframes am-moving-dashes {
            100% {
                stroke-dashoffset: -30px;
            }
        }


        .lastBullet {
            -webkit-animation: am-pulsating 1s ease-out infinite;
            animation: am-pulsating 1s ease-out infinite;
        }
        @-webkit-keyframes am-pulsating {
            0% {
                stroke-opacity: 1;
                stroke-width: 0px;
            }
            100% {
                stroke-opacity: 0;
                stroke-width: 50px;
            }
        }
        @keyframes am-pulsating {
            0% {
                stroke-opacity: 1;
                stroke-width: 0px;
            }
            100% {
                stroke-opacity: 0;
                stroke-width: 50px;
            }
        }

        .amcharts-graph-column-front {
            -webkit-transition: all .3s .3s ease-out;
            transition: all .3s .3s ease-out;
        }
        .amcharts-graph-column-front:hover {
            fill: #496375;
            stroke: #496375;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }


        .amcharts-graph-g2 {
            stroke-linejoin: round;
            stroke-linecap: round;
            stroke-dasharray: 500%;
            stroke-dasharray: 0 \0/;    /* fixes IE prob */
            stroke-dashoffset: 0 \0/;   /* fixes IE prob */
            -webkit-animation: am-draw 40s;
            animation: am-draw 40s;
        }
        @-webkit-keyframes am-draw {
            0% {
                stroke-dashoffset: 500%;
            }
            100% {
                stroke-dashoffset: 0px;
            }
        }
        @keyframes am-draw {
            0% {
                stroke-dashoffset: 500%;
            }
            100% {
                stroke-dashoffset: 0px;
            }
        }
    </style>
    <!-- Custom styles -->
    <link href="{{asset('/')}}admin/css/animate.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}admin/js/html5shiv.js"></script>
    <script src="{{asset('/')}}admin/js/respond.min.js"></script>
    <script src="{{asset('/')}}admin/js/lte-ie7.js"></script>
    <![endif]-->

    {{--for ckeditor--}}
    <script src="{{asset('/')}}admin/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/js/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/js/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>

<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    @include('admin.includes.header')

    <!--sidebar start-->
    @include('admin.includes.sidebar_menu')
    <!--sidebar end-->

    <!--main content start-->
    @yield('body')
    <!--main content end-->
</section>
<!-- container section end -->

<!-- javascripts -->
<script src="{{asset('/')}}admin/js/jquery.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{asset('/')}}admin/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('/')}}admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('/')}}admin/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="{{asset('/')}}admin/js/amcharts/serial.js" type="text/javascript"></script>
<!-- chartjs -->
<script src="{{asset('/')}}admin/js/Chart.js"></script>
<!-- custom chart script for this page only-->
<!-- <script src="js/chartjs-custom.js"></script> -->

<script type="text/javascript">
    var chartData = [
        {
            value : Math.random(),
            color: "#D97041"
        },
        {
            value : Math.random(),
            color: "#C7604C"
        },
        {
            value : Math.random(),
            color: "#21323D"
        },
        {
            value : Math.random(),
            color: "#9D9B7F"
        },
        {
            value : Math.random(),
            color: "#7D4F6D"
        },
        {
            value : Math.random(),
            color: "#584A5E"
        }
    ];

    new Chart(document.getElementById("dash-line").getContext("2d")).PolarArea(chartData);
</script>

<script>
    var chartDatas = [
        {
            "date": "2012-01-01",
            "value": 8
        },
        {
            "date": "2012-01-02",
            "value": 10
        },
        {
            "date": "2012-01-03",
            "value": 12
        },
        {
            "date": "2012-01-04",
            "value": 14
        },
        {
            "date": "2012-01-05",
            "value": 11
        },
        {
            "date": "2012-01-06",
            "value": 6
        },
        {
            "date": "2012-01-07",
            "value": 7
        },
        {
            "date": "2012-01-08",
            "value": 9
        },
        {
            "date": "2012-01-09",
            "value": 13
        },
        {
            "date": "2012-01-10",
            "value": 15
        },
        {
            "date": "2012-01-11",
            "value": 19
        },
        {
            "date": "2012-01-12",
            "value": 21
        },
        {
            "date": "2012-01-13",
            "value": 22
        },
        {
            "date": "2012-01-14",
            "value": 20
        },
        {
            "date": "2012-01-15",
            "value": 18
        },
        {
            "date": "2012-01-16",
            "value": 14
        },
        {
            "date": "2012-01-17",
            "value": 16
        },
        {
            "date": "2012-01-18",
            "value": 18
        },
        {
            "date": "2012-01-19",
            "value": 17
        },
        {
            "date": "2012-01-20",
            "value": 15
        },
        {
            "date": "2012-01-21",
            "value": 12
        },
        {
            "date": "2012-01-22",
            "value": 10
        },
        {
            "date": "2012-01-23",
            "value": 8
        }
    ];
    var chartData = [
        {
            "date": "2012-01-01",
            "distance": 227,
            "townName": "New York",
            "townName2": "New York",
            "townSize": 25,
            "latitude": 40.71,
            "duration": 408
        },
        {
            "date": "2012-01-02",
            "distance": 371,
            "townName": "Washington",
            "townSize": 14,
            "latitude": 38.89,
            "duration": 482
        },
        {
            "date": "2012-01-03",
            "distance": 433,
            "townName": "Wilmington",
            "townSize": 6,
            "latitude": 34.22,
            "duration": 562
        },
        {
            "date": "2012-01-04",
            "distance": 345,
            "townName": "Jacksonville",
            "townSize": 7,
            "latitude": 30.35,
            "duration": 379
        },
        {
            "date": "2012-01-05",
            "distance": 480,
            "townName": "Miami",
            "townName2": "Miami",
            "townSize": 10,
            "latitude": 25.83,
            "duration": 501
        },
        {
            "date": "2012-01-06",
            "distance": 386,
            "townName": "Tallahassee",
            "townSize": 7,
            "latitude": 30.46,
            "duration": 443
        },
        {
            "date": "2012-01-07",
            "distance": 348,
            "townName": "New Orleans",
            "townSize": 10,
            "latitude": 29.94,
            "duration": 405
        },
        {
            "date": "2012-01-08",
            "distance": 238,
            "townName": "Houston",
            "townName2": "Houston",
            "townSize": 16,
            "latitude": 29.76,
            "duration": 309
        },
        {
            "date": "2012-01-09",
            "distance": 218,
            "townName": "Dalas",
            "townSize": 17,
            "latitude": 32.8,
            "duration": 287
        },
        {
            "date": "2012-01-10",
            "distance": 349,
            "townName": "Oklahoma City",
            "townSize": 11,
            "latitude": 35.49,
            "duration": 485
        },
        {
            "date": "2012-01-11",
            "distance": 603,
            "townName": "Kansas City",
            "townSize": 10,
            "latitude": 39.1,
            "duration": 890
        },
        {
            "date": "2012-01-12",
            "distance": 534,
            "townName": "Denver",
            "townName2": "Denver",
            "townSize": 18,
            "latitude": 39.74,
            "duration": 810
        },
        {
            "date": "2012-01-13",
            "townName": "Salt Lake City",
            "townSize": 12,
            "distance": 425,
            "duration": 670,
            "latitude": 40.75,
            "alpha":0.4
        },
        {
            "date": "2012-01-14",
            "latitude": 36.1,
            "duration": 470,
            "townName": "Las Vegas",
            "townName2": "Las Vegas",
            "bulletClass": "lastBullet"
        },
        {
            "date": "2012-01-15"
        },
        {
            "date": "2012-01-16"
        },
        {
            "date": "2012-01-17"
        },
        {
            "date": "2012-01-18"
        },
        {
            "date": "2012-01-19"
        }
    ];
    var chart;

    AmCharts.ready(function () {
        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();
        chart.addClassNames = true;
        chart.dataProvider = chartData;
        chart.categoryField = "date";
        chart.dataDateFormat = "YYYY-MM-DD";
        chart.startDuration = 1;
        chart.color = "#FFFFFF";
        chart.marginLeft = 0;

        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
        categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD
        categoryAxis.autoGridCount = false;
        categoryAxis.gridCount = 50;
        categoryAxis.gridAlpha = 0.1;
        categoryAxis.gridColor = "#FFFFFF";
        categoryAxis.axisColor = "#555555";
        // we want custom date formatting, so we change it in next line
        categoryAxis.dateFormats = [{
            period: 'DD',
            format: 'DD'
        }, {
            period: 'WW',
            format: 'MMM DD'
        }, {
            period: 'MM',
            format: 'MMM'
        }, {
            period: 'YYYY',
            format: 'YYYY'
        }];

        // as we have data of different units, we create three different value axes
        // Distance value axis
        var distanceAxis = new AmCharts.ValueAxis();
        distanceAxis.title = "distance";
        distanceAxis.gridAlpha = 0;
        distanceAxis.axisAlpha = 0;
        chart.addValueAxis(distanceAxis);

        // latitude value axis
        var latitudeAxis = new AmCharts.ValueAxis();
        latitudeAxis.gridAlpha = 0;
        latitudeAxis.axisAlpha = 0;
        latitudeAxis.title = "duration and latitude";
        latitudeAxis.offset = 83;
        latitudeAxis.titleOffset = 10;
        latitudeAxis.position = "right";
        chart.addValueAxis(latitudeAxis);

        // duration value axis
        var durationAxis = new AmCharts.ValueAxis();
        // the following line makes this value axis to convert values to duration
        // it tells the axis what duration unit it should use. mm - minute, hh - hour...
        durationAxis.duration = "mm";
        durationAxis.durationUnits = {
            DD: "d. ",
            hh: "h ",
            mm: "min",
            ss: ""
        };
        durationAxis.gridAlpha = 0;
        durationAxis.axisAlpha = 0;
        durationAxis.inside = false;
        durationAxis.position = "right";
        chart.addValueAxis(durationAxis);

        // GRAPHS
        // distance graph
        var distanceGraph = new AmCharts.AmGraph();
        distanceGraph.valueField = "distance";
        distanceGraph.title = "distance";
        distanceGraph.type = "column";
        distanceGraph.fillAlphas = 0.9;
        distanceGraph.valueAxis = distanceAxis; // indicate which axis should be used
        distanceGraph.balloonText = "[[value]] miles";
        distanceGraph.legendValueText = "[[value]] mi";
        distanceGraph.legendPeriodValueText = "total: [[value.sum]] mi";
        distanceGraph.lineColor = "#263138";
        distanceGraph.alphaField = "alpha";
        chart.addGraph(distanceGraph);

        // latitude graph
        var latitudeGraph = new AmCharts.AmGraph();
        latitudeGraph.valueField = "latitude";
        latitudeGraph.id = "g1";
        latitudeGraph.classNameField = "bulletClass";
        latitudeGraph.title = "latitude/city";
        latitudeGraph.type = "line";
        latitudeGraph.valueAxis = latitudeAxis; // indicate which axis should be used
        latitudeGraph.lineColor = "#786c56";
        latitudeGraph.lineThickness = 1;
        latitudeGraph.legendValueText = "[[value]]/[[description]]";
        latitudeGraph.descriptionField = "townName";
        latitudeGraph.bullet = "round";
        latitudeGraph.bulletSizeField = "townSize"; // indicate which field should be used for bullet size
        latitudeGraph.bulletBorderColor = "#786c56";
        latitudeGraph.bulletBorderAlpha = 1;
        latitudeGraph.bulletBorderThickness = 2;
        latitudeGraph.bulletColor = "#000000";
        latitudeGraph.labelText = "[[townName2]]"; // not all data points has townName2 specified, that's why labels are displayed only near some of the bullets.
        latitudeGraph.labelPosition = "right";
        latitudeGraph.balloonText = "latitude:[[value]]";
        latitudeGraph.showBalloon = true;
        latitudeGraph.animationPlayed = true;
        chart.addGraph(latitudeGraph);

        // duration graph
        var durationGraph = new AmCharts.AmGraph();
        durationGraph.id = "g2";
        durationGraph.title = "duration";
        durationGraph.valueField = "duration";
        durationGraph.type = "line";
        durationGraph.valueAxis = durationAxis; // indicate which axis should be used
        durationGraph.lineColor = "#ff5755";
        durationGraph.balloonText = "[[value]]";
        durationGraph.lineThickness = 1;
        durationGraph.legendValueText = "[[value]]";
        durationGraph.bullet = "square";
        durationGraph.bulletBorderColor = "#ff5755";
        durationGraph.bulletBorderThickness = 1;
        durationGraph.bulletBorderAlpha = 1;
        durationGraph.dashLengthField = "dashLength";
        durationGraph.animationPlayed = true;
        chart.addGraph(durationGraph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.zoomable = false;
        chartCursor.categoryBalloonDateFormat = undefined;
        chartCursor.cursorAlpha = 0;
        chartCursor.valueBalloonsEnabled = false;
        chartCursor.valueLineBalloonEnabled = true;
        chartCursor.valueLineEnabled = true;
        chartCursor.valueLineAlpha = 0.5;
        chart.addChartCursor(chartCursor);

        // LEGEND
        var legend = new AmCharts.AmLegend();
        legend.bulletType = "round";
        legend.equalWidths = false;
        legend.valueWidth = 120;
        legend.useGraphSettings = true;
        legend.color = "#FFFFFF";
        chart.addLegend(legend);

        // WRITE
        chart.write("chartdiv");


        // SERIAL CHART
        chart = new AmCharts.AmSerialChart();

        chart.dataProvider = chartDatas;
        chart.dataDateFormat = "YYYY-MM-DD";
        chart.categoryField = "date";


        // AXES
        // category
        var categoryAxis = chart.categoryAxis;
        categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
        categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD
        categoryAxis.gridAlpha = 0.1;
        categoryAxis.minorGridAlpha = 0.1;
        categoryAxis.axisAlpha = 0;
        categoryAxis.minorGridEnabled = true;
        categoryAxis.inside = true;

        // value
        var valueAxis = new AmCharts.ValueAxis();
        valueAxis.tickLength = 0;
        valueAxis.axisAlpha = 0;
        valueAxis.showFirstLabel = false;
        valueAxis.showLastLabel = false;
        chart.addValueAxis(valueAxis);

        // GRAPH
        var graph = new AmCharts.AmGraph();
        graph.dashLength = 3;
        graph.lineColor = "#00CC00";
        graph.valueField = "value";
        graph.dashLength = 3;
        graph.bullet = "round";
        graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>value:[[value]]</span></b>";
        chart.addGraph(graph);

        // CURSOR
        var chartCursor = new AmCharts.ChartCursor();
        chartCursor.valueLineEnabled = true;
        chartCursor.valueLineBalloonEnabled = true;
        chart.addChartCursor(chartCursor);

        // SCROLLBAR
        var chartScrollbar = new AmCharts.ChartScrollbar();
        chart.addChartScrollbar(chartScrollbar);

        // HORIZONTAL GREEN RANGE
        var guide = new AmCharts.Guide();
        guide.value = 10;
        guide.toValue = 20;
        guide.fillColor = "#00CC00";
        guide.inside = true;
        guide.fillAlpha = 0.2;
        guide.lineAlpha = 0;
        valueAxis.addGuide(guide);

        // TREND LINES
        // first trend line
        var trendLine = new AmCharts.TrendLine();
        // note,when creating date objects 0 month is January, as months are zero based in JavaScript.
        trendLine.initialDate = new Date(2012, 0, 2, 12); // 12 is hour - to start trend line in the middle of the day
        trendLine.finalDate = new Date(2012, 0, 11, 12);
        trendLine.initialValue = 10;
        trendLine.finalValue = 19;
        trendLine.lineColor = "#CC0000";
        chart.addTrendLine(trendLine);

        // second trend line
        trendLine = new AmCharts.TrendLine();
        trendLine.initialDate = new Date(2012, 0, 17, 12);
        trendLine.finalDate = new Date(2012, 0, 22, 12);
        trendLine.initialValue = 16;
        trendLine.finalValue = 10;
        trendLine.lineColor = "#CC0000";
        chart.addTrendLine(trendLine);

        // WRITE
        chart.write("chartdiv1");
    });
</script>
<script src="{{asset('/')}}admin/js/jquery.sparkline.js"></script>
<script type="text/javascript">
    $(".colorbox span").click(function(){
        $(".colors").toggleClass("colorright");
    });
    function color(col){
        $("#header").css("background-color", col);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseover(
            function () {
                $(this).css("background-color",col);
            }
        );
    }
    function color1(cols){
        $("#sidebar").css("background-color", cols);
        $(".sidebar-menu li a").css("background-color", cols);
        $(".sidebar-menu .sub li a").css("background-color", cols);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseout(
            function () {
                $(this).css("background-color",cols);
            }
        );
    }

</script>

<!--custome script for all page-->
<script src="{{asset('/')}}admin/js/scripts.js"></script>
{{--for ckeditor--}}
<script>
    initSample();
</script>

</body>
</html>
