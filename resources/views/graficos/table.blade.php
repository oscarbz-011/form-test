<body>
    <h1 class="text-center">Resultados obtenidos de la encuesta</h1>

    <div class="container">
        <div class="row">
            <div class="form-group col-sm-6">
                @foreach ($preguntas as $pr )
                    <div class="form-group">
                    <div >
                        <a href="{{ route('graficos.show', [$pr->id]) }}">{{$pr->nombre}}</a>
                    </div>
                    </div>
                @endforeach
            </div>
            <div id="container" class="form-group col-sm-6">

            </div>
        </div>
    </div>





    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">



    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            //text: 'Encuesta sobre comercio electronico'
            text: ' '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: <?= $datos ?>

        }]
    });
    </script>
    </body>
