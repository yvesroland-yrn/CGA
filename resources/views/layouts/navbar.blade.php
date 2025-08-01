    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start text-white gap-3">
                    <!-- Téléphones -->
                    <div class="d-flex align-items-start">
                        <i class="fa fa-phone-alt mr-2 mt-1"></i>
                        <div>
                            <small>07 07 47 03 21</small><br>
                            <small>07 49 59 35 13</small>
                        </div>
                    </div>
            
                    <!-- Séparateur (optionnel sur grand écran) -->
                    <div class="d-none d-lg-inline-block mx-3" style="border-left: 1px solid rgba(255,255,255,0.5); height: 40px;"></div>
            
                    <!-- Emails -->
                    <div class="d-flex align-items-start">
                        <i class="fa fa-envelope mr-2 mt-1"></i>
                        <div>
                            <small>yveskangra@gmail.com</small><br>
                            <small>mabanamalan@gmail.com</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class=""></i>CGA</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('App_index') }}" class="nav-item nav-link active">Acceuil</a>
                    <a href="{{ route('App_about') }}" class="nav-item nav-link">A Propos</a>
                    <a href="{{ route('App_contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
