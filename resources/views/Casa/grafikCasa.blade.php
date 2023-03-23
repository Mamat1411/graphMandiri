@section('chartCasa')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="casaContainer"></div>
    <script>
        Highcharts.chart('casaContainer', {
            chart: {
                type: 'area',
            },
            title: {
                text: 'Graph Casa *'
            },
            subtitle: {
                text: 'Periode',
                align: 'center',
                verticalAlign: 'bottom'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
            },
            xAxis: {
                categories: {!!json_encode($tglCasa)!!}
            },
            yAxis: {
                title: {
                    text: 'Pendapatan'
                }
            },
            plotOptions: {
                area: {
                    fillOpacity: 0.5
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Target',
                data: {!!json_encode($targetCasa)!!}
            }, {
                name: 'Realisasi',
                data: {!!json_encode($realCasa)!!}
            }]
        });
    </script>
</figure>
@endsection