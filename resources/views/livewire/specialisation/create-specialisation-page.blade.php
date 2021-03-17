<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter une nouvelle specialisations
                        <a href="{{ url('specialisation')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('specialisation-store')}}" method="post">
                         {{ csrf_field() }}
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="specialisation_nom" class="form-control" placeholder="Entrez le nom de la specialisation">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>description</label>
                                        <textarea name="description" class="form-control" placeholder="Entrez la description"></textarea>
                                    </div>
                                </div><br>
                                
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info"> Sauvegarder</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</x-app-layout>