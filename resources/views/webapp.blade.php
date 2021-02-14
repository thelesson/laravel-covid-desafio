<!doctype html>
<html lang="en">
  <head>
  @include('webapp.partials.head')
  </head>
  <body>

    <div class="o-page">
    @include('webapp.partials.header')
    
      <div class="container">
      @auth
        <div class="row u-justify-center">
          <div class="col-lg-10 u-text-center">
            <h2 class="u-mb-small">Olá, {{ Auth::user()->name }}. Bem vindo ao WebApp - Covid19 :)</h2>
            @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
            <p class="u-text-large u-mb-large">Clique nos cards abaixos para acessar endpoints e visualizar dados consumidos pela api da Brasil IO</p>
          </div>
        </div>

        <div class="row">
        @foreach($cards as $card)
          <div class="col-md-6 col-xl-4">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="{{$card->icone}}"></i>
              </span>

              <h5 class="u-mb-xsmall">{{$card->titulo}}</h5>
              <p class="u-mb-medium">{{$card->subtitulo}}</p>
              <a class="c-btn c-btn--info has-arrow" target="_blank" href="{{$card->link}}">
              {{$card->txt_botao}}<i class="feather icon-chevron-right"></i>
              </a>
            </div>
          </div>
        @endforeach 
        <div class="col-md-6 col-xl-8">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="{{$card->icone}}"></i>
              </span>

              <h5 class="u-mb-xsmall">Dados Genéricos para manter o Layout</h5>
              <p class="u-mb-medium">Seja você quem for, seja qual for a posição social que você tenha na vida, a mais alta ou a mais baixa, tenha sempre como meta muita força, muita determinação e sempre faça tudo com muito amor e com muita fé em Deus, que um dia você chega lá.</p>
              <p class="u-mb-medium">A verdadeira medida de um homem não se vê na forma como se comporta em momentos de conforto e conveniência, mas em como se mantém em tempos de controvérsia e desafio</p>
              <p class="u-mb-medium">Se alguém varre as ruas para viver, deve varrê-las como Michelângelo pintava, como Beethoven compunha, como Shakespeare escrevia.</p>
              
              <p class="u-mb-medium">Não devemos permitir que alguém saia de nossa presença sem se sentir melhor e mais feliz.” “O que eu faço, é uma gota no meio de um oceano. Mas sem ela, o oceano será menor.</p><a class="c-btn c-btn--info has-arrow" target="_blank" href="{{$card->link}}">
              Implementação Futura<i class="feather icon-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row u-justify-center">
          <div class="col-lg-10 u-text-center">
            <h2 class="u-mb-small">TOP 10 MAIORES CASOS DE COVID EM RELAÇÃO AO NÚMERO DE HABITANTES - Brasil IO</h2>
            <p class="u-text-large u-mb-large">Exibição das 10 cidades com o maior número de casos de Covid19 em relação ao número total estimado de habitantes</p>
          </div>
        </div>
@include('webapp.partials.percentual')
<br/>
<div class="row u-justify-center">
          <div class="col-lg-10 u-text-center">
            <h2 class="u-mb-small">TOP 10 MAIORES CASOS DE COVID EM RELAÇÃO AO NÚMERO DE HABITANTES - GAZETA</h2>
            <p class="u-text-large u-mb-large">Exibição das 10 cidades com o maior número de casos de Covid19 em relação ao número total estimado de habitantes</p>
          </div>
        </div>
@include('webapp.partials.percentualG')
          @else
          <div class="row u-justify-center">
          <div class="col-lg-10 u-text-center">
            <h2 class="u-mb-small">Necessário realizar login para acessar essa área</h2>
            <p class="u-text-large u-mb-large">Realize o login e tente novamente</p>
            <p><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Realizar Login</a></p>
<p>
@if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
@endif</p>
          </div>
          
        </div>
        @endif
       

        <div class="row">
          <div class="col-12">
            <footer class="c-footer">
              <p>© 2021 Thélesson de Souza</p>
              <span class="c-footer__divider">|</span>
              <nav>
                <a class="c-footer__link" href="https://www.linkedin.com/in/thelesson/">LinkedIn</a>
               
              </nav>
            </footer>
          </div>
        </div>
      </div>
    </div><!-- // .o-page -->

    <!-- Main JavaScript -->
    <script src="{{ asset('webapp/js/neat.min.js?v=1.0') }}"></script>
  </body>
</html>