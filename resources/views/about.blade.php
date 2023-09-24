@extends('layouts.app')

@section('content')

<section class="content">

    <div class="card">
    <div class="card-body row">
    <div class="col-5 text-center d-flex align-items-center justify-content-center">
    <div class="">
    <h2>Dev Solution<strong>Consulting</strong></h2>
    <p class="lead mb-5">Douala, Cameroun<br>
    Teléphonee: +237 691625598 / 675610892
    
    </p>
    <p class="lead mb-5">Adresse email<br>
        mbondoosue@gmail.com
        </p>
    </div>
    </div>
    <div class="col-7">
    <div class="form-group">
    <label for="inputName">Nom</label>
    <input type="text" id="inputName" class="form-control">
    </div>
    <div class="form-group">
    <label for="inputEmail">E-Mail</label>
    <input type="email" id="inputEmail" class="form-control">
    </div>
    <div class="form-group">
    <label for="inputSubject">Sujet</label>
    <input type="text" id="inputSubject" class="form-control">
    </div>
    <div class="form-group">
    <label for="inputMessage">Message</label>
    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Envoyer">
    </div>
    </div>
    </div>
    </div>
        
@endsection