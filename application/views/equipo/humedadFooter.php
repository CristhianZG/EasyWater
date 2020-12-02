<script>
    am4core.useTheme(am4themes_animated);

    // create chart
    var chartE = am4core.create("humedadEquipo", am4charts.GaugeChart);


    chartE.innerRadius = -15;

    var axisE = chartE.xAxes.push(new am4charts.ValueAxis());
    axisE.min = 0;
    axisE.max = 100;
    axisE.strictMinMax = true;

    var colorSet = new am4core.ColorSet();

    var range0 = axisE.axisRanges.create();
    range0.value = 0;
    range0.endValue = 50;
    range0.axisFill.fillOpacity = 1;
    range0.axisFill.fill = colorSet.getIndex(0);
    range0.axisFill.zIndex = -1;

    var range1 = axisE.axisRanges.create();
    range1.value = 50;
    range1.endValue = 80;
    range1.axisFill.fillOpacity = 1;
    range1.axisFill.fill = colorSet.getIndex(2);
    range1.axisFill.zIndex = -1;

    var range2 = axisE.axisRanges.create();
    range2.value = 80;
    range2.endValue = 100;
    range2.axisFill.fillOpacity = 1;
    range2.axisFill.fill = colorSet.getIndex(4);
    range2.axisFill.zIndex = -1;

    var handE = chartE.hands.push(new am4charts.ClockHand());

    setInterval(function() {
        handE.showValue(76, 1000, am4core.ease.cubicOut);
    }, 2000);
</script>
<script>
    am4core.useTheme(am4themes_animated);

    // create chart
    var chartC = am4core.create("humedadCondensacion", am4charts.GaugeChart);


    chartC.innerRadius = -15;

    var axisC = chartC.xAxes.push(new am4charts.ValueAxis());
    axisC.min = 0;
    axisC.max = 100;
    axisC.strictMinMax = true;

    var colorSet = new am4core.ColorSet();

    var range0 = axisC.axisRanges.create();
    range0.value = 0;
    range0.endValue = 50;
    range0.axisFill.fillOpacity = 1;
    range0.axisFill.fill = colorSet.getIndex(0);
    range0.axisFill.zIndex = -1;

    var range1 = axisC.axisRanges.create();
    range1.value = 50;
    range1.endValue = 80;
    range1.axisFill.fillOpacity = 1;
    range1.axisFill.fill = colorSet.getIndex(2);
    range1.axisFill.zIndex = -1;

    var range2 = axisC.axisRanges.create();
    range2.value = 80;
    range2.endValue = 100;
    range2.axisFill.fillOpacity = 1;
    range2.axisFill.fill = colorSet.getIndex(4);
    range2.axisFill.zIndex = -1;

    var handC = chartC.hands.push(new am4charts.ClockHand());

    setInterval(function() {
        handC.showValue(12, 1000, am4core.ease.cubicOut);
    }, 2000);
</script>
<!---TACOMETRO 1--->
<script>
    am4core.useTheme(am4themes_animated);

    // create chart
    var chartH = am4core.create("humedadHambiente", am4charts.GaugeChart);


    chartH.innerRadius = -15;

    var axisH = chartH.xAxes.push(new am4charts.ValueAxis());
    axisH.min = 0;
    axisH.max = 100;
    axisH.strictMinMax = true;

    var colorSet = new am4core.ColorSet();

    var range0 = axisH.axisRanges.create();
    range0.value = 0;
    range0.endValue = 50;
    range0.axisFill.fillOpacity = 1;
    range0.axisFill.fill = colorSet.getIndex(0);
    range0.axisFill.zIndex = -1;

    var range1 = axisH.axisRanges.create();
    range1.value = 50;
    range1.endValue = 80;
    range1.axisFill.fillOpacity = 1;
    range1.axisFill.fill = colorSet.getIndex(2);
    range1.axisFill.zIndex = -1;

    var range2 = axisH.axisRanges.create();
    range2.value = 80;
    range2.endValue = 100;
    range2.axisFill.fillOpacity = 1;
    range2.axisFill.fill = colorSet.getIndex(4);
    range2.axisFill.zIndex = -1;

    var handH = chartH.hands.push(new am4charts.ClockHand());

    setInterval(function() {
        handH.showValue(56, 1000, am4core.ease.cubicOut);
    }, 2000);
