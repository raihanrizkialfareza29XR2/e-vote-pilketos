@extends('layouts.userc')

@section('title', 'Realtime Voting')

@section('content')
    <div class="container mb-5">
        <div class="" style="margin-bottom: 200px; margin-top: 100px" id="ini"></div>
    </div>
    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-md-6">
                <div class="kandidat">
                    <h2 class="kandidats text-center" id="ijlal"></h2>
                    <p class="text-center">Ijlal Windhi Saputra</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kandidat-2">
                    <h2 class="kandidats text-center" id="daiva"></h2>
                    <p class="text-center">Muhammad Daiva Arga Azura</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 card-1">
                <div class="data-card">
                    <h3 id="ang28">%</h3>
                    <h4>Angkatan 28</h4>
                    <p>Persentase kandidat berdasarkan angkatan</p>
                    <span class="link-text">
                      Realtime Count
                      {{-- <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD"/>
                     </svg> --}}
                    </span>
                </div>
            </div>
            <div class="col-md-4 card-2">
                <div class="data-card">
                    <h3 id="ang29">%</h3>
                    <h4>Angkatan 29</h4>
                    <p>Persentase kandidat berdasarkan angkatan</p>
                    <span class="link-text">
                        Realtime Count
                      {{-- <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD"/>
                     </svg> --}}
                    </span>
                </div>
            </div>
            <div class="col-md-4 card-3">
                <div class="data-card">
                    <h3 id="ang30">%</h3>
                    <h4>Angkatan 30</h4>
                    <p>Persentase kandidat berdasarkan angkatan</p>
                    <span class="link-text">
                        Realtime Count
                      {{-- <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD"/>
                     </svg> --}}
                    </span>
                </div>
            </div>
        </div>
    </div>
     <script src="https://code.highcharts.com/highcharts.js"></script>
     <script>
        var users =  <?php echo json_encode([$kandidat]) ?>;
   
   Highcharts.chart('ini', {
       title: {
           text: 'Laporan'
       },
       chart: {
           type: 'line',
           animation: Highcharts.svg,
           events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                }, 1000);
            }
        }
       },
       subtitle: {
           text: 'Chart Hitung Cepat Kandidat'
       },
        xAxis: {
           categories: [
                @foreach ($kandidat as $row)
                    '{{ $row->nama }}',
                @endforeach
           ]
       },
       yAxis: {
           title: {
               text: 'Chart Hitung Cepat Kandidat'
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
           name: 'Jumlah Suara',
           data: [
            @foreach ($kandidat as $row)
            {
                name: '<?= $row->nama ?>',
                color: 'red',
                y: <?= $row->jumlahsuara ?>,
                selected: true
            },
            @endforeach
]
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


<script>
        function startLiveUpdates() {
            const textViewCount = document.getElementById('daiva');
            const textView = document.getElementById('ijlal');

            setInterval(function () {
                fetch('{{ route('kandidat') }}').then(function (response) {
                    return response.json();
                }).then(function (data) {
                    // console.log(data);
                    textViewCount.textContent = data.daiva[0].jumlahsuara;
                    textView.textContent = data.ijlal[0].jumlahsuara;
                }).catch(function (error) {
                    console.log(error);
                });
            }, 500);
        }

        document.addEventListener('DOMContentLoaded', function () {
            startLiveUpdates();
        });
    </script>
    <script>
        function startUpdates() {
            const ang28 = document.getElementById('ang28');
            const ang29 = document.getElementById('ang29');
            const ang30 = document.getElementById('ang30');

            setInterval(function () {
                fetch('{{ route('kandidat') }}').then(function (response) {
                    return response.json();
                }).then(function (data) {
                    // console.log(data);
                    ang28.textContent = data.hit28 + '%';
                    ang29.textContent = data.hit29 + '%';
                    ang30.textContent = data.hit30 + '%';
                    console.log(data.hitung29)
                }).catch(function (error) {
                    console.log(error);
                });
            }, 500);
        }

        document.addEventListener('DOMContentLoaded', function () {
            startUpdates();
        });
    </script>


@endsection