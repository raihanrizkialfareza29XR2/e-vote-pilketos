@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Kandidat</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kandidat->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Voters</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $voters->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Suara Masuk
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $vote->count() }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Belum Voting</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $voteb->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-meh fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Angkatan 28</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $angkatan28->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-astronaut fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Angkatan 29</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $angkatan29->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-astronaut fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Angkatan 30</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $angkatan30->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-astronaut fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Guru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Live Data</h6>
    </div>
    @foreach ($kandidat as $row)
    <div class="card-body">
        <h4 class="small font-weight-bold">{{ $row->nama }} <span
                class="float-right">{{ $row->jumlahsuara }}</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $row->jumlahsuara }}%"
                aria-valuenow="{{ $row->jumlahsuara }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    @endforeach
    
    
    
    <div class="mb-4" id="container"></div>
    <br>
    <div class="mb-4" id="containeri"></div>
    <br>
    <div class="mb-4" id="containera"></div>
    <br>
    <div class="" id="real"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var users =  <?php echo json_encode([$angkatan29b]) ?>;
   
   Highcharts.chart('container', {
       title: {
           text: 'Laporan'
       },
       subtitle: {
           text: 'Berikut Laporan Voting Data Pemilih'
       },
        xAxis: {
           categories: ['Angkatan 28', 'Angkatan 29', 'Angkatan 30', 'Guru', 'OSIS', 'Organ & Sub Organ']
       },
       yAxis: {
           title: {
               text: 'Laporan Voting Data Pemilih'
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
           type: 'bar',
           name: 'Sudah Voting',
           data: [<?= $angkatan28s ?>, <?= $angkatan29s ?>,<?= $angkatan30s ?>, <?= $gurudah ?>, <?= $osisudah ?>, <?= $suborudah ?>]
       }, {
           type: 'bar',
           name: 'Belum Voting',
           data: [<?= $angkatan28b ?>, <?= $angkatan29b ?>,<?= $angkatan30b ?>, <?= $gurubelum ?>, <?= $osisbelum ?>, <?= $suborbelum ?> ]
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
        var users =  <?php echo json_encode([$angkatan29b]) ?>;
   
        Highcharts.chart('containeri', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Jumlah Persentase Pemilih By Angkatan'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
//   accessibility: {
//     point: {
//       valueSuffix: 
//     }
//   },
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
    data: [{
    //   name: 'Angkatan',
    //   y: <?= $angkatan28s ?>,
    //   sliced: true,
    //   selected: true
    // }, {
    //   name: 'Angkatan1',
    //   y: <?= $angkatan29s ?>
    // }, {
    //   name: 'Angkatan2 ',
    //   y: <?= $angkatan30s ?>
    // }, 
    // {
      name: 'Angkatan 28',
      y: <?= $hitung28 ?>,
      selected: true
    }, {
      name: 'Angkatan 29',
      y: <?= $hitung29 ?>
    }, {
      name: 'Angkatan 30',
      y: <?= $hitung30 ?>
    }]
  }]
});
    </script>
<script>
        var users =  <?php echo json_encode([$angkatan29b]) ?>;
   
    var myChart = Highcharts.chart('containera', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Jumlah Persentase Suara Kandidat'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
//   accessibility: {
//     point: {
//       valueSuffix: 
//     }
//   },
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
    data: [
    @foreach ($kandidat as $row)
    {
      name: '<?= $row->nama ?>',
      y: <?= $row->jumlahsuara ?>,
      selected: true
    },
    @endforeach
]
  }]
});
    </script>
</div>
@endsection
