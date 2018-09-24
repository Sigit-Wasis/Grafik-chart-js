<?php
    include "koneksi.php";
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Kegiatan Santri Pondok Qodr'
    },
    subtitle: {
        text: 'Sukorame RT 17 Mangunan, Dlingo, Bantul, 55783, Daerah Istimewa Yogyakarta.'
    },
    xAxis: {
        categories: [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Point Kegiatan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Devisi IT',
        data: [3]

    }, {
        name: 'Devisi Agama',
        data: [4]

    }, {
        name: 'kedisiplinan',
        data: [1]

    }, {
        name: 'keuangan',
        data: [5]

    }, {
        name: 'kenyamanan',
        data: [5]
    
    }, {
        name: 'administrasi',
        data: [3]

    }]
});
</script>