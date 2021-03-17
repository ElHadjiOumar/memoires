<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="modal fade" id="deletemodalepop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form id="delete_modal" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    
                
                <div class="modal-body">
                <input type="hidden" id="delete_user_id">
                <h5> Etes vous sur de vouloir supprimer cet utilisateur ?</h5>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Supprimer </button>
                </div>
                </form>
            </div>
            </div>
        </div>
        {{-- Fin model Suppression --}}
    
    
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Listes des Utilisateurs 
                        @if (Auth::user()->usertype == 'Admin')
                            <a href="{{ url('create-user')}}" class="btn btn-primary float-right py-2">Ajouter</a>
                        @endif
                    </h4>
                   
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>MATRICULE</th>
                                <th>AVATAR</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>STATUT</th>
                                @if (Auth::user()->usertype == 'Admin' )
                                
                                <th>DATE EMBAUCHE</th>
                                <th>DATE fin contrat</th>
                                <th>poste</th>
                                <th>email</th>
                                <th>ROLE</th>
                                @endif
                                <th>Date NAISSANCE</th>
                                
                                
                                @if (Auth::user()->usertype == 'Admin')
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                @endif

                                    <th>MEMBRE FAMILLE</th>
                                
                                @if ( Auth::user()->usertype == 'Medecin')
                                    <th>FRAIS MEDICAUX</th>
                                @endif
                                @if ( Auth::user()->usertype == 'Pharmacie')
                                    <th>FRAIS PHARM</th>
                                @endif
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    @if ((Auth::user()->usertype == 'Medecin' && $row->usertype=='Employe') || (Auth::user()->usertype == 'Pharmacie' && $row->usertype=='Employe') || Auth::user()->usertype == 'Admin')
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->matricule}}</td>
                                            <td><img class=" rounded-circle" src="{{$row->profile_photo_url }}" width="100px" height="100px" alt="Image"></td>
                                            <td>{{$row->nom}}</td>
                                            <td>{{$row->prenom}}</td>
                                            <td>{{$row->statut}}</td>
                                            @if (Auth::user()->usertype == 'Admin' )
                                                
                                                <td>{{$row->date_embauche}}</td>
                                                <td>{{$row->date_fincontrat}}</td>
                                                
                                                <td>{{$row->poste}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>-{{$row->usertype}}</td>
                                            @endif
                                            <td>{{$row->date_nais}}</td>
                                            @if (Auth::user()->usertype == 'Admin')

                                                <td>
                                                    <a href="{{ url('role-edit/'.$row->id)}}" class="btn btn-success">EDIT</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#deletemodalepop">DELETE</a>
                                                </td>
                                            @endif
                                            @if (Auth::user()->usertype != 'Employe')
                                                <td>
                                                    @if ($row->usertype == 'Employe')
                                                        <a href="{{ url('famille/'.$row->id)}}" class="btn btn-info">view</a>
                                                    @endif
                                                </td>
                                            @endif
                                            
                                            @if ( Auth::user()->usertype == 'Medecin' )
                                                <td>
                                                    @if ($row->usertype == 'Employe')
                                                        <a href="{{ url('fraismedicaux-create/'.$row->id)}}" class="btn btn-info">valider</a>
                                                    @endif
                                                    
                                                </td> 
                                            @endif
                                            @if ( Auth::user()->usertype == 'Pharmacie')
                                                <td>
                                                    @if ($row->usertype == 'Employe')
                                                        <a href="{{ url('fraispharm-create/'.$row->id)}}" class="btn btn-info">valider</a>
                                                    @endif
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