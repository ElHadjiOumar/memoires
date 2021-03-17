<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit medicament
                        <a href="{{ url('medicament/'. $medicament->maladie_id)}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('medicament-update/'.$medicament->id)}}" method="post">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="row">
                                <input type="hidden" name="maladie_id" class="form-control" id="maladie_id" value="{{ $medicament->maladie_id}}">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom </label>
                                    <input type="text" name="medicament_nom" class="form-control" value="{{ $medicament->medicament_nom}}">
                                    </div>
                                </div><br>
                             
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Caracteristique</label>
                                        <input type="text" name="medicament_caracteristique" class="form-control" value="{{ $medicament->medicament_caracteristique}}">
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