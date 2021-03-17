<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ajouter </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      
                    </div>
                    <form action="{{ url('save-famille')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="modal-body">
                            <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{ $user->id}}">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nom:</label>
                            <input type="text" name="nom" class="form-control" id="nom">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Prenom:</label>
                            <input type="text" name="prenom" class="form-control" id="prenom">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Position:</label>
                            <select name="position" class="form-control" id="position">

                                            
                                <option value="Femme">Femme</option>
                                <option value="Marie">Marie</option>
                                <option value="Enfant">Enfant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Date de Naissance:</label>
                            <input type="date" name="date_nais" class="form-control" id="date_nais">
                        </div>
                        <div class="form-group">
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                  </div>
                </div>
            </div> 

            
            
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Liste des Membres de la famille de l'utilisateur
                                  
                                <a href="{{ url('role-register')}}" class="btn btn-primary float-right ">Retour</a>
                                @if (Auth::user()->usertype == 'Admin')
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ajouter</button> 
                                 @endif
                                </h4>
                            </div>
                             <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Avatar</th>
                                            <th>NOM</th>
                                            <th>PRENOM</th>
                                            <th>POSITION</th>
                                            <th>Date de naissance</th>
                                            @if (Auth::user()->usertype == 'Admin')
                                                <th>EDIT</th>
                                                <th>DELETE</th>
                                            @endif
                                            @if ( Auth::user()->usertype == 'Medecin')
                                                <th>Frais medicaux</th>
                                            @endif
                                            @if ( Auth::user()->usertype == 'Pharmacie')
                                                <th>Frais pharm</th>
                                            @endif
                                        </thead>
                                        <tbody>
                                            @foreach ($famille as $row)
                                                @if ($row->user_id == $user->id)
                                                    <tr>
                                                        <input type="hidden" class="fadelete_val" value="{{$row->id}}">
                                                
                                                        <td>{{$row->id}}</td>
                                                        <td><img class=" rounded-circle" src="{{ asset('uploads/famille/'.$row->image)}}" width="100px" height="100px" alt="Image"></td>
                                                        <td>{{$row->nom}}</td>
                                                        <td>{{$row->prenom}}</td>
                                                        <td>{{$row->position}}</td>
                                                        <td>{{$row->date_nais}}</td>
            
                                                        @if (Auth::user()->usertype == 'Admin')
                                                        <td>
                                                            
                                                        <a href="{{ url('famille-edit/'.$row->id)}}" class="btn btn-info">EDIT</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger familledeletebtn" >DELETE</button>
                                                        </td>
                                                        @endif
                                                        @if ( Auth::user()->usertype == 'Medecin')
                                                            <td>
                                                                
                                                                <a href="{{ url('fraismedicaux-createFam/'.$row->id)}}" class="btn btn-info">valider</a>
                                                                
                                                            </td>
                                                        @endif
                                                        @if ( Auth::user()->usertype == 'Pharmacie')
                                                            <td>
                                                                <a href="{{ url('fraispharm-createFam/'.$row->id)}}" class="btn btn-info">valider</a>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endif
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

</x-app-layout>