
@extends('adminlte::page')

@section('content')
 <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Entreprises</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
    <li class="breadcrumb-item active">entreprise</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    <div class="col-md-12">
  
      <div class="card card-primary">
      <div class="card-header">
      <h3 class="card-title">Recherche par taille</h3>
      </div>
      
      
      <form method="POST" action="{{route('entreprise.villes')}}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Ville</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez la ville" name="ville_id">
      </div>
    
      <div class="card-footer">
      <button type="submit" class="btn btn-warning"> <span class="fas fa-search">  </span>Chercher</button>
      </div>
      </form>
      </div>
      </div>
      
    <section class="content">
    
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Entreprises</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
    <i class="fas fa-times"></i>
    </button>
    
    <div class="d-flex justify-content-end">
        <a href="{{route('entreprise.create')}}" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Ajouter</a>
     </div>
    </div>
    </div>
    <div class="card-body p-0">
    <table class="table table-striped projects">
    <thead>
    <tr>
    <th style="width: 1%">
    id
    </th>
    <th style="width: 20%">
    Nom de l'entreprise
    </th>
    <th style="width: 30%">
    Ville
    </th>
    <th>
    Quartier
    </th>
    <th style="width: 8%" class="text-center">
    Nom du responsable
    </th>
    <th style="width: 20%">
    </th>
    </tr>
    </thead>

    <tbody>
    
        <tr>
            @foreach ($entreprise as $ent )
            <td>{{$ent->id}}</td>
            <td>{{$ent->nomEntreprise}}</td>
            <td>{{$ent->sigle}}</td>
            <td>{{$ent->quartier}}</td>
            <td>{{$ent->nomResponsable}}</td>
            <td>
          
              <a href="{{ route('entreprise.show', $ent->id) }}" class="btn btn-success"><span class="fas fa-eye"></span> </a>
            <a href="{{route('entreprise.edit', $ent->id)}}" class="btn btn-warning"><span class="fas fa-edit"></span> </a>
            </td>
            <td>
            <form action="{{ route('entreprise.destroy', $ent->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><span class="fa fa-times-circle"></span>  </button>
        
          </form>
          </td>
      </div>
      </tr>
      @endforeach
    </section> 

    
@endsection
    