@section('chartTabungan')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="tabunganContainer"></div>
    <script>
        Highcharts.chart('tabunganContainer', {
            chart: {
                type: 'area',
            },
            title: {
                text: 'Graph Tabungan*'
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
                categories: {!!json_encode($tglTabungan)!!}
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
                data: {!!json_encode($targetTabungan)!!}
            },{
                name: 'Realisasi',
                data: {!!json_encode($realTabungan)!!}
            }]
        });
    </script>
</figure>
@endsection