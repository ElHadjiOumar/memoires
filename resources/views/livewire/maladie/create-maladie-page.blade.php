<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter une nouvelle Maladie
                        <a href="{{ url('maladie')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('maladie-store')}}" method="post">
                         {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="maladie_nom" class="form-control" placeholder="Entrez le nom de la maladie">
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

</x-app-layout>