<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

<div class="py-12">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Edit famille
                    <a href="{{ url('famille/'. $famille->user_id)}}" class="btn btn-primary float-right py-2">Retour</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="{{ url('famille-update/'.$famille->id)}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('PUT') }}
                        <div class="row">
                            <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{ $famille->user_id}}">
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label>Inserer à nouveau l'image </label>
                                    <div class="file-field">
                                        <div class="btn btn-primary btn-sm float-left waves-effect waves-light">
                                          <span>Choisir l'image</span>
                                          <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="file-path-wrapper">
                                          <input class="file-path validate" type="text">
                                        </div>
                                      </div>
                                </div>
<br>
                                <div class="form-group">
                                    <label>Nom </label>
                                <input type="text" name="nom" class="form-control" value="{{ $famille->nom}}">
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Prenom</label>
                                <input type="text" name="prenom" class="form-control" value="{{ $famille->prenom}}">
                                </div>
                            </div><br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Position</label>
                                    <select name="position" class="form-control" id="position">

                                            
                                        <option value="Femme">Femme</option>
                                        <option value="Marie">Marie</option>
                                        <option value="Enfant">Enfant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Date de Naissance</label>
                                    <input type="date" name="date_nais" class="form-control" value="{{ $famille->date_nais}}">
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