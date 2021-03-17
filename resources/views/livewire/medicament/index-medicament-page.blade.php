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
                <form action="{{ url('save-medicament')}}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                    
                        <input type="hidden" name="maladie_id" class="form-control" id="maladie_id" value="{{ $maladie->id}}">
                  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nom:</label>
                        <input type="text" name="medicament_nom" class="form-control" id="nom">
                    </div>
                   
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">CARACTERISTIQUE:</label>
                        <input type="text" name="medicament_caracteristique" class="form-control" >
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
                            <h4 class="card-title"> Liste des medicaments de la maladie
                            @if (Auth::user()->usertype == 'Admin'  )
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ajouter</button>
                                <a href="{{ url('maladie')}}" class="btn btn-primary float-right py-2">Retour</a>
                            @endif 
                            </h4>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>maladie</th>
                                        <th>NOM</th>
                                        <th>CARACTERISTIQUE</th>
                                        @if (Auth::user()->usertype == 'Admin'  )
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                        @endif 
                                    </thead>
                                    <tbody>
                                        @foreach ($medicament as $row)
                                            @if ($row->maladie_id == $maladie->id)
                                                <tr>
                                                    <input type="hidden" class="medelete_val" value="{{$row->id}}">
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$maladie->maladie_nom}}</td>
                                                    <td>{{$row->medicament_nom}}</td>
                                                    <td>{{$row->medicament_caracteristique}}</td>
                                                    
                                                    @if (Auth::user()->usertype == 'Admin'  )
                                                        <td>
                                                        <a href="{{ url('medicament-edit/'.$row->id)}}" class="btn btn-info">EDIT</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger medicamentdeletebtn" >DELETE</button>
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