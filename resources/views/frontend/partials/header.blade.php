<header class="header_v3">
            <section class="navbar_outer">
               <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                  <div class="container">
                     <a class="navbar-brand" href="index.html">
                     <img src="assets/image/home-3-logo-white.png" class="img-fluid log_normal" alt="img">
                     <img src="assets/image/home-3-logo.png" class="img-fluid log_sticky" alt="img">
                     </a>
                     <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                     <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                          
                           <li class="nav-item nav_item"><a class="nav-link link_hd" href="data/state=PR&dateStart=2020-05-10&dateEnd=2020-05-18">Acessar Endpoint - URL como no exemplo </a></li>
                           
                           
                           <li class="nav-item nav_item"><a class="nav-link link_hd" href="/api/data/state=PR&dateStart=2020-05-10&dateEnd=2020-05-18">Acessar Endpoint - rota API</a></li>
                           @if (Route::has('login'))
               
                    @auth
                    <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{ url('/dashboard') }}">Painel Administrativo</a></li>
                     
                    @else
                    <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{ route('login') }}">Login</a></li>
                        

                        @if (Route::has('register'))
                        <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{ route('register') }}">Registrar</a></li>
                         
                           
                        @endif
                    @endauth
               
            @endif
                        </ul>
                        <ul class="navbar-nav navbar-mobile navbar_right">
                           <li class="nav-item  dropdown">
                              
                           </li>
                           <li class="nav-item  dropdown">
                              <!-- /.site-header__cart -->
                              <a href="#" class="site-header__sidemenu-nav side-menu__toggler">
                                 <span class="site-header__sidemenu-nav-line"></span>
                                 <!-- /.site-header__sidemenu-nav-line -->
                                 <span class="site-header__sidemenu-nav-line"></span>
                                 <!-- /.site-header__sidemenu-nav-line -->
                                 <span class="site-header__sidemenu-nav-line"></span>
                                 <!-- /.site-header__sidemenu-nav-line -->
                                 <!-- /.site-header__sidemenu -->
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
         </header>