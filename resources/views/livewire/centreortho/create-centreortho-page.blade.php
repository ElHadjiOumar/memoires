<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter un nouveau centre orthopedique
                        <a href="{{ url('centreOrtho')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('centreOrtho-store')}}" method="post">
                         {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="centreOrtho_nom" class="form-control" placeholder="Entrez le nom du Centre Orthopedique">
                                    </div>
                                </div><br>
    
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="centreOrtho_ville" class="form-control" placeholder="Entrez la ville du Centre Orthopedique">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="centreOrtho_adress" class="form-control" placeholder="Entrez l'adresse du Centre Orthopedique">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" name="centreOrtho_numero" class="form-control" placeholder="Entrez le numero de téléphone du Centre Orthopedique">
                                    </div>
                                </div>
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
</x-app-layout>