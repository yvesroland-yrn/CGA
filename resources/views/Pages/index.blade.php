@extends('base')

@section('title', 'Accueil')

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 10px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white display-1 mb-5"> </h1>
            <div class="mx-auto mb-5" style="width: 100%;">
                <div class="input-group">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                    <div class="w-100" style="aspect-ratio: 7/10; overflow: hidden; border-radius: 8px;">
                        <img src="img/about.jpg" alt="À propos" class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h1 class="display-4">EN  SAVOIR  PLUS  SUR  LES  CGA</h1>
                    </div>
                    <h5 class="display-4">Contexte et Justification : </h5>
                    <p>En réponse au constat d'insuffisante appréhension du secteur productif au regard de l'importance et
                        du développement des activités économiques du secteur informel, les autorités de l'Union Economique
                        et Monétaire Ouest Africaine (UEMOA) ont décidé, au travers de la Directive N° 04/97/CM/UEMOA du 28
                        novembre 1997, d'adopter un régime juridique des CGA dans les Etats membres de l'Union.
                        En application de cette Directive, la Côte d'Ivoire, par Décret N O 2002- 146 du 11 mars 2002
                        abrogeant le Décret N O 99-51 du 20 janvier 1999, a procédé à l'institution des CGA dans l'espace
                        économique ivoirien. Objectifs :
                        Les objectifs poursuivis par le gouvernement ivoirien à travers l'institution des CGA sont aussi
                        bien d'ordre économique que fiscal.
                    </p>
                    <br>
                    <h5 class="display">Objectif: </h5>
                    <p>Les objectifs poursuivis par le gouvernement ivoirien à travers l'institution des CGA sont aussi bien
                        d'ordre économique que fiscal.
                    </p>
                    <br>
                    <h6 class="display">Objectif Economique: </h6>
                    <p>Renforcer la modernisation de l'économie en tirant de l'informel les petits contribuables et les
                        PME/PMI exerçant dans ce secteur pour en faire des opérateurs économiques de type moderne ;
                        Aider à la formalisation de ces entreprises en leur apportant une assistance, notamment lors des
                        différentes formalités d'enregistrement au Registre du Commerce et du Crédit Mobilier, au fichier de
                        l'Administration Fiscale et au registre de la Caisse Nationale de Prévoyance Sociale ;
                        Constituer de véritables pôles d'informations économiques et financières et d'appui technique dans
                        les domaines de la comptabilité, de la gestion et de la fiscalité.
                    </p>
                    <br>
                    <h6 class="display">Objectif Fiscal: </h6>
                    <p> Favoriser :
                        -La maitrise du tissu fiscal,
                        -L'élargissement de l'assiette,
                        -Et l'amélioration du recouvrement de l'impôt.
                        Rendre plus efficace la lutte contre la fraude fiscale qui gangrène le secteur informel ;  Mieux
                        appréhender la faculté contributive des opérateurs économiques concernés.
                    </p>


                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
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
    
    <!-- Feature Start -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="col-lg-6 mx-auto">
            <div class="section-title text-center position-relative mb-5 px-3">
                <h6 class="d-inline-block position-relative text-uppercase pb-2"
                    style="color: #888; font-family: 'Lato', sans-serif; font-weight: 400; font-size: 16px;">
                    Nos Standes
                </h6>
                <h1
                    style="
                    font-family: 'Playfair Display', serif;
                    font-size: 2.5rem;
                    font-weight: 700;
                    line-height: 1.4;
                    color: #192024;">
                    Nos Packs Standes pour Nos Partenaires<br>
                    <span style="font-size: 1.8rem; color: #E2570F;">Contactez-nous</span><br>
                    <span style="font-size: 1.2rem; font-family: 'Lato', sans-serif; color: #555;">
                        07 07 47 03 21 / 07 49 59 35 13
                    </span>
                </h1>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-5.PNG" alt="">
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-1.PNG" alt="">
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-2.PNG" alt="">
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-3.PNG" alt="">
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-4.PNG" alt="">
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-5.PNG" alt="">
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h1 class="display-4">MOTS DU PCO</h1>
            </div>

            <!-- Conteneur aligné horizontalement -->
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center" style="padding: 0 30px;">
                <!-- Image centrée -->
                <div class="mb-4 mb-md-0 me-md-4 text-center">
                    <img class="img-fluid w-100" src="img/team-2.PNG" alt=""
                        style="max-width: 90000px; border-radius: 50px;">
                </div>

                <!-- Texte aligné -->
                <div class="bg-light text-center text-md-start p-4 rounded">
                    <h3 class="mb-0" style="font-size: 1.1rem; line-height: 1.7;">
                        Les sentiers de toute évolution doivent être aplanis et éclairés, préalablement à la
                        croissance.<br><br>
                        En Côte d’Ivoire, le secteur informel représente une part significative de l’économie mais il manque
                        de régulation et de protection sociale.<br><br>
                        Le Salon des CGA répond au besoin d’informer et de former les principaux acteurs du secteur
                        informel, mais aussi les PME/PMI et la jeunesse sur l’importance d’une régulation fiable et
                        accessible à tous, mise en place par la DGI à travers les centres de gestion agréés.<br><br>
                        Notre économie peut croître et atteindre des sommets dont les retombées seront bénéfiques pour
                        chaque ivoirien si la population connaît et comprend les mécanismes, tels que les CGA, mis en place
                        par l’État pour encadrer et formaliser le secteur informel.<br><br>
                        Nous avons donc tout intérêt à nous approprier les concepts d’entreprenariat et à adhérer aux CGA
                        pour une meilleure structuration de nos activités commerciales.<br><br>
                        Nous estimons qu’avec des CGA forts, en collaboration étroite avec l’Ordre des Experts Comptables,
                        le tissu économique ivoirien est destiné à un avenir flamboyant et radieux.
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Team End -->

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
                                <p class="m-0">IMMEUBLE CAISTAB , ABIDJAN PLATEAU </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Nos Contacts</h4>
                                <p class="m-0">07 07 47 03 21 / 07 49 59 35 13
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email </h4>
                                <p class="m-0">mabanamalan@gmail.com</p>
                                <p class="m-0">yveskangra@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h1 class="display-4">Contactez Nous </h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder=" Nom" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Numero" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message"
                                    required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
