<header class="c-navbar u-mb-large">
        <a class="c-navbar__brand" style="font-size: 20px;color:black;" href="#">
        WEBAPP
        </a>

        <!-- Navigation items that will be collaped and toggled in small viewports -->
        <nav class="c-navbar__nav collapse" id="main-nav">
        @auth
          <ul class="c-navbar__nav-list">
              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="/dashboard">Dashboard</a>
              </li>
              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="#">Mensagens de Contato Recebida</a>
              </li>
              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="{{ route('api-tokens.index') }}">Api Tokens</a>
              </li>
              @endif
              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="#">Editor FrontEnd</a>
              </li>
             
          </ul>
          
        </nav>
        <!-- // Navigation items  -->

        <div class="c-dropdown dropdown u-mr-small u-ml-auto">
            <div class="c-notification dropdown-toggle" id="dropdownMenuToggle1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-message-circle"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle1">

              <span class="c-dropdown__menu-header">
                Mensagens
              </span>
              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-avatar c-avatar--xsmall">
                    @if(!empty(Auth()->user()->avatar))<img class="c-avatar__img" src="{{ Voyager::image(Auth()->user()->avatar) }}" >@endif  
                    </span>
                  </div>

                  <div class="o-media__body">
                    <p>Implementação Futura</p>
                  </div>
                </div>
              </a>

              

             

              <a class="c-dropdown__menu-footer">
                Todas as mensagens
              </a>
            </div>
          </div>

          <div class="c-dropdown dropdown u-mr-medium">
            <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-bell"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

              <span class="c-dropdown__menu-header">
                Notificações
              </span>
              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>Implementação futura</p>
                  </div>
                </div>
              </a>

        

              <a class="c-dropdown__menu-footer">
                Todas as notificações
              </a>
            </div>
          </div>
          @endauth
          <div class="c-dropdown dropdown">
            <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            @if(!empty(Auth()->user()->avatar))<img class="c-avatar__img" src="{{ Voyager::image(Auth()->user()->avatar) }}" >@endif  
                  
            </div>

            <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
              <a class="c-dropdown__item dropdown-item" href="{{ route('profile.show') }}">Editar Perfil</a>
              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
               <a class="c-dropdown__item dropdown-item" href="{{ route('api-tokens.index') }}">Apis Tokens</a>
              @endif
              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="c-dropdown__item dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  this.closest('form').submit();">Sair</a>
                </form>
              
            </div>
          </div>

        <button class="c-navbar__nav-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
            <i class="feather icon-menu"></i>
        </button><!-- // .c-nav-toggle -->
      </header>