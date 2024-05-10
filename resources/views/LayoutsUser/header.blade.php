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