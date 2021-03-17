<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter un nouvel opticien
                        <a href="{{ url('opticien')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('opticien-store')}}" method="post">
                         {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="opticien_nom" class="form-control" placeholder="Entrez le nom de l'opticien">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" name="opticien_prenom" class="form-control" placeholder="Entrez le nom de l'opticien">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>ville</label>
                                        <input type="text" name="opticien_ville" class="form-control" placeholder="Entrez la ville de l'opticien">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>adresse</label>
                                        <input type="text" name="opticien_adress" class="form-control" placeholder="Entrez l'adresse de l'opticien">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>numero</label>
                                        <input type="text" name="opticien_numero" class="form-control" placeholder="Entrez le numero de l'opticien">
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