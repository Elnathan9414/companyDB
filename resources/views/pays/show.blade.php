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
  <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
  <li class="breadcrumb-item active">Entreprises</li>
  </ol>
  </div>
  </div>
  </div>
  </section>
  
  <section class="content">
  <div class="container-fluid">
  
    
  <div class="row">
  <div class="col-md-12">
  
  <div class="timeline">
  
  <div class="time-label">
    <h2><span class="bg-blue">{{ $entreprise->nomEntreprise }}</span></h2> 
  </div>
  
  
  <div>
  <i class="fas fa-home bg-blue"></i>
  <div class="timeline-item">
  <span class="time"><i class="fas fa-clock"></i> {{ $entreprise->created_at }}</span>
  <h3 class="timeline-header"><a href="#">Raison sociale</a> </h3>
  <div class="timeline-body">
    <strong><span class="info-box-text text-center text-muted">Nom de l'entreprise : {{ $entreprise->nomEntreprise }}</span></strong>
    <br>
    <br>
    <strong><span class="info-box-text text-center text-muted">Sigle : {{ $entreprise->sigle }}</span></strong>
  
  </div>

  </div>
  </div>
  
  
  <div>
  <i class="fas fa-map bg-green"></i>
  <div class="timeline-item">
    @foreach ($entreprise as $ent)
        
    <h3 class="timeline-header no-border"><a href="#">Localisation</a> </h3>
    <br>
    <strong><span class="info-box-text text-center text-muted">Pays: {{$ent->pays->libelePays}}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Ville : {{ $ent->ville->libeleVille}}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Arrondissement : {{ $ent->commune->libelleCommune }}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Quartier : {{ $entreprise->quartier }}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Lieu dit : {{ $entreprise->lieuDit }}</span></strong>
  </div>
  </div>
  @endforeach
  
  <div>
  <i class="fas fa-user bg-yellow"></i>
  <div class="timeline-item">
  
  <h3 class="timeline-header"><a href="#">responsable</a> </h3>
  <div class="timeline-body">
    <strong><span class="info-box-text text-center text-muted">Nom du responsable: {{ $entreprise->nomResponsable }}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Titre : {{ $entreprise->tireResponsable }}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Numéro de téléphone : {{ $entreprise->contactResponsable }}</span></strong>
    <br>
    <strong><span class="info-box-text text-center text-muted">Adresse Email : {{ $entreprise->emailresponsable }}</span></strong>
  
  </div>
  </div>
  </div>
  
  
  <div class="time-label">
  <span class="bg-green">Contacts</span>
  </div>
  
  
  <div>
  <i class="fa fa-phone bg-purple"></i>
  <div class="timeline-item">
  
  <h3 class="timeline-header"><a href="#">Numeros de telephone</a> </h3>
  <div class="timeline-body">
    <strong><span class="info-box-text text-center text-muted">Numéro de téléphone : {{ $entreprise->telephoneEntreprise }}</span></strong>
    <br>
    <a href="{{ $entreprise->siteWeb }}" target="_blank" rel="noopener noreferrer">
      <strong><span class="info-box-text text-center text-muted">site web : {{ $entreprise->siteWeb }}</span></strong>
    </a>
  </div>
  </div>
  </div>
  
  
  <div>
  <i class="fas fa-globe bg-maroon"></i>
  <div class="timeline-item">
 
  <h3 class="timeline-header"><a href="#">Reseaux sociaux</a> Suivez l'entreprise sur les réseaux sociaux</h3>
  <div class="timeline-body">
  
    <!-- Facebook -->
<a target="_blank" style="color: #3b5998;" href="{{ $entreprise->facebook }} " role="button"
><i class="fab fa-facebook-f fa-lg"></i
></a>


<!-- linkedin -->
<a target="_blank" style="color: #041052;" href="{{ $entreprise->linkedin }} "role="button"
><i class="fab fa-linkedin fa-lg"></i
></a>

<!-- Instagram -->
<a target="_blank" style="color: #ac2bac;" href="{{ $entreprise->instagram }} " role="button"
><i class="fab fa-instagram fa-lg"></i
></a>
  
  
  </div>
  </div>
  <div class="timeline-footer">
    <div>
      <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
          <i class="fas fa-print"></i> Imprimer
        </button>
    <a href="{{route('entreprise.index')}}" class="btn btn-danger" ><span class="cil-contrast btn-icon mr-4"></span> Retour</a>
  </div>
  </div>
  </div>
  </div>
  
  
  </section>
  
  
  
  
  

@endsection