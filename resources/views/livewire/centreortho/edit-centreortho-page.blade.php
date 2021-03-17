<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Modifier le Centre Orthopedique
                        <a href="{{ url('centreOrtho')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('centreOrtho-update/'.$centreOrtho->id)}}" method="post">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="centreOrtho_nom" class="form-control" value="{{ $centreOrtho->centreOrtho_nom}}">
                                    </div>
                                </div><br>
                                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="centreOrtho_ville" class="form-control" value="{{ $centreOrtho->centreOrtho_ville}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="centreOrtho_adress" class="form-control" value="{{ $centreOrtho->centreOrtho_adress}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" name="centreOrtho_numero" class="form-control" value="{{ $centreOrtho->centreOrtho_numero}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info"> Update</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
