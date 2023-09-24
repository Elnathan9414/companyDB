@extends('adminlte::page')


@section('content')


  <div class="container-fluid">
  <div class="row">
  
  <div class="col-md-12">
  
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Recherche</h3>
  </div>
  
  
  <form>
  <div class="card-body">
  <div class="form-group">
  <label for="exampleInputEmail1">Ville</label>
  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez la ville">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Commune</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Commune">
  </div>
 <div class="form-group">
  <label for="exampleInputPassword1">Secteur</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Secteur d'activité">
  </div>
  
  <div class="card-footer">
  <button type="submit" class="btn btn-warning"> <span class="fas fa-search">  </span>Chercher</button>
  </div>
  </form>
  </div>
  </div>
  
  
  
  
 
  
  
@endsection