@extends('adminlte::page')


@section('content')
    


<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Modification d'un pays</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    
    
    
    <div class="row">
    <div class="col-md-12">
    <div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Pays</h3>
    </div>
    <div class="card-body">
    
    <div class="form-group">
    <label>libelé:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-city"></i></span>
    </div>
    <input type="text" class="form-control">
    </div>
    
     </div>
    
     
    </div>
    
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
        </div>
    
    

@endsection