<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit laboratoire
                        <a href="{{ url('laboratoire')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('laboratoire-update/'.$laboratoire->id)}}" method="post">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="laboratoire_nom" class="form-control" value="{{ $laboratoire->laboratoire_nom}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" name="laboratoire_type" class="form-control" value="{{ $laboratoire->laboratoire_type}}">
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>ville</label>
                                        <input type="text" name="laboratoire_ville" class="form-control" value="{{ $laboratoire->laboratoire_ville}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>adresse</label>
                                        <input type="text" name="laboratoire_adress" class="form-control" value="{{ $laboratoire->laboratoire_adress}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>numero</label>
                                        <input type="text" name="laboratoire_numero" class="form-control" value="{{ $laboratoire->laboratoire_numero}}">
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