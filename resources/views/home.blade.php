

@extends('adminlte::page')

    

@section('content')


<div class="container-fluid">
    
    <div class="row">
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Utilisateurs</span>
    <span class="info-box-number">{{$users}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-success"><i class="fas fa-flag"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Pays</span>
    <span class="info-box-number">{{$nbpays}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-warning"><i class="fas fa-city"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Villes</span>
    <span class="info-box-number">{{$nbville}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-danger"><i class="fas fa-building"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Communes</span>
    <span class="info-box-number">{{$nbcommune}}</span>
    </div>
    
    </div>
    
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-primary"><i class="fas fa-building"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Entreprises</span>
        <span class="info-box-number">{{$nbentreprise}}</span>
        </div>
        
        </div>
        
        </div> <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fas fa-building"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Secteurs d'activité</span>
            <span class="info-box-number">{{$nbsecteur}}</span>
            </div>
            
            </div>
            
            </div>
    
    </div>
    
    
    
    
<div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
    
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Utilisateurs</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body">
    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 774px;" class="chartjs-render-monitor" width="540" height="174"></canvas>
    </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js "></script>

    <script>
      const ctx = document.getElementById('myChart');
    
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre','Decembre'],
          datasets: [{
            label: 'Utilisateurs',
            data: [2, 19, 10, 60, 2, 3,34,10,39,1,10,40],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    
     
    
     
    </div>
    
    
    <div class="card card-danger">
    <div class="card-header">
    <h3 class="card-title">Entreprises</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 774px;" class="chartjs-render-monitor" width="540" height="174"></canvas>
    <script src=" https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js "></script>

    <script>
      const ctx = document.getElementById('myChart');
    
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    </div>
    {{-- <div>
        <canvas id="myChart"></canvas>
      </div> --}}
      
      
    </div>
    
    
    
    </div>
    
    <div class="col-md-6">
    
    <div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Villes</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body">
    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="vilChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 774px;" class="chartjs-render-monitor" width="540" height="174"></canvas>
    <script src=" https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js "></script>

    <script>
      const ctx = document.getElementById('vilChart');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Yaounde', 'Douala', 'Bamenda', 'Bafoussam', 'Ebolowa', 'Bertoua'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    </div>
    </div>
    
    </div>
    
    
    <div class="card card-success">
    <div class="card-header">
    <h3 class="card-title">Secteur d'activité</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body">
    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 774px;" class="chartjs-render-monitor" width="540" height="174"></canvas>
    <script src=" https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js "></script>

    <script>
      const ctx = document.getElementById('myChart');
    
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
    </div>
    </div>
    
    </div>
    
    
    </div>
    
    </div>
    
    </div>
    
    
    
    
    

@endsection

@section ('script')
{{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['names', 'email' ],
      @foreach ($user as $utilisateur) // On parcourt les catégories
      [ '{{ $category->name }}', {{ $utilisateur->$users->count() }}, {{ $utilisateur->email->count() }} ],
      @endforeach
    ]);

    var options = {
      chart: {
        title: 'Performance Catégories - Produits - Ventes',
        subtitle: 'Produits, Ventes pour chaque catégorie',
      },
      bars: 'vertical' // Direction "verticale" pour les bars
    };

    var chart = new google.charts.Bar(document.getElementById('donutChart'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  } --}}
   <!--Load the AJAX API-->
   

@endsection