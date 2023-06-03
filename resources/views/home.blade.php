@extends('adminlte::page')

    

@section('content')


<div class="container-fluid">
    
    <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Utilisateurs</span>
    <span class="info-box-number">{{$users}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-success"><i class="fas fa-flag"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Pays</span>
    <span class="info-box-number">{{$nbpays}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-warning"><i class="fas fa-city"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Villes</span>
    <span class="info-box-number">{{}}</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-danger"><i class="fas fa-building"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">Entreprises</span>
    <span class="info-box-number">93,139</span>
    </div>
    
    </div>
    
    </div>
    
    </div>
    
    
    
    
    
    
    
    

@endsection
