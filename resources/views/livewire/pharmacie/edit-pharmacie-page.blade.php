<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Pharmacie
                        <a href="{{ url('pharmacie')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('pharmacie-update/'.$pharmacie->id)}}" method="post">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom Pharmacie</label>
                                    <input type="text" name="pharmacie_nom" class="form-control" value="{{ $pharmacie->pharmacie_nom}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Adresse Pharmacie</label>
                                    <input type="text" name="pharmacie_adress" class="form-control" value="{{ $pharmacie->pharmacie_adress}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Numéro Pharmacie</label>
                                        <input type="text" name="pharmacie_numero" class="form-control" value="{{ $pharmacie->pharmacie_numero}}">
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