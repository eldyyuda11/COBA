@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="container px-lg-5">
                        <div class="row mx-lg-n5">
                          <div class="col py-3 px-lg-5 border bg-light"><div id="container"></div></div>
                          <div class="col py-3 px-lg-5 border bg-light"><div id="container2"></div></div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script> --}}
    <script>

        Highcharts.chart('container', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Bulan perilisan Cerita'
    },
    subtitle: {
        text: ''
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [
        { // Primary yAxis
        // labels: {
        //     format: '{value}°C',
        //     style: {
        //         color: Highcharts.getOptions().colors[1]
        //     }
        // },
        // title: {
        //     text: '',
        //     style: {
        //         color: Highcharts.getOptions().colors[1]
        //     }
        // }
    },
     { // Secondary yAxis
        // title: {
        //     text: 'Rainfall',
        //     style: {
        //         color: Highcharts.getOptions().colors[0]
        //     }
        // },
        // labels: {
        //     format: '{value} mm',
        //     style: {
        //         color: Highcharts.getOptions().colors[0]
        //     }
        // },
        opposite: true
    }
],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Cerita',
        type: 'column',
        yAxis: 1,
        data: [
            {!!JSON_ENCODE($jan)!!} ,
            {!!JSON_ENCODE($feb)!!},
            {!!JSON_ENCODE($mar)!!},
            {!!JSON_ENCODE($apr)!!},
            {!!JSON_ENCODE($mei)!!},
            {!!JSON_ENCODE($jun)!!},
            {!!JSON_ENCODE($jul)!!},
            {!!JSON_ENCODE($agus)!!},
            {!!JSON_ENCODE($sep)!!},
            {!!JSON_ENCODE($okt)!!},
            {!!JSON_ENCODE($nov)!!},
            {!!JSON_ENCODE($des)!!}],
            // tooltip: {
            //     valueSuffix: ' mm'
            // }

    }
    // ,
    // {
    //     name: 'Temperature',
    //     type: 'spline',
    //     data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
    //     // tooltip: {
    //     //     valueSuffix: '°C'
    //     // }
    // }
]
});
    </script>
    <script>
Highcharts.chart('container2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Jumlah User berdasarkan Role'
    },
    xAxis: {
        categories: ['User']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total User'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Admin',
        data: [ {!!JSON_ENCODE($totalA)!!}]
    }, {
        name: 'Penulis',
        data: [ {!!JSON_ENCODE($totalP)!!}]
    }]
});

    </script>
@stop