</script>
<!---GRAFICA LINEAL---->
<script>
    am4core.useTheme(am4themes_animated);
    //am4core.useTheme(am4themes_dark);

    var chart = am4core.create("humedadLineal", am4charts.XYChart);


    chart.padding(0, 0, 0, 0);

    chart.zoomOutButton.disabled = true;

    var data = [];
    var visits = 50;
    var i = 0;

    for (i = 0; i <= 30; i++) {
        visits -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
        data.push({
            date: new Date().setSeconds(i - 30),
            value: visits
        });
    }

    chart.data = data;

    var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
    dateAxis.renderer.grid.template.location = 0;
    dateAxis.renderer.minGridDistance = 30;
    dateAxis.dateFormats.setKey("second", "ss");
    dateAxis.periodChangeDateFormats.setKey("second", "[bold]h:mm a");
    dateAxis.periodChangeDateFormats.setKey("minute", "[bold]h:mm a");
    dateAxis.periodChangeDateFormats.setKey("hour", "[bold]h:mm a");
    dateAxis.renderer.inside = true;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.tooltip.disabled = true;
    valueAxis.interpolationDuration = 500;
    valueAxis.rangeChangeDuration = 500;
    valueAxis.renderer.inside = true;
    valueAxis.renderer.minLabelPosition = 0.05;
    valueAxis.renderer.maxLabelPosition = 0.95;

    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.dateX = "date";
    series.dataFields.valueY = "value";
    series.interpolationDuration = 500;
    series.defaultState.transitionDuration = 0;
    series.tensionX = 0.8;

    chart.events.on("datavalidated", function() {
        dateAxis.zoom({
            start: 1 / 15,
            end: 1.2
        }, false, true);
    });

    dateAxis.interpolationDuration = 500;
    dateAxis.rangeChangeDuration = 500;

    document.addEventListener("visibilitychange", function() {
        if (document.hidden) {
            if (interval) {
                clearInterval(interval);
            }
        } else {
            startInterval();
        }
    }, false);

    // add data
    var interval;

    function startInterval() {
        interval = setInterval(function() {
            visits = 20;
            var lastdataItem = series.dataItems.getIndex(series.dataItems.length - 1);
            chart.addData({
                    date: new Date(lastdataItem.dateX.getTime() + 1000),
                    value: visits
                },
                1
            );
        }, 2000);

    }

    startInterval();

    // all the below is optional, makes some fancy effects
    // gradient fill of the series
    series.fillOpacity = 1;
    var gradient = new am4core.LinearGradient();
    gradient.addColor(chart.colors.getIndex(0), 0.2);
    gradient.addColor(chart.colors.getIndex(0), 0);
    series.fill = gradient;

    // this makes date axis labels to fade out
    dateAxis.renderer.labels.template.adapter.add("fillOpacity", function(fillOpacity, target) {
        var dataItem = target.dataItem;
        return dataItem.position;
    })

    // need to set this, otherwise fillOpacity is not changed and not set
    dateAxis.events.on("validated", function() {
        am4core.iter.each(dateAxis.renderer.labels.iterator(), function(label) {
            label.fillOpacity = label.fillOpacity;
        })
    })

    // this makes date axis labels which are at equal minutes to be rotated
    dateAxis.renderer.labels.template.adapter.add("rotation", function(rotation, target) {
        var dataItem = target.dataItem;
        if (dataItem.date && dataItem.date.getTime() == am4core.time.round(new Date(dataItem.date.getTime()), "minute").getTime()) {
            target.horizontalCenter = "left";
            target.verticalCenter = "middle";
            return -90;
        } else {
            target.horizontalCenter = "middle";
            target.verticalCenter = "bottom";
            return 0;
        }
    })

    // bullet at the front of the line
    var bullet = series.createChild(am4charts.CircleBullet);
    bullet.circle.radius = 5;
    bullet.fillOpacity = 1;
    bullet.fill = chart.colors.getIndex(0);
    bullet.isMeasured = false;

    series.events.on("validated", function() {
        bullet.moveTo(series.dataItems.last.point);
        bullet.validatePosition();
    });
</script>