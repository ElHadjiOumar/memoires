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
                <form action="{{ url('save-medecin')}}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <input type="hidden" name="specialisation_id" class="form-control" id="specialisation_id" value="{{ $specialisation->id}}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nom:</label>
                        <input type="text" name="medecin_nom" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Prenom:</label>
                        <input type="text" name="medecin_prenom" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Ville:</label>
                        <input type="text" name="medecin_ville" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Adresse:</label>
                        <input type="text" name="medecin_adress" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Numéro:</label>
                        <input type="number" name="medecin_numero" class="form-control" >
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
                            <h4 class="card-title"> Liste des medecins de la specialisation
                                @if (Auth::user()->usertype == 'Admin'  )
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ajouter</button>
                            <a href="{{ url('specialisation')}}" class="btn btn-primary float-right py-2">Retour</a>
                             @endif 
                            </h4>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Specialisation</th>
                                        <th>NOM</th>
                                        <th>PRENOM</th>
                                        <th>VIlle</th>
                                        <th>ADRESSE</th>
                                        <th>NUMERO</th>
                                        @if (Auth::user()->usertype == 'Admin'  )
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                         @endif
                                    </thead>
                                    <tbody>
                                        @foreach ($medecin as $row)
                                            @if ($row->specialisation_id == $specialisation->id)
                                                <tr>
                                                    <input type="hidden" class="medelete_val" value="{{$row->id}}">
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$specialisation->specialisation_nom}}</td>
                                                    <td>{{$row->medecin_nom}}</td>
                                                    <td>{{$row->medecin_prenom}}</td>
                                                    <td>{{$row->medecin_ville}}</td>
                                                    <td>{{$row->medecin_adress}}</td>
                                                    <td>{{$row->medecin_numero}}</td>
                                                    @if (Auth::user()->usertype == 'Admin'  )
                                                        <td>
                                                        <a href="{{ url('medecin-edit/'.$row->id)}}" class="btn btn-info">EDIT</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger medecindeletebtn" >DELETE</button>
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