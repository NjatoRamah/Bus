<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/catego.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <script src="../js/main.js" defer></script>
    <script src="../js/slide.js" defer></script>
    <title>categorie</title>
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
        <!-- connexion -->
        <!-- <div class="connexion">
            <div class="divikisa">
                <i class="fas fa-xmark ikisa"></i>
            </div>
            <div class="title-connex"><h1 class="insco">Inscrivez et se connecter</h1></div>
    
            <div class="social">
                <div class="face">
                    <a href=""><i class="fab fa-facebook-f faceb" style="color:blue; font-size: 1.2rem;"></i>&nbsp;&nbsp; facebook</a>
                </div>
                <div class="face">
                    <a href=""><i class="fab fa-google faceb" style="background:linear-gradient(1deg,yellow,green,red); background-clip: text; -webkit-background-clip: text; color: transparent; font-size: 1.2rem;"></i>&nbsp;&nbsp;Gmail</a>
                </div>
            </div>
            <div class="seco">
                <div class="formulaire">
                    <form action="">
                        <div class="input-form">
                            <input type="email" placeholder="email">
                        </div>
                        <div class="input-form">
                            <input type="password" placeholder="Mot de passe">
                        </div>
                        <div class="input-form">
                            <button type="submit">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- end connexion -->
        <div class="container">

            <div class="title"><h1 class="title1">Nos categories premières classes</h1></div>
            <!-- sec1 -->
            <div class="catego">
                <!-- s-catego1 -->
                <div class="s-catego">
                    <div class="image">
                        <div class="img">
                            <div class="s-img">
                                <img src="../image/premium.jpg" alt="" class="img-cat">

                                <div class="voit">
                                    <i class="a-voit">Voir les voitures disponibles</i>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <h1 class="cat-title">VIP</h1>
                            <p class="desc">Antananarivo</p>
                            <p class="desc">Ambatolampy</p>
                            <p class="desc">Antsirabe</p>
                            <p class="desc">Prix: à partir de 30 000 Ar</p>
                        </div>
                    </div>
                </div>

                <!-- s-catego2 -->
                    <div class="s-catego">
                        <div class="image">
                            <div class="img">
                                <div class="s-img">
                                    <img src="../image/besady.jpg" alt="" class="img-cat">

                                    <div class="voit">
                                        <i class="a-voit">Voir les voitures disponibles</i>
                                    </div>
                                </div>
                            </div>
                            <div class="cont">
                                <h1 class="cat-title">Premium</h1>
                                <p class="desc">Antananarivo</p>
                                <p class="desc">Ambatolampy</p>
                                <p class="desc">Antsirabe</p>
                                <p class="desc">Prix: à partir de 50 000 Ar</p>
                            </div>
                        </div>
                    </div>
            </div>
        <!-- vip -->

            <div class="list">
                    <div class="vip">
                        <h1 class="titlevip">Nos voitures VIP disponibles</h1>
                    </div>
                    <div class="listevip">
                    @foreach($voiture as $affvoiture)
                        <div class="voiture">
                            <img src="storage/image_catego/{{$affvoiture->photo}}" alt="" class="image">
                            <p>{{$affvoiture->categorie}} [{{$affvoiture->depart}}/{{$affvoiture->arrive}}]</p>
                            <p>{{$affvoiture->price}}</p>
                            <div class="linkrel">
                                
                                @if (Session::has('client'))
                                <a href="{{Route('reservation',['id'=>$affvoiture->id])}}" class="reserv">Reserver</a>
                                @else
                                <a href="{{Route('index')}}" class="reserv">connecter pour reserver</a>
                                @endif
                                <abbr title="save"><i class="fas fa-heart"></i></i></abbr>
                            </div>
                        </div>
                    @endforeach
                    </div>
            </div>
            <!-- end vip -->
        <!-- premium -->
            <div class="list">
                <div class="vip">
                    <h1 class="titlevip">Nos voitures Premium disponibles</h1>
                </div>
               
                <div class="listevip">
                    @foreach ($voiture1 as $affprem)
                    <div class="voiture">
                        <img src="storage/image_catego/{{$affprem->photo}}" alt="" class="image">
                        <p>{{$affprem->categorie}} [{{$affprem->depart}}/{{$affprem->arrive}}]</p>
                        <p>{{$affprem->price}}</p>
                        <div class="linkrel">
                                
                            @if (Session::has('client'))
                            <a href="{{Route('reservation',['id'=>$affprem->id])}}" class="reserv">Reserver</a>
                            @else
                            <a href="{{Route('index')}}" class="reserv">connecter pour reserver</a>
                            @endif
                            <abbr title="save"><i class="fas fa-heart"></i></i></abbr>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        <!-- end premium -->
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