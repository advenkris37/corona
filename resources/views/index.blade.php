@extends('layout/main')

@section('title', 'Info Corona | Home')

@section('container')


<img src="{{ asset('image/logo-coba.png') }}" class="img-logo mx-auto d-block mb-3" alt="..." style="width: 300px;" > 


<!-- Data Indo -->
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
				<div class="card overflow-hidden dark-col border-dark">
					<div class="card-header dark-col border-dark">
                        <h3 class="card-title text-center text-white dark-col text-ques head-indo mb-0">Data Corona di Indonesia <img src="{{ asset('image/bendera-indo.gif') }}" class="img-indo"></h3>
                    <p class="text-white text-ques text-center" id="tanggal"></p>        
                    </div>
					<div class="row dark-col mt-4 m-3 border-dark">
                        <div class="col-md-4 border-dark">
                            <div class="card border-info box-dark mx-sm-1 p-3">
                                <div class="card border-info shadow text-info p-3 my-card box-dark" ><i class="fas fa-sad-cry fa-fw" aria-hidden="true"></i></div>
                                <div class="text-info text-center mt-3  text-ques"><h4>Positif</h4></div>
                                <div class="text-info text-center mt-2 text-monda"><h1>3,293</h1></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-success box-dark mx-sm-1 p-3">
                                <div class="card border-success shadow text-success p-3 my-card box-dark"><span class="fas fa-smile-beam" aria-hidden="true"></span></div>
                                <div class="text-success text-center mt-3 text-ques"><h4>Sembuh</h4></div>
                                <div class="text-success text-center mt-2 text-monda"><h1>252</h1></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-danger box-dark mx-sm-1 p-3">
                                <div class="card border-danger shadow text-danger p-3 my-card box-dark" ><span class="fas fa-heart-broken" aria-hidden="true"></span></div>
                                <div class="text-danger text-center mt-3 text-ques"><h4>Meninggal</h4></div>
                                <div class="text-danger text-center mt-2 text-monda"><h1>280</h1></div>
                            </div>
                        </div>

                    </div>
                    <div class="card-header dark-col">
						<h3 class="card-title text-ques text-white head-indo ">Data terakhir: </h3>
                    </div>
                    <a href="https://kawalcorona.com/api/" class="ml-2 text-white text-ques">kawalcorona.com</a>
                </div>
            </div>
		</div>
        <!-- Data Indo-->
        
        <!-- Chart Indo-->
        <div class="row mt-3">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
				<div class="card overflow-hidden dark-col border-dark">
					<div class="card-header text-ques text-white dark-col border-dark">
						<h3 class="card-title text-center text-white dark-col text-ques head-indo mb-0">Statistik Kasus Coronavirus di Indonesia</h3>
                        <p class="text-white text-ques text-center">Hasil dari Chart ini bisa anda unduh dari tab kanan atas chart</p>  
                    </div>
					<div class="card-body line-chart">
						<div class="chart-wrapper">
                        <div id="chart-line" style="width:100%; height:400px;"></div>
						</div>
					</div>
				</div>
            </div>
        </div>


        <!-- Data Global -->
        <div class="row mt-3">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
				<div class="card overflow-hidden dark-col border-dark">
					<div class="card-header dark-col border-dark">
                        <h3 class="card-title text-center text-white dark-col text-ques head-indo mb-0">Data Corona Secara Global <img src="{{ asset('image/globe.gif') }}" class="img-indo"></h3>
                    <p class="text-white text-ques text-center" id="tanggal"></p>        
                    </div>
					<div class="row dark-col mt-4 m-3 border-dark">
                        <div class="col-md-4 border-dark">
                            <div class="card border-info box-dark mx-sm-1 p-3">
                                <div class="card border-info shadow text-info p-3 my-card box-dark" ><i class="fas fa-sad-cry fa-fw" aria-hidden="true"></i></div>
                                <div class="text-info text-center mt-3  text-ques"><h4>Positif</h4></div>
                                <div class="text-info text-center mt-2 text-monda"><h1>3,293</h1></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-success box-dark mx-sm-1 p-3">
                                <div class="card border-success shadow text-success p-3 my-card box-dark"><span class="fas fa-smile-beam" aria-hidden="true"></span></div>
                                <div class="text-success text-center mt-3 text-ques"><h4>Sembuh</h4></div>
                                <div class="text-success text-center mt-2 text-monda"><h1>252</h1></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-danger box-dark mx-sm-1 p-3">
                                <div class="card border-danger shadow text-danger p-3 my-card box-dark" ><span class="fas fa-heart-broken" aria-hidden="true"></span></div>
                                <div class="text-danger text-center mt-3 text-ques"><h4>Meninggal</h4></div>
                                <div class="text-danger text-center mt-2 text-monda"><h1>280</h1></div>
                            </div>
                        </div>

                    </div>
                    <div class="card-header dark-col">
						<h3 class="card-title text-ques text-white head-indo ">Data terakhir: </h3>
                    </div>
                    <a href="https://kawalcorona.com/api/" class="ml-2 text-white text-ques">kawalcorona.com</a>
                </div>
            </div>
		</div>
        <!-- Data Global-->





<script> 
    document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('chart-line', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Statistik Harian Corona di Indonesia'
    },
    subtitle: {
        text: 'WWW.INFOCORONA.MY.ID'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: true
        }
    },
    series: [{
        name: 'Tokyo',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'London',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
    });
});
</script>

@endsection


