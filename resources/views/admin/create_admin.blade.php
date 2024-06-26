{{-- 
    "PRA QUE SERVE
    TANTO CÓDIGO
    SE A VIDA
    NÃO É PROGRAMADA
    E AS MELHORES COISAS
    NÃO TEM LÓGICA". 
    Algúem (algum ano)
--}}

@extends('layouts.main')
@section('title', 'Science Ar - Criar Administrador')

{{-- Conteudo do site --}}
@section('content')

<meta name="description" content="Adicione Administrador">
<meta name="keywords" content="quiz, sciencear, science ar, science, realidade aumentada, setimo ano, enem">
<meta property="og:title" content="Science Ar - Criar Administrador">
<meta property="og:description" content="Adicione Administrador">
<meta property="og:image" content="https://sciencear.x10.mx/img/icon.gif">
<meta property="og:url" content="https://sciencear.x10.mx">
<link rel="canonical" href="https://sciencear.x10.mx">

<div class="menu-login">
  {{-- Menu --}}
  @include('layouts/menu')
</div>

<body class="body-account">  
        <section class="text-center section-login">
          <!-- Background image -->
          <div class="bg-image d-flex" style="justify-content: center; flex-wrap: wrap; align-items: center;">
              {{-- MENSAGEM DE CONTA NÃO CRIADA --}}
              @if(session()->has('admin-create-danger'))
                  <div class="alert alert-danger alert-dismissible alert-admin-create fade show" role="alert" style="min-height: 60px; width: 50%">
                      <strong>Não foi possivel criar administrador!</strong> Tente novamente mais tarde.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
          <!-- Background image -->

          <div class="container container-login">
            <div class="cardLogin shadow-5-strong">
              <div class="card-body py-5">
                <div class="row d-flex justify-content-center w-100" style="margin: 0;">
                  <div class="col-lg-8 col-lg-login">
                      <h1 class="fw-bold mb-5">Criar Administrador</h1>
                      <form method="POST" action="{{ route('admin.create') }}">
                        @csrf
                        {{-- NOME --}}
                        <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                            <input type="text" id="name" name="name" class="form form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome" autocomplete="dff"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
            
                        {{-- EMAIL --}}
                        <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                          <input type="email" id="email" name="email" class="form form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail" autocomplete="dff"/>
                          
                          {{-- Erro --}}
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                          @enderror
                        </div>
                          
                        {{-- SENHA --}}
                        <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                          <div class="col" style="position: relative">
                            <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" autocomplete="dff" value="{{ old('password') }}" placeholder="Senha">
                            <img class="view-password" id="view-password" src="{{asset('img/eye.svg')}}" onclick="showPassword()" srcset="">
                          </div>

                          {{-- Erro --}}
                          @error('password')
                              <span class="invalid-feedback" role="alert" style="text-align: left; display: block!important">
                                  {{ $message }}
                              </span>
                          @enderror
                        </div>
              
                        <!-- BTN -->
                        <button type="submit" class="btn btnLogin btnSobreNos mt-4">
                            Registrar
                        </button><br><br> 
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </section>

  {{-- Footer --}}
  @include('layouts/footer')

    {{-- JQuery --}}
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
      <!-- Section: Design Block -->
</body>
@endsection


