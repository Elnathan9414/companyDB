@extends('adminlte::page')


@section('content')
    


<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Ajouter un secteur</h3>
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
    <h3 class="card-title">Ville</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('secteurs.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
            <label>Secteur d'activité</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" ><i class="fas fa-table"></i></span>
            </div>
            <input type="text" class="form-control" name="libelleSecteur">
            </div>
            <div class="form-group">
                <label>Description : </label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" ><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" class="form-control" name="description">
                </div>
     </div>
    
     
    </div>
    
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Enregistrer" class="btn btn-secondary float-right">
        </div>
    </div>
    
</form>
@endsection