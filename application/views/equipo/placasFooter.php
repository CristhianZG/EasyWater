<!--GRAFICOS TACOMETROS-->
<script>
    var gaugeOptions = {
        chart: {
            type: 'solidgauge'
        },

        title: null,

        pane: {
            //center: ['50%', '85%'],
            center: ['50%', '50%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        exporting: {
            enabled: false
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.1, '#55BF3B'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#DF5353'] // red
            ],
            lineWidth: 0,
            tickWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };
    var chartPlacaA = Highcharts.chart('container-placaA', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'PLACA A'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'TemperaturaA',
            data: [0],
            dataLabels: {
                format: '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">C°</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: 'TemperaturaA'
            }
        }]

    }));

    var chartPlacaB = Highcharts.chart('container-placaB', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'PLACA B'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'TemperaturaB',
            data: [0],
            dataLabels: {
                format: '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">C°</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: 'TemperaturaB'
            }
        }]

    }));

    var chartPlacaC = Highcharts.chart('container-placaC', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'PLACA C'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'TemperaturaC',
            data: [0],
            dataLabels: {
                format: '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">C°</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: 'TemperaturaC'
            }
        }]

    }));

    var chartPlacaD = Highcharts.chart('container-placaD', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'PLACA D'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'TemperaturaD',
            data: [0],
            dataLabels: {
                format: '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">C°</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: 'TemperaturaD'
            }
        }]

    }));

    var chartPlacaE = Highcharts.chart('container-placaE', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'PLACA E'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'TemperaturaE',
            data: [0],
            dataLabels: {
                format: '<div style="text-align:center">' +
                    '<span style="font-size:25px">{y}</span><br/>' +
                    '<span style="font-size:12px;opacity:0.4">C°</span>' +
                    '</div>'
            },
            tooltip: {
                valueSuffix: 'TemperaturaE'
            }
        }]

    }));

    // Bring life to the dials
    setInterval(function() {
        // Speed
        var point,
            newVal,
            inc;

        var JSON = $.ajax({
            url: "http://localhost/ewproyect/json/datoSensores?q=1",
            dataType: 'json',
            async: false
        }).responseText;
        var Respuesta = jQuery.parseJSON(JSON);
        var total = parseInt(Respuesta[0].temperatura);

        if (chartPlacaA) {
            point = chartPlacaA.series[0].points[0];
            inc = 0;
            newVal = total;

            point.update(newVal);
        }

        if (chartPlacaB) {
            point = chartPlacaB.series[0].points[0];
            inc = 0;

            var JSON = $.ajax({
                url: "http://localhost/ewproyect/json/datoSensores?q=2",
                dataType: 'json',
                async: false
            }).responseText;
            var Respuesta = jQuery.parseJSON(JSON);
            var total = parseFloat(Respuesta[0].temperatura);

            point.update(total);
        }
        if (chartPlacaC) {
            point = chartPlacaC.series[0].points[0];
            inc = 0;

            var JSON = $.ajax({
                url: "http://localhost/ewproyect/json/datoSensores?q=3",
                dataType: 'json',
                async: false
            }).responseText;
            var Respuesta = jQuery.parseJSON(JSON);
            var total = parseFloat(Respuesta[0].temperatura);

            point.update(total);
        }

        if (chartPlacaD) {
            point = chartPlacaD.series[0].points[0];
            inc = 0;

            var JSON = $.ajax({
                url: "http://localhost/ewproyect/json/datoSensores?q=1",
                dataType: 'json',
                async: false
            }).responseText;
            var Respuesta = jQuery.parseJSON(JSON);
            var total = parseFloat(Respuesta[0].temperatura);

            point.update(total);
        }

        if (chartPlacaE) {
            point = chartPlacaE.series[0].points[0];
            inc = 0;

            var JSON = $.ajax({
                url: "http://localhost/ewproyect/json/datoSensores?q=2",
                dataType: 'json',
                async: false
            }).responseText;
            var Respuesta = jQuery.parseJSON(JSON);
            var total = parseFloat(Respuesta[0].temperatura);

            point.update(total);
        }

    }, 2000);
</script>
<!--GRAFICOS LINEAL A-->
<script>
    Highcharts.chart('linealA', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function() {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function() {
                        //lectura de valores
                        var JSON = $.ajax({
                            url: "http://localhost/highcharts/DatoSensores.php?q=3",
                            dataType: 'json',
                            async: false
                        }).responseText;

                        var Respuesta = jQuery.parseJSON(JSON);
                        var total = parseFloat(Respuesta[0].temperatura);

                        var x = (new Date()).getTime(), // current time
                            y = total;
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: 'Calculo de Temperatura Placa A'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function(allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: 'Valores'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Lecturas',
            data: (function() {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()

                    });
                }
                return data;
            }())
        }]
    });
</script>
<!--GRAFICOS LINEAL B-->
<script>
    Highcharts.chart('linealB', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function() {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function() {
                        //lectura de valores
                        var JSON = $.ajax({
                            url: "http://localhost/highcharts/DatoSensores.php?q=1",
                            dataType: 'json',
                            async: false
                        }).responseText;

                        var Respuesta = jQuery.parseJSON(JSON);
                        var total = parseFloat(Respuesta[0].temperatura);

                        var x = (new Date()).getTime(), // current time
                            y = total;
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: 'Calculo de Temperatura Placa B'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function(allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: 'Valores'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Lecturas',
            data: (function() {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()

                    });
                }
                return data;
            }())
        }]
    });
</script>
<!--GRAFICOS LINEAL C-->
<script>
    Highcharts.chart('linealC', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function() {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function() {
                        //lectura de valores
                        var JSON = $.ajax({
                            url: "http://localhost/highcharts/DatoSensores.php?q=2",
                            dataType: 'json',
                            async: false
                        }).responseText;

                        var Respuesta = jQuery.parseJSON(JSON);
                        var total = parseFloat(Respuesta[0].temperatura);

                        var x = (new Date()).getTime(), // current time
                            y = total;
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: 'Calculo de Temperatura Placa C'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function(allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: 'Valores'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Lecturas',
            data: (function() {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()

                    });
                }
                return data;
            }())
        }]
    });
</script>
<!--GRAFICOS LINEAL D-->
<script>
    Highcharts.chart('linealD', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function() {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function() {
                        //lectura de valores
                        var JSON = $.ajax({
                            url: "http://localhost/highcharts/DatoSensores.php?q=1",
                            dataType: 'json',
                            async: false
                        }).responseText;

                        var Respuesta = jQuery.parseJSON(JSON);
                        var total = parseFloat(Respuesta[0].temperatura);

                        var x = (new Date()).getTime(), // current time
                            y = total;
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: 'Calculo de Temperatura Placa D'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function(allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: 'Valores'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Lecturas',
            data: (function() {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()

                    });
                }
                return data;
            }())
        }]
    });
</script>
<!--GRAFICOS LINEAL E-->
<script>
    Highcharts.chart('linealE', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function() {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function() {
                        //lectura de valores
                        var JSON = $.ajax({
                            url: "http://localhost/highcharts/DatoSensores.php?q=1",
                            dataType: 'json',
                            async: false
                        }).responseText;

                        var Respuesta = jQuery.parseJSON(JSON);
                        var total = parseFloat(Respuesta[0].temperatura);

                        var x = (new Date()).getTime(), // current time
                            y = total;
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: 'Calculo de Temperatura Placa E'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function(allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: 'Valores'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Lecturas',
            data: (function() {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()

                    });
                }
                return data;
            }())
        }]
    });
</script>