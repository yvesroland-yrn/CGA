@extends('base')

@section('title', 'A Propos')

@section(section: 'content')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 100px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">A Propos</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">A Propos</p>
         </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                    <div class="w-100" style="aspect-ratio: 9/9; overflow: hidden; border-radius: 8px;">
                        <img src="img/about-10.png" alt="About Image" class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">A Propos de Nous</h6>
                        <h1 class="display-4"> CGA 1ère EDITION </h1>
                    </div>
                    <p>Connaître les CGA et leur importance au grand public ivoirien ;
                        Créer un lien relationnel direct entre les CGA de Côte d'Ivoire, les PME/PMI, les Jeunes Entrepreneurs, les Jeunes en quête d'emploi, et toute personne désireuse de se former ou s'informer sur l'entreprenariat ;
                        Inciter le secteur informel à se structurer pour bénéficier des avantages offerts par la DGI à travers les CGA ;
                        Former la population ivoirienne, en particulier la jeunesse, sur les clés du succès des jeunes entrepreneurs, notamment par des retours d'expériences ; Sensibiliser la jeunesse ivoirienne à la pratique fiscale ;
                        Informer la jeunesse sur l'importance de parler l'anglais ;
                        Offrir des opportunités concrètes d'emplois aux jeunes à travers les entreprises partenaires.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <!-- Image d'abord sur grand écran et petit écran -->
                <div class="col-12 col-lg-5 mb-4 mb-lg-0 order-1 order-lg-0">
                    <div class="w-100" style="aspect-ratio: 4/4; overflow: hidden; border-radius: 8px;">
                        <img src="img/feature.PNG" alt="Feature image" class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
    
                <!-- Texte ensuite -->
                <div class="col-lg-7 my-5 pt-5 pb-lg-5 order-0 order-lg-1">
                    <div class="section-title position-relative mb-4">
                        <h1 class="display-4">OBJECTIFS CGA</h1>
                    </div>
                    <p class="mb-4 pb-2">
                        Connaître les CGA et leur importance au grand public ivoirien ;<br>
                        Créer un lien relationnel direct entre les CGA de Côte d'Ivoire, les PME/PMI, les Jeunes Entrepreneurs, les Jeunes en quête d'emploi, et toute personne désireuse de se former ou s'informer sur l'entreprenariat ;<br>
                        Inciter le secteur informel à se structurer pour bénéficier des avantages offerts par la DGI à travers les CGA ;<br>
                        Former la population ivoirienne, en particulier la jeunesse, sur les clés du succès des jeunes entrepreneurs, notamment par des retours d'expériences ;<br>
                        Sensibiliser la jeunesse ivoirienne à la pratique fiscale ;<br>
                        Informer la jeunesse sur l'importance de parler l'anglais ;<br>
                        Offrir des opportunités concrètes d'emplois aux jeunes à travers les entreprises partenaires.
                    </p>
                    <!-- Panels -->
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>PANEL 1</h4>
                            <p>Analyse des données, intelligence artificielle, et comptabilité des entreprises, en lien avec la Finance.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>PANEL 2</h4>
                            <p>Fiscalité de création d'entreprise expliquée simplement au grand public.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>PANEL 3</h4>
                            <p class="m-0">Importance de la pratique régulière de l'anglais professionnel international.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- About End -->

@endsection
