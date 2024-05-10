<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/reserv.css">
    <script src="../js/main.js" defer></script>
    <title>Reservation</title>
</head>
<body style="background:#ececec">
            <!-- header start -->
            <header>
                <div class="logo-div">
                    <h1 class="logo">MG<span class="brouse">COOP</span></h1>
            
                    <div class="con">
                        @if (Session::has('client'))
                        <img src="/storage/image/{{Session::get('client')->photo}}" alt=""style="border-radius:50%; width:40px;height:40px;background:black;padding:0 0 0% 0;margin:10% 0 -10% -20%;">
                        <span class="connect1"><a href="{{Route('deconnex')}}" style="text-decoration: none; color:black;">Deconnecter</a></span>
                        @else
                        <span class="connect">Se connecter</span>
                        @endif
                    </div>
                    <div class="nav">
                        <div class="nav1"></div>
                        <div class="nav1"></div>
                        <div class="nav1"></div>
                    </div>
                </div>
                <div class="nav-logo">
                    <li class="nav-item"><a href="{{Route('index')}}" class="nav-link">ACCUEIL</a></li>
                    <!--start head navigation -->
                    <div class="sous-menu">
                        <li class="nav-item"><a href="" class="nav-link">ORGANISEZ VOTRE VOYAGE</a></li>
                            <div class="menu">
                                <li class="nav-item1"><a href="" class="nav-link">DESTINATIONS DES VACANCES</a></li>
                            </div>
                    </div>
                    <!-- end head navigation -->
                    <div class="sous-menu">
                        <li class="nav-item"><a href="" class="nav-link">SERVICES</a></li>
                            <div class="menu">
                                <li class="nav-item1"><a href="" class="nav-link">COMMENT RESERVER</a></li>
                                <li class="nav-item1"><a href="" class="nav-link">MODE DE PAYEMENT</a></li>
                            </div>
                    </div>
                    <div class="sous-menu">
                        <li class="nav-item"><a href="" class="nav-link">A PROPOS</a></li>
                            <div class="menu">
                                <li class="nav-item1"><a href="" class="nav-link">QUI SOMMES NOUS ?</a></li>
                            </div>
                    </div>
                    <li class="nav-item"><a href="{{Route('contact')}}" class="nav-link">CONTACT</a></li>
                </div>
            
                <div class="nav-small">
                    <div class="smallresp">
                        <h1 class="logo">MG<span class="brouse" style="color:white;font-size: 1rem;">COOP</span></h1>
                        <ul>
                            <li class="nav-item1"><a href="{{Route('index')}}" class="nav-link1">Accueil</a></li>
            
                            <h1 style="color:white;margin:2% 0 -5% 0;">Organisation</h1>
                            <li class="nav-item1"><a href="" class="nav-link1">Oraganisez votre voyage</a></li>
                            <li class="nav-item1"><a href="" class="nav-link1">Déstinations des vacances</a></li>
            
                            <h1 style="color:white;margin:2% 0 -5% 0;">Services</h1>
                            <li class="nav-item1"><a href="" class="nav-link1">Services</a></li>
                            <li class="nav-item1"><a href="" class="nav-link1">Comment résèrver</a></li>
                            <li class="nav-item1"><a href="" class="nav-link1">Mode de payement</a></li>
            
                            <h1 style="color:white; margin:2% 0 -5% 0;">Apropos</h1>
                            <li class="nav-item1"><a href="" class="nav-link1">A propos</a></li>
                            <li class="nav-item1"><a href="" class="nav-link1">Qui sommes nous?</a></li>
                            <li class="nav-item1"><a href="{{Route('contact')}}" class="nav-link1">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- header end -->
            <!-- contenaire -->
            <div class="contenaire">

                <section class="sec1">
                   

                    <div class="formp">
                        <div class="titlereserv">
                            <h1 class="titleres">Faites votre  reservation</h1>
                        </div>
                        @foreach ($voiture as $reserv)
                        <form action="{{route('paye')}}" method="POST">
                            @csrf
                            <div>
                                <h1 style="margin:-10% 0 5% 0; color:white;">Voiture à réserver</h1>
                                <div class="inp">
                                    <input type="text" style="display: none;" value="{{$reserv->id}}" name="id_voiture">
                                </div>
                                <div class="inp">
                                    <label for="">Ville de depart</label>
                                    <input type="text" style="" value="{{$reserv->depart}}" name="depart">
                                </div>
                                <div class="inp">
                                    <label for="">Ville d'arrivée</label>
                                    <input type="text" value="{{$reserv->arrive}}" name="arrive">
                                </div>
                                <div class="inp">
                                    <label for="">Categorie</label>
                                    <input type="text" value="{{$reserv->categorie}}" name="catego">
                                </div>
                                <div class="inp">
                                    <label for="">Tarif</label>
                                    <input type="text" name="total" value="{{$reserv->price}}" >
                                </div>
                            </div>
                            <div>
                                <h1 style="margin:-10% 0 5% 0; color:white;">Veuillez remplir cette formulaire</h1>
                                <div class="inp">
                                    <label for="">Heure de depart</label>
                                    <input type="time" name="heure-depart" >
                                </div>
                                <div class="inp">
                                    <label for="">Date de départ</label>
                                    <input type="date"  name="date-depart" >
                                </div>
                                <div class="inp">
                                    <label for="">Nombre de place</label>
                                    <input type="text" name="place">
                                </div>
                                <div class="btn">
                                    <button type="submit">Procedure de payement</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </section>
            </div>
            <!-- end contenaire -->
            <footer>
                <div class="secfoot">
                    <h1 class="titlefoot">MG<span style="color: orange;">coop</span></h1>
        
                    <p class="pfoot">
                        Nous avons créer cette plateforme afin de vous aider à trouver la meilleure offre avec le bon prix, de gagner du temps et bénéficier d'un service de qualité et garanti.
                    </p>
                </div>
                <div class="secfoot">
                    <h1 class="titlefoot">Lien utiles</h1>
        
                    <ul>
                        <li class="nav-foot"><a href="" class="link-foot">Accueil</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">A propos</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">Réserver</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">Services</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">Conditions générales</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">Mentions legales</a></li>
                        <li class="nav-foot"><a href="" class="link-foot">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="secfoot">
                    <h1 class="titlefoot">Contact info</h1>
        
                    <p class="pfoot"><i class="fas fa-envelope fontfoot"></i>&nbsp; Fenomananat@gmail.com</p>
                    <p class="pfoot"><i class="fas fa-phone fontfoot"></i>&nbsp; +261 32 65 198 40</p>
                    <p class="pfoot"><i class="fas fa-location-pin fontfoot"></i>&nbsp; Andoharanofotsy, Antananarivo   </p>
                </div>
                <div class="secfoot">
                    <h1 class="titlefoot">Inscrivez-vous</h1>
        
                    <p class="pfoot">Sur notre newsletter</p>
        
                    <form action="">
                        <input type="email" name="" id="" class="mail">
                        <button type="submit" class="sub"><i class="fas fa-paper-plane "></i></button>
                    </form>
                </div>
            </footer>
</body>
</html>