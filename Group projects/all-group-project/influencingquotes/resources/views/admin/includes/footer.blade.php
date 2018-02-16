<div class="col-sm-12" style="margin-top: 100px;">
    <p class="back-link">Developed by <a href="http://www.marufrion.com">Maruf Abdullah</a></p>
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<script src="{{asset('/')}}admin-panel/js/jquery-1.11.1.min.js"></script>
<script src="{{asset('/')}}admin-panel/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}admin-panel/js/chart.min.js"></script>
<script src="{{asset('/')}}admin-panel/js/chart-data.js"></script>
<script src="{{asset('/')}}admin-panel/js/easypiechart.js"></script>
<script src="{{asset('/')}}admin-panel/js/easypiechart-data.js"></script>
<script src="{{asset('/')}}admin-panel/js/bootstrap-datepicker.js"></script>
<script src="{{asset('/')}}admin-panel/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>