
@extends('adminlte::page')

@section('content')
<div class="col-12">
  <div class="card">
  <div class="card-header">
    
  <h3 class="card-title">Liste des entreprises</h3>
  <div class="card-tools">
    
  <div class="input-group input-group-sm" style="width: 150px;">
  <input type="Search" name="search" class="form-control float-right" placeholder="Search" value="{{ request()->input('Search') }}">
 
  <div class="input-group-append">
  <button type="submit" class="btn btn-default">
  <i class="fas fa-search"></i>
    {{ __('Search') }}
  </button>
  
  </div>
  </div>
  </div>
  </div>
  <div class="d-flex justify-content-end">
    <a href="{{route('entreprise.create')}}" class="btn btn-secondary"><span class="fa fa-plus-circle"></span> Ajouter</a>
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
      Titre du responsable
    </th>
    </tr>
    </thead>

    <tbody>
    
        <tr>
            @foreach ($entreprise as $ent )
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$ent->nomEntreprise}}</td>
            <td>{{$ent->sigle}}</td>
            <td>{{$ent->quartier}}</td>
            <td>{{$ent->nomResponsable}}</td>
            <td>{{$ent->tireResponsable}}</td>
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

    {{-- {{ $entreprise->appends(request()->query())->links() }} --}}
@endsection
    