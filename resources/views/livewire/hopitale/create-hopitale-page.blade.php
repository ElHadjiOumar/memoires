<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter une nouvelle Structure Hospitaliere
                            <a href="{{ url('hopitale')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('hopitale-store')}}" method="post">
                         {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="hopital_nom" class="form-control" placeholder="Entrez le nom de la Structure Hospitaliere">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" name="hopital_type" class="form-control" placeholder="Entrez le type de la Structure Hospitaliere">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="hopital_ville" class="form-control" placeholder="Entrez la ville de la Structure Hospitaliere">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="hopital_adress" class="form-control" placeholder="Entrez l'adresse de la Structure Hospitaliere">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" name="hopital_numero" class="form-control" placeholder="Entrez le numero de téléphone de la Structure Hospitaliere">
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
