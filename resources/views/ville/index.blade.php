
@extends('adminlte::page')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Villes</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
    <li class="breadcrumb-item active">Villes</li>
    </ol>
    </div>
    </div>
    </div>
    </section>
    
    <section class="content">
    
    <div class="card" >
    <div class="card-header">
    
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
    <i class="fas fa-times"></i>
    </button>
    <div class="d-flex justify-content-end">
        <a href="{{route('villes.create')}}" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Ajouter</a>
     </div>
    </div>
    </div>
    <div class="card-body">
 
    
       <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Recherche</h5>
      <form class="card-body" action="{{route('search')}}"  method="GET">
          {{-- {{ csrf_field() }} --}}
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher..." name="search">
              <span class="input-group-btn">
          <button class="btn btn-info" type="submit">Chercher</button>
        </span>
          </div>
      </form>
  </div>
    </div>
  
    {{-- <div class="card-footer">
    {{-- <button type="submit" class="btn btn-warning"> <span class="fas fa-search">  </span>Chercher
      {{ __('Search') }}
    </button> --}}
    {{-- <button type='submit' class=' btn btn-primary'><span class="fas fa-search">  </span>
       {{ __('Search') }}
     </button>
    </div> --}} 
  
    <div class="card-body p-0">
    <table class="table table-striped projects">
    <thead>
    <tr>
    <th style="width: 1%">
    id
    </th>
    <th style="width: 20%">
    Pays
    </th>
    <th style="width: 30%">
    Ville
    </th>
    <th style="width: 1%">
      Actions
      </th>
    
    </thead>

    <tbody>
    
        <tr>
            @foreach ($ville as $vil )
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$vil->pays->libelePays}}</td>
            <td>{{$vil->libeleVille}}</td>
            
            
            <td>
            <a href="{{route('villes.edit', $vil->id)}}" class="btn btn-warning"><span class="fas fa-edit"></span> </a>
            </td>
            <td>
            <form action="{{ route('villes.destroy', $vil->id) }}" method="post">
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
    