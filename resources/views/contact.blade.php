@extends('layouts.app')
@extends('adminlte::master')

@section('content')

<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FAQ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12" id="accordion">
                <div class="card card-success card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                1. Qu'est ce que Company DB?
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                           Company Db est une application qui vous permet d'avoir des informations sur presque toutes les enttreprises Camerounaises et l'Afrique Centrale
                           Obtenez en un clic une classification des entreprises par secteur d'activité, par ville et par commune.
                        </div>
                    </div>
                </div>
                <div class="card card-danger card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                2. Que trouve t'on dans Company DB
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                           Dans cette application, vous aurez pour chaque entrprise, 
                           <ul>
                            <li> Son nom</li>
                            <li> Son sigle</li>
                            <li> Sa localisation</li>
                            <li> Les informations sur le responsable</li>
                            <li> Les Contacts de l'entreprise</li>
                            <li> les differentes pages des réseaux sociaux et le site internet de l'entreprise s'il en existe un</li>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-warning card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                3. Company DB est- il payant?
                            </h4>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            Cette application n'est pas payante,néamoins vous pouvez choisir entre un abonnement mensuel ou annuel,ce qui vous 
                            donne un accès complet aux informations de toutes les enreprises de tous les secteurs d'activités. 
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                4. Donec pede justo
                            </h4>
                        </div>
                    </a>
                    <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </div>
                    </div>
                </div>
                <div class="card card-info card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                5. In enim justo
                            </h4>
                        </div>
                    </a>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </div>
                    </div>
                </div>
                <div class="card card-warning card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                6. Integer tincidunt
                            </h4>
                        </div>
                    </a>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                        </div>
                    </div>
                </div>
                <div class="card card-danger card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                7. Aenean leo ligula
                            </h4>
                        </div>
                    </a>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                        </div>
                    </div>
                </div>
                <div class="card card-danger card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseEight" aria-expanded="true">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                8. Aliquam lorem ante
                            </h4>
                        </div>
                    </a>
                    <div id="collapseEight" class="collapse show" data-parent="#accordion" style="">
                        <div class="card-body">
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </div>
                    </div>
                </div>
                <div class="card card-danger card-outline">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                9.  Quisque rutrum
                            </h4>
                        </div>
                    </a>
                    <div id="collapseNine" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 text-center">
                <p class="lead">
                    <a href="contact-us.html">Contact us</a>,
                    if you found not the right anwser or you have a other question?<br>
                </p>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
        
@endsection