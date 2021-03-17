<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
        
        <livewire:styles />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">

        <div class="sidebar" data-color="orange">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
            <div class="logo">
              
              <a href="http://127.0.0.1:8000/dashboard" class="simple-text logo-normal" style="margin-left:30%">
                Gestion IPM
              </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
              <ul class="nav">
                      <li class="{{ 'dashboard' == request()->path() ? 'active' : ''}}">
                        
                        <a href="{{ url('dashboard')}}">
                          <i class="now-ui-icons design_app"></i>
                          <p>Dashboard</p>
                        </a>
                      </li>

                      @if (Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employe')
                          <li class="{{ 'specialisation' == request()->path() ? 'active' : ''}}">
                        <a href="{{url('specialisation')}}">
                          <i class="now-ui-icons education_atom"></i>
                          <p>Spécialité Medecine</p>
                        </a>
                      </li>

                      <li class="{{ 'hopitale' == request()->path() ? 'active' : ''}}">
                        <a href="{{url('hopitale')}}">
                          <i class="now-ui-icons health_ambulance"></i>
                          <p>Structure Hospitaliere</p>
                        </a>
                      </li>
                      <li class="{{ 'pharmacie' == request()->path() ? 'active' : ''}}">
                      <a href="{{url('pharmacie')}}">
                          <i class="now-ui-icons files_paper"></i>
                          <p>Pharmacie</p>
                        </a>
                      </li>
                      <li class="{{ 'maladie' == request()->path() ? 'active' : ''}}">
                        <a href="{{ url('maladie/')}}">
                          <i class="now-ui-icons media-2_sound-wave"></i>
                          <p>Maladie</p>
                        </a>
                      </li>
                    
                          <li class="{{ 'opticien' == request()->path() ? 'active' : ''}}">
                            <a href="{{url('opticien')}}">
                              <i class="now-ui-icons education_glasses"></i>
                              <p>Opticien</p>
                            </a>
                          </li>
                          <li class="{{ 'laboratoire' == request()->path() ? 'active' : ''}}">
                            <a href="{{url('laboratoire')}}">
                              <i class="now-ui-icons business_bulb-63"></i>
                              <p>Laboratoire</p>
                            </a>
                          </li>
                          <li class="{{ 'centreOrtho' == request()->path() ? 'active' : ''}}">
                            <a href="{{url('centreOrtho')}}">
                              <i class="now-ui-icons sport_user-run"></i>
                              <p>Centre Orthopedique</p>
                            </a>
                          </li>
                
                      @endif
                      
                      @if (Auth::user()->usertype != 'Employe'  )
                        <li class="{{ 'role-register' == request()->path() ? 'active' : ''}}">
                              <a href="{{url('role-register')}}">
                              <i class="now-ui-icons users_single-02"></i>
                              <p>Liste des Utilisateurs</p>
                            </a>
                          </li>
                          @endif

                      
                      @if (Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employe')
                          <li class="{{ 'order-create' == request()->path() ? 'active' : ''}}">
                              <a href="{{url('fraispharm-index')}}">
                              <i class="now-ui-icons shopping_tag-content"></i>
                              <p>Frais Pharmaceutiques</p>
                            </a>
                          </li>
                      
                          <li class="{{ 'listeBeneficiaire' == request()->path() ? 'active' : ''}}">
                              <a href="{{url('fraismedicaux-index')}}">
                              <i class="now-ui-icons shopping_tag-content"></i>
                              <p>Frais Médicaux</p>
                            </a>
                          </li>
                      @endif
      
              </ul>
            </div>
          </div>

        <div class="main-panel" id="main-panel">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
                    {{ $header }}

            <!-- Page Content -->
            <div class="content">
                {{ $slot }}
            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>


    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/func.js')}}"></script>
  <script src="{{asset('assets/js/invoice.js')}}"></script>
  <script src="{{asset('assets/js/medic.js')}}"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    @if (session('status'))
      // {{ session('status') }}
       swal({
         title: '{{ session('status') }}',
         //text: "You clicked the button!",
         icon: '{{ session('statuscode') }}',
         button: "OK",
       });
     @endif
 </script>
 @yield('scripts')
</html>