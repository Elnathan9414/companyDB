
@extends('adminlte::page')

@section('content')
 
<div class="col-12">
  <div class="card">
  <div class="card-header">
    
  <h3 class="card-title">Liste des pays</h3>
  <div class="card-tools">
    
  <div class="input-group input-group-sm" style="width: 150px;">
  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  <div class="input-group-append">
  <button type="submit" class="btn btn-default">
  <i class="fas fa-search"></i>
  </button>
  
  </div>
  </div>
  </div>
  </div>
  <div class="d-flex justify-content-end">
    <a href="{{route('pays.create')}}" class="btn btn-secondary"><span class="fa fa-plus-circle"></span> Ajouter</a>
 </div>
  <div style="align-content: center" class="card-body table-responsive p-0" class="col-md-6">
   <table class="table table-hover text-nowrap">
  <thead>
  <tr>
  <th>ID</th>
  <th>libele du pays</th>
  <th>Actions</th>
  
  </tr>
  </thead>
  <tr>
    @foreach ($pays as $pay )
    <th scope="row">{{$loop->index +1}}</th>
    <td>{{$pay->libelePays}}</td>
    
    <td>
  
      <a href="{{ route('pays.show', $pay->id) }}" class="btn btn-success"><span class="fas fa-eye"></span> </a>
    <a href="{{route('pays.edit', $pay->id)}}" class="btn btn-warning"><span class="fas fa-edit"></span> </a>
    </td>
    <td>
    <form action="{{ route('pays.destroy', $pay->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger"><span class="fa fa-times-circle"></span>  </button>

  </form>
  </td>
</div>
</tr>
@endforeach
  </tbody>
  </table>
  </div>
  
  </div>
  
  </div>
  
    
@endsection
    