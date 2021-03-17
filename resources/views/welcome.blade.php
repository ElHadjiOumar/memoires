<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>IPM de la caisse Securite Sociale</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
    </head>
    <body class="is-preload landing">
        <div id="page-wrapper">
            <header id="header">
                <nav id="nav">
                    <ul>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="button primary" style="height: 55px ;">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="button primary" style="height: 55px ;" >Login</a>
                            @endif
                        </div>
                    @endif
                    </ul>
                </nav>
            </header>
          

            <section id="banner">
                <div class="content">
                    <header>
                        <h2>institution de prévoyance maladie</h2>
                        <p>La mise en place de cette institution participe à la prise en charge effective <br />
                        et permanente de l’individu qui est sous subordination juridique. </p>
                        
                         
                    </header>
                    <span class="image"><img src="{{asset('images/ipm1.png')}}" alt="" /></span>
                </div>
                
            </section>
        </div>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('js/browser.min.js')}}"></script>
        <script src="{{asset('js/breakpoints.min.js')}}"></script>
        <script src="{{asset('js/util.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
