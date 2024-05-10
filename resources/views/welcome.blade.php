@extends('../LayoutsUser/master')

@section('contenue')
    {{-- eto ny contenu rehetra--}}
    
    <!-- connexion -->
    <div class="connexion">
        <div class="divikisa">
            <i class="fas fa-xmark ikisa"></i>
        </div>
        {{-- page d'incription --}}
        <div class="seco">
            <div class="title-connex"><h1 class="insco">Inscrivez Vous ici!</h1></div>
            <div class="formulaire">
                <form action="{{route('recup')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-form">
                        <input type="text" name="nom" placeholder="Votre nom">
                    </div>
                    <div class="input-form">
                        <input type="text" name="prenom" placeholder="Votre prenom">
                    </div>
                    <div class="input-form">
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="input-form">
                        <input type="password" name="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="input-form">
                        <input type="file" name="photo" placeholder="photo">
                    </div>
                    <div class="input-form">
                        <button type="submit">S'inscrire</button>
                    </div> 
                </form>
            </div>
            {{-- <div class="social">
                <div class="face">
                    <a href=""><i class="fab fa-facebook-f faceb" style="color:blue; font-size: 1.2rem;"></i>&nbsp;&nbsp; facebook</a>
                </div>
                <div class="face">
                    <a href=""><i class="fab fa-google faceb" style="background:linear-gradient(1deg,yellow,green,red); background-clip: text; -webkit-background-clip: text; color: transparent; font-size: 1.2rem;"></i>&nbsp;&nbsp;Gmail</a>
                </div>
            </div> --}}
            <div class="inputsec">
            <p style="text-align:center; margin:2% 0 5% 0;color:white;">Avez vous un compte? <span class="ici">connecter ici</span>
            </p>
            </div> 
        </div>
        {{-- page de connexion --}}
        <div class="seco1">
            <div class="title-connex"><h1 class="insco">Se connecter</h1></div>
            <div class="formulaire">
                <form action="{{route('connex1')}}" method="GET" >
                    <div class="input-form">
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="input-form">
                        <input type="password" placeholder="Mot de passe" name="password">
                    </div>
                    <div class="input-form">
                        <button type="submit">Se connecter</button>
                    </div> 
                </form>
            </div>
            {{-- <div class="social">
                <div class="face">
                    <a href=""><i class="fab fa-facebook-f faceb" style="color:blue; font-size: 1.2rem;"></i>&nbsp;&nbsp; facebook</a>
                </div>
                <div class="face">
                    <a href=""><i class="fab fa-google faceb" style="background:linear-gradient(1deg,yellow,green,red); background-clip: text; -webkit-background-clip: text; color: transparent; font-size: 1.2rem;"></i>&nbsp;&nbsp;Gmail</a>
                </div>
            </div> --}}
            <div class="inputsec">
                <p style="text-align:center; margin:2% 0 5% 0;color:white;">Vous n'avez pas de compte? <span class="ici1">creer?</span>
                </p>
            </div> 
        </div>
    </div>
    <!-- end connexion -->
    <div class="container">
            @if (Session::has('error'))
                <p style="color:green;">{{Session::get('error')}}</p>
            @endif
            @if (Session::has('statue'))
            <p onclick="" style="color:green; text-align:center;width:300px;height:20px;">{{Session::get('statue')}}</p>
            @endif

            @if ($errors)
            @foreach ($errors->all() as $err )
                <p>{{$err}}</p>
            @endforeach
                
            @endif
            <div class="s-sec2">
                <div id="wowslider-container1" >
                    <div class="ws_images" >
                        <ul>
                            <li><img src="image/toyota.jpg" alt="bootstrap slider" title="Bienvenue sur MdCoop" id="wows1_0"/></li>
                            <li><img src="image/crafter.jpg" alt="Capture" title="Réserver votre billets" id="wows1_1"/></li>
                            <li><img src="image/01.jpg" alt="Capture" title="Voyagez avec plaisir" id="wows1_1"/></li>
                        </ul>
                    </div>
                </div>	
            </div>
    <!-- start form -->
        <section class="sec2">
            <form action="" class="form-res">
                <div class="inputsec">
                    <input type="text" name="" id="depart" placeholder="Départure">
                </div>
                <div class="inputsec">
                    <input type="text" name="" id="arrive" placeholder="Arrivé">
                </div>
                <div class="inputsec">
                    <input type="date" name="" id="d-depart" placeholder="Date">
                </div>
                <div class="inputsec">
                    <select name="" class="selection">
                        <option value="1">Toutes catégories</option>
                        <option value="2">Coopérative standart</option>
                        <option value="3">Transport première classe</option>
                    </select>
                </div>
                <div class="inputsec">
                    <button class="search" type="submit">Chercher</button>
                </div>
            </form>
        </section>
    <!-- end form-->
        <!-- section3 start -->

    <section class="sec3">
        <div class="title">
            <h1 class="title-fat">Faites Votre Choix</h1>
        </div>

        <div class="difere">
            <div class="dif">
                <div class="ico">
                    <i class="fas fa-car"></i>
                </div>
                <div class="titleico">
                    <h1 class="title-ico"><a href="{{Route('catego1')}}" class="cat-link">Categories Standarts</a></h1>
                </div>
            </div>
            <div class="dif">
                <div class="ico">
                    <i class="fas fa-car"></i>
                </div>
                <div class="titleico">
                    <h1 class="title-ico"><a href="{{Route('catego')}}" class="cat-link">categorie première classe</a></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- section3 end -->

    <!-- section4 start -->
    <section class="sec4">
        <div class="titles4">
            <h1 class="que">Que proposons-nous ?</h1>

            <p class="p-que">Nous avons créer cette plateforme afin de vous aider à trouver la meilleure offre avec le bon prix, <br> de gagner du temps et bénéficier d'un service de qualité et garant</p>
        </div>

        <div class="diver">
            <div class="s-diver">
                <i class="fas fa-laptop icondiv"></i>
                <h1 class="title-div">Simplicité</h1>
                <p class="p-dive">Réserver votre billet avec <br> 4 categories des voitures <br>aux choix via <br> votre PC ou smartphone</p>
            </div>
            <div class="s-diver">
                <i class="fas fa-car-rear icondiv"></i>
                <h1 class="title-div">Gammes aux choix</h1>
                <p class="p-dive">Choissisez votre voiture <br> selon ses équipements et <br> services à bord</p>
            </div>
            <div class="s-diver">
                <i class="fas fa-dollar-sign icondiv"></i>
                <h1 class="title-div">Paiement simple</h1>
                <p class="p-dive">Paiement en ligne <br> instantané et sécurisé avec <br> Mvola, Orange Money, <br> Visa/Mastercard et Paypal</p>
            </div>
            <div class="s-diver">
                <i class="fas fa-location-arrow icondiv"></i>
                <h1 class="title-div">Large couverture</h1>
                <p class="p-dive">Voyagez vers plus de 10 <br> grandes villes dans toute <br> l'île.</p>
            </div>
        </div>


        <div class="entre">
            <h1 class="title-ent">Vous êtes une entreprise de transport ?</h1>
            <p class="p-ent">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vitae dolores optio perferendis voluptatibus! Ut officia asperiores, <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, illo?
            </p>

            <a href="#" class="decov">Découvrez nos offres</a>
        </div>
    </section>
    <!-- end section 4 -->

    <!-- seection5 start -->

    <section class="sec5">
        <div class="titlesec5">
            <h1 class="titles5">Avantages de nos offres</h1>
        </div>

        <div class="cont">
                <div class="conts5">
                    <i class="fas fa-pen-nib fontaw"></i>
                    <h2 class="titlec5">Prix au choix</h2>
                    <p class="pcont5">Les prix sont variables suivant la categorie, vous avez le choix</p>
                </div>
                <div class="conts5">
                    <i class="fas fa-location-pin-lock fontaw"></i>
                    <h2 class="titlec5">Points de fidélité</h2>
                    <p class="pcont5">En étant fidèle à MdCoop, vous bénéficieriez des points qui pouront vous servir à payer une réservation en bonus</p>
                </div>
                <div class="conts5">
                    <i class="fas fa-heart fontaw"></i>
                    <h2 class="titlec5">100% garantie</h2>
                    <p class="pcont5">En collaboration avec les coopératives, votre place sera garantie via MGcoop</p>
                </div>
                <div class="conts5">
                    <i class="fab fa-avianex fontaw"></i>
                    <h2 class="titlec5">Mobilité</h2>
                    <p class="pcont5">Ou que vous soyez, vous pouvez réserver à tout moment et faire le choix de votre place</p>
                </div>
        </div>

    </section>

    <!-- end section5 -->

    <!-- section6 start -->

    <section class="sec6">
        <div class="categorie">
            <h1 class="titlecatego">Catégories modernes des voitures</h1>
        </div>

        <div class="catego">
            <div class="contcate">
                <i class="fas fa-car-rear fontcat"></i>
                <h2 class="titlecar">Premium</h2>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Sièges avec accoudoir et tablette</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Wifi</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Service multimédia : écran lcd</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Limiteur de vitesse integré</p>
            </div>
            <div  class="contcate">
                <i class="fas fa-car-rear fontcat"></i>
                <h2 class="titlecar">VIP</h2>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Sièges haut de gamme</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Prises électriques et port USB</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Climatisation</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Wifi</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Service multimédia : écran lcd</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Limiteur de vitesse integré</p>
            </div>

            <div  class="contcate">
                <i class="fas fa-car-rear fontcat"></i>
                <h2 class="titlecar">Standarts</h2>
                <p  class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp;</i>Place normale</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Pas de Wifi</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Service multimédia : écran lcd</p>
            </div>
            <div  class="contcate">
                <i class="fas fa-car-rear fontcat"></i>
                <h2 class="titlecar">Lite</h2>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Place spacieuse</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Wifi</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Service multimédia : écran lcd</p>
                <p class="pcatego"><i class="fas fa-right-from-bracket"></i> &nbsp; Limiteur de vitesse integré</p>
            </div>

        </div>
    </section>
    <!-- end section6 -->
    </div>
@endsection

