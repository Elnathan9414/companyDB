@extends('adminlte::page')


@section('content')
    
<form method="POST" action="{{route('entreprise.store')}}" enctype="multipart/form-data">
    @csrf

<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Création d'une entreprise</h3>
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
    <div class="col-md-6">
    <div class="card card-danger">
    <div class="card-header">
    <h3 class="card-title">entreprise</h3>
    </div>
    <div class="card-body">
    
    <div class="form-group">
    <label>Raison sociale (nom de l'entreprise):</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-building"></i></span>
    </div>
    <input type="text" class="form-control"  name="nomEntreprise">
    </div>
    
     </div>
    
    
    <div class="form-group">
    <label>Sigle:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
    </div>
    <input type="text" class="form-control" name="sigle">
    </div>
    
    </div>
    
    <div class="form-group">
        <label>Secteur d'activité:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <select class="form-control" id="Selectionner le pays" name="secteur_id" required>
            <option value=""> </option>
            @foreach ($secteur as $sec )
                <option aria-placeholder="pays " value="{{$sec->id}}">{{$sec->libelleSecteur}}</option>
            @endforeach
          </select>
        </div>
            
        </div>
    
    
    
    <div class="form-group">
    <label>Pays</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-map"></i></span>
    </div>
    <select class="form-control" id="Selectionner le pays" name="pays_id" required>
        <option value=""> </option>
        @foreach ($pays as $pay )
            <option aria-placeholder="Secteur d'activité " value="{{$pay->id}}">{{$pay->libelePays}}</option>
        @endforeach
      </select>
    </div>
    
    </div>
    
    
    <div class="form-group">
    <label>Ville</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-city"></i></span>
    </div>
    <select class="form-control" id="Selectionner le pays" name="ville_id" required>
        <option value=""> </option>
        @foreach ($ville as $vil )
            <option aria-placeholder="Ville " value="{{$vil->id}}">{{$vil->libeleVille}}</option>
        @endforeach
      </select>
    </div>
    
    </div>
    
    <div class="form-group">
        <label>Commune</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-city"></i></span>
        </div>
        <select class="form-control" id="Selectionner le pays" name="commune_id" required>
            <option value=""> </option>
            @foreach ($commune as $com )
                <option aria-placeholder="Commune " value="{{$com->id}}">{{$com->libelleCommune}}</option>
            @endforeach
          </select>
        </div>
        
        </div>
        <div class="form-group">
            <label>Quartier</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-city"></i></span>
            </div>
            <input type="text" class="form-control" name="quartier" >
            </div>
            
            </div>
            <div class="form-group">
                <label>Lieu dit</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input type="text" class="form-control" name="lieuDit">
                </div>
                
                </div>
        <div class="form-group">
            <label>Adresse</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-city"></i></span>
            </div>
            <input type="text" class="form-control" name="adresse">
            </div>
            
            </div>
            <div class="form-group">
                <label>Taille de l'entreprise :</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                   <select class="form-control" id="Selectionner le pays" name="tailleEntreprise" required>
                    <option value=""> </option>
                    <option value="PME"> PME</option>
                    <option value="STARTUP"> STARTUP</option>
                    <option value="Grande Entreprie"> Grande Entreprie</option>
                    <option value="Entreprise de Distribution"> Entreprise de Distribution</option>
                    <option value="Multinationale">Multinationale </option>

                  </select>
                </div>
                
                </div>
    </div>
    
    </div>
    
   
    </div>
    
    <div class="col-md-6">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Contacts</h3>
    </div>
    <div class="card-body">
    
    <div class="form-group">
    <label>Nom du responsable:</label>
    <div class="input-group text" id="reservationdate" data-target-input="nearest">
    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="nomResponsable">
    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
    </div>
    </div>
    </div>
    
    <div class="form-group">
    <label>Titre:</label>
    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="tireResponsable">
    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
    </div>
    </div>
    </div>
    
    
    <div class="form-group">
    <label>Adresse email du responsable:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text">
    <i class="fas fa-envelope"></i>
    </span>
    </div>
    <input type="email" class="form-control float-right" id="reservation" name="emailresponsable"> 
    </div>
    
    </div>
    
    <div class="form-group">
        <label>Adresse email de l'entreprise:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">
        <i class="fas fa-envelope"></i>
        </span>
        </div>
        <input type="email" class="form-control float-right" id="reservation" name="emailEntreprise"> 
        </div>
        
        </div>
    <div class="form-group">
    <label>Numéro de téléphone du responsable:</label>
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-phone"></i></span>
    </div>
    <input type="tel" class="form-control float-right" id="reservationtime" name="contactResponsable">
    </div>
    
    </div>
    <div class="form-group">
        <label>Numéro de téléphone de l'entreprise:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="tel" class="form-control float-right" id="reservationtime" name="telephoneEntreprise">
        </div>
        
        </div>
    
    <div class="form-group">
        <label>Facebook:</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">
        <i class="fab fa-facebook-f fa-lg"></i>
        </span>
        </div>
        <input type="url" class="form-control float-right" id="reservation" name="facebook">
        </div>
        
        </div>
    
        <div class="form-group">
            <label>Instagram:</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">
            <i class="fab fa-instagram fa-lg"></i>
            </span>
            </div>
            <input type="url" class="form-control float-right" id="reservation" name="instagram">
            </div>
            
            </div>
        
            <div class="form-group">
                <label>LinkedIn:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="fab fa-linkedin fa-lg"></i>
                </span>
                </div>
                <input type="url" class="form-control float-right" id="reservation" name="linkedin">
                </div>
                
                </div>
                <div class="form-group">
                    <label>Site web:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="fas fa-globe fa-lg"></i>
                    </span>
                    </div>
                    <input type="url" class="form-control float-right" id="reservation" name="siteWeb">
                    </div>
                    
                    </div>
    </div>
                
    </div>
    
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Enregistrer" class="btn btn-primary float-right">
        </div>
        </div>
    
    
     </form
@endsection