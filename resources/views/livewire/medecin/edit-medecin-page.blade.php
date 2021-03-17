<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit medecin
                        <a href="{{ url('medecin/'. $medecin->specialisation_id)}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('medecin-update/'.$medecin->id)}}" method="post">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="row">
                                <input type="hidden" name="specialisation_id" class="form-control" id="specialisation_id" value="{{ $medecin->specialisation_id}}">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom </label>
                                    <input type="text" name="medecin_nom" class="form-control" value="{{ $medecin->medecin_nom}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                    <input type="text" name="medecin_prenom" class="form-control" value="{{ $medecin->medecin_prenom}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" name="medecin_ville" class="form-control" value="{{ $medecin->medecin_ville}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" name="medecin_adress" class="form-control" value="{{ $medecin->medecin_adress}}">
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