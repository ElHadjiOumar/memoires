<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 style="  position: absolute;
  top: 40%; left: 40%; 
  transform: translate(-40%, -40%); ">Bienvenue Sur la plateforme de Gestion de prise en charge de la Caisse de Sécurite Sociale</h1>
            </div>
        </div>
    </div>
    <style>
       
    </style>
</x-app-layout>