@extends('layout/main')

@section('title', 'Info Corona | Home')

@section('container')

<h5 class="text-center text-white text-ques mt-3">Data Corona Berdasarkan Provinsi di Indonesia</h5>


    <div class="row row-cards">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
            <div class="card overflow-hidden dark-col border-dark">
                <div class="card-header ">
                    <h3 class="card-title text-center text-white dark-col text-ques head-indo mb-0">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table  box-dark text-white table-bordered table-dark table-fixed">
                        <thead class="text-ques">
                            <tr>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Positif</th>
                            <th scope="col">Sembuh</th>
                            <th scope="col">Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="text-ques">DKI Jakarta</td>
                            <td class="text-monda">1233</td>
                            <td class="text-monda">132121</td>
                            <td class="text-monda">13212</td>
                            </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-header dark-col">
						<h3 class="card-title text-ques text-white head-indo ">Data terakhir: </h3>
                    </div>
                    <a href="https://kawalcorona.com/api/" class="ml-2 text-white text-ques">kawalcorona.com</a>
            </div>
        </div>
    </div>

      <!-- Chart Provinsi-->
      <div class="row mt-3">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
				<div class="card overflow-hidden dark-col border-dark">
					<div class="card-header text-ques text-white dark-col border-dark">
						<h3 class="card-title text-center text-white dark-col text-ques head-indo mb-0">Statistik Kasus Coronavirus di Indonesia</h3>
                        <p class="text-white text-ques text-center">Hasil dari Chart ini bisa anda unduh dari tab kanan atas chart</p>  
                    </div>
					<div class="card-body line-chart">
						<div class="chart-wrapper">
                        <div id="chart-column" style="width:100%; height:500px;"></div>
						</div>
					</div>
				</div>
            </div>
        </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('chart-column', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Statistik Corona Berdasarkan Provinsi di Indonesia'
    },
    subtitle: {
        text: 'WWW.INFOCORONA.MY.ID'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    legend: {
        enabled: true
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Shanghai', 24.2],
            ['Beijing', 20.8],
            ['Karachi', 14.9],
            ['Shenzhen', 13.7],
            ['Guangzhou', 13.1],
            ['Istanbul', 12.7],
            ['Mumbai', 12.4],
            ['Moscow', 12.2],
            ['São Paulo', 12.0],
            ['Delhi', 11.7],
            ['Kinshasa', 11.5],
            ['Tianjin', 11.2],
            ['Lahore', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '10px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
    });
});

</script>


@endsection