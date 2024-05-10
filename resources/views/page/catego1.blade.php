<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/catego.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <script src="../js/main.js" defer></script>
    <script src="../js/slide.js" defer></script>
    <title>standart</title>
</head>
<body style="background:#ececec">
            <!-- header start -->
            <header>
                <div class="logo-div">
                    <h1 class="logo">MG<span class="brouse">COOP</span></h1>
            
                    <div class="con">
                        @if (Session::has('client'))
                        <img src="storage/image/{{Session::get('client')->photo}}" alt=""style="border-radius:50%; width:40px;height:40px;background:black;padding:0 0 0% 0;margin:10% 0 -10% -20%;">
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
            <div class="container">

                <div class="title"><h1 class="title1">Nos categories Standarts</h1></div>
                <!-- sec1 -->
                <div class="catego">
                    <!-- s-catego1 -->
                    <div class="s-catego">
                        <div class="image">
                            <div class="img">
                                <div class="s-img">
                                    <img src="../image/04.jpg" alt="" class="img-cat">

                                    <div class="voit">
                                        <i class="a-voit">Voir les voitures disponibles</i>
                                    </div>
                                </div>
                            </div>
                            <div class="cont">
                                <h1 class="cat-title">Standarts</h1>
                                <p class="desc">Antananarivo</p>
                                <p class="desc">Ambatolampy</p>
                                <p class="desc">Antsirabe</p>
                                <p class="desc">Prix: à partir de 15 000 Ar</p>
                            </div>
                        </div>
                    </div>

                    <!-- s-catego2 -->
                        <div class="s-catego">
                            <div class="image">
                                <div class="img">
                                    <div class="s-img">
                                        <img src="../image/03.jpg" alt="" class="img-cat">

                                        <div class="voit">
                                            <i class="a-voit">Voir les voitures disponibles</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h1 class="cat-title">lite
                                    </h1>
                                    <p class="desc">Antananarivo</p>
                                    <p class="desc">Ambatolampy</p>
                                    <p class="desc">Antsirabe</p>
                                    <p class="desc">Prix: à partir de 20 000 Ar</p>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- standarts -->
                <div class="list">
                    <div class="vip">
                        <h1 class="titlevip">Nos voitures standarts disponibles</h1>
                    </div>
                    
                    <div class="listevip">
                        @foreach ($voiture as $standart)
                        <div class="voiture">
                            <img src="storage/image_catego/{{$standart->photo}}" alt="" class="image">
                            <p>{{$standart->categorie}} [{{$standart->depart}}/{{$standart->arrive}}]</p>
                            <p>{{$standart->price}}</p>
                            <div class="linkrel">
                                @if (Session::has('client'))
                                    <a href="{{Route('reservation',['id'=>$standart->id])}}" class="reserv">Reserver</a>
                                @else
                                    <a href="{{Route('index')}}" class="reserv">connecter pour reserver</a>
                                @endif
                                
                                <abbr title="save"><i class="fas fa-heart"></i></i></abbr>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- end standarts -->

                <!-- lite -->
                <div class="list">
                    <div class="vip">
                        <h1 class="titlevip">Nos voitures lite disponibles</h1>
                    </div>
                    
                    <div class="listevip">
                        @foreach ($voiture1 as $lite)
                        <div class="voiture">
                            <img src="storage/image_catego/{{$lite->photo}}" alt="" class="image">
                            <p>{{$lite->categorie}} [{{$lite->depart}}/{{$lite->arrive}}]</p>
                            <p>{{$lite->price}}</p>
                            <div class="linkrel">
                                @if (Session::has('client'))
                                <a href="{{Route('reservation',['id'=>$lite->id])}}" class="reserv">Reserver</a>
                                @else
                                <a href="{{Route('index')}}" class="reserv">connecter pour reserver</a>
                                @endif
                                
                                <abbr title="save"><i class="fas fa-heart"></i></i></abbr>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                </div>
                <!-- end lite -->
            </div>

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