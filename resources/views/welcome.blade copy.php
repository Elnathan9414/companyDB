@extends('layouts.app')

@section('content')

<section class="content">

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Company DB</h3>
                    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  Contenu de présentation et descriptionn du principe de l'application
                  {{-- contenu de la page d'acceuil --}}
                  <div class="card card-success">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                          <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                              <h5 class="card-title text-primary text-white">Card Title</h5>
                              <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                              <a href="#" class="text-white">Last update 2 mins ago</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                          <div class="card mb-2">
                            <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                            <div class="card-img-overlay d-flex flex-column justify-content-center">
                              <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                              <p class="card-text pb-2 pt-1 text-white">
                                Lorem ipsum dolor sit amet, <br>
                                consectetur adipisicing elit <br>
                                sed do eiusmod tempor.
                              </p>
                              <a href="#" class="text-white">Last update 15 hours ago</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                          <div class="card mb-2">
                            <img class="card-img-top" src="/dist/img/photo1.png" alt="Dist Photo 3">
                           
                            <div class="card-img-overlay">
                              <h5 class="card-title text-primary">Card Title</h5>
                              <p class="card-text pb-1 pt-1 text-white">
                                Lorem ipsum dolor <br>
                                sit amet, consectetur <br>
                                adipisicing elit sed <br>
                                do eiusmod tempor. </p>
                              <a href="#" class="text-primary">Last update 3 days ago</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{--fin du contenu de  la page d'acceuil --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  &copy;copyright dev solution consulting 2023 <a href="http://www.devsolution.com"> devsolution.com</a>
                  <a href="mailto:info@devsolution.com">email</a> <a href="tel:+237 691625587"> Téléphone</a>
                </div>
                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

@endsection
