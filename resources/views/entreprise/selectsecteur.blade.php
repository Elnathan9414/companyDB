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
        <label>Secteur d'activité:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <select class="form-control" id="Selectionner le pays" name="secteur_id" required>
            <option value=""> </option>
            {{-- @foreach ($secteur as $sec )
                <option aria-placeholder="pays " value="{{$sec->id}}">{{$sec->libelleSecteur}}</option>
            @endforeach --}}
          </select>
        </div>
            
        </div>

  <div class="card-footer">
  <button type="submit" class="btn btn-warning"> <span class="fas fa-search">  </span>Chercher</button>
  </div>
  </form>
  </div>
  </div>
  
  
  <div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"></span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
    <thead>
      <tr>
        <th rowspan="1" colspan="1">Id</th>
        <th rowspan="1" colspan="1">Entreprise</th>
        <th rowspan="1" colspan="1">Signle</th>
        <th rowspan="1" colspan="1">Ville</th>
        <th rowspan="1" colspan="1">Secteur d'activité</th>
        <th rowspan="1" colspan="1">Nom du responsable</th></tr>
        <th rowspan="1" colspan="1">Actions</th>
    </thead>

    <tbody>
    {{-- contenu du tableau --}}
    <tr>
      @foreach ($entreprise as $ent )
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$ent->nomEntreprise}}</td>
      <td>{{$ent->sigle}}</td>
      <td>{{$ent->secteur->libelleSecteur}}</td>
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
    </tbody>
    <tfoot>

    <tr><th rowspan="1" colspan="1">Entreprise</th>
      <th rowspan="1" colspan="1">Signle</th>
      <th rowspan="1" colspan="1">Ville</th>
      <th rowspan="1" colspan="1">Commune</th>
      <th rowspan="1" colspan="1">Nom du responsable</th></tr>
    </tfoot>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
  
 
    {{ $entreprise->onEachSide(5)->links() }} 
  
@endsection