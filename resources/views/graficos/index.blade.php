<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Highcharts Example</title>
</head>

<body>
<h1 class="text-center">Laravel 9 Highcharts Example</h1>
<div id="container" class="w-50"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    // var users =  <?php echo json_encode($preguntas) ?>;

    Highcharts.chart('container', {
        title: {
            text: 'New User Growth, 2022'
        },
        subtitle: {
            text: 'Source: codingdriver.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Respuestas',
            data: $datos
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>
