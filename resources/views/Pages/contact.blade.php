@extends('base')

@section('title', 'Contact')

@section('content')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 100px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Contact</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Notre Localisation</h4>
                                <p class="m-0">Abidjan , Plateau IMMEUBLE CAISTAB</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Nous Contactez</h4>
                                <p class="m-0">07 07 47 03 21 / 07 49 59 35 13
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email</h4>
                                <p class="m-0"> mabanamalan@gmail.com <br> yveskangra@gmail.com </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h1 class="display-4">Envoyez Un Message Aux Organisateurs</h1>
                    </div>


                  <!-- Affichage d’un message de succès si le mail a été envoyé -->
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Formulaire d'envoi de message -->
                        <form action="{{ route('contact.send') }}" method="POST">
                        @csrf <!-- Protection CSRF obligatoire dans les formulaires Laravel -->

                        <div class="row">
                            <!-- Champ nom -->
                            <div class="col-6 form-group">
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                            </div>
                            
                            <!-- Champ email -->
                            <div class="col-6 form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <!-- Champ numéro -->
                        <div class="form-group">
                            <input type="text" name="numero" class="form-control" placeholder="Numéro" required>
                        </div>

                        <!-- Champ message -->
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                        </div>

                        <!-- Bouton d'envoi -->
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Soumettre</button>
                        </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
