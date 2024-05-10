<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <script src="../js/main.js" defer></script>
    <title>contact</title>
</head>
<body style="background:#ececec">
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
        <div class="container">

            <!-- start of section 1 -->
            <section class="sec1">
                <h1 class="title-sec">Contact</h1>
            </section>
            <!-- end of section1 -->
            <!-- start of information -->
            <section class="sec2">
                <h2 class="com">Comment nous pouvons vous aidez</h2>
                <h1 class="quest">Questions ?</h1>

                <p class="cont">Si vous avez des commentaires, des suggestions ou des questions, n'hésitez pas à nous <br> contacter. Notre personnel de bureau de haute qualité vous aidera et répondra à toutes vos questions.</p>
            </section>

            <section class="sec3">
                <div class="contcat">
                    <i class="fas fa-location-pin-lock iconcon"></i>
                    <h2 class="add">Notre adresse</h2>
                    <p class="pAdd">Andoharanofotsy, Atsimondrano</p>
                </div>
                <div class="contcat">
                    <i class="fas fa-phone-volume iconcon"></i>
                    <h2 class="add">Nos numéro</h2>
                    <p class="pAdd">+261 34 97 903 18</p>
                </div>
                <div class="contcat">
                    <i class="fas fa-envelope iconcon"></i>
                    <h2 class="add">Notre email</h2>
                    <p class="pAdd">fenomananat@gmail.com</p>
                </div>
            </section>
            <!-- end of information -->
            <!-- contact form start -->
            <section class="sec4">
                {{-- @if ($error)
                @foreach ($error->all() as $err )
                    <p style="text-align:center;color:green;">{{$err}}</p>
                @endforeach --}}
                    
                {{-- @endif --}}
                <div class="formco">
                    <form action="{{route('cont')}}"  method="POST">
                        @csrf
                        <div class="inp">
                            <div class="inp1">
                                <input type="text" placeholder="votre nom" name="nom">
                            </div>
                            <div class="inp1">
                                <input type="email" placeholder="votre e-mail" name="prenom">
                            </div>
                            <div class="inp1">
                                <input type="text" placeholder="votre telephone" name="telephone">
                            </div>
                            <div class="butt">
                                <button type="submit">Envoyez la demande</button>
                            </div>
                        </div>
                        <div class="text">
                            <textarea name="message" id=""  placeholder="votre questions"></textarea>
                        </div>
                    </form>
                </div>
            </section>
            <!-- contact form end -->

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
        </div>

</body>
</html>