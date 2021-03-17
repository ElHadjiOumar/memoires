<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Liste des Specialisations
                            @if (Auth::user()->usertype == 'Admin'  )
                                <a href="{{ url('specialisation-create')}}" class="btn btn-primary float-right py-2">Ajouter</a>
                            @endif 
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>DESCRIPTION</th>
                                    @if (Auth::user()->usertype == 'Admin'  )
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    @endif 
                                    <th>Liste Medecin</th>
                                </thead>
                                <tbody>
                                    @foreach ($specialisation as $row)
                                    
                                    <tr>
                                        <input type="hidden" class="speciadelete_val_id" value="{{$row->id}}">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->specialisation_nom}}</td>
                                        <td>{{$row->description}}</td>
                                        @if (Auth::user()->usertype == 'Admin'  )
                                            <td>
                                                <a href="{{url('specialisation-edit/'.$row->id)}}" class="btn btn-info">EDIT</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger specialisationdeletebtn" >DELETE</button>
                                            </td>
                                        @endif 
                                        <td>
                                            <a href="{{url('medecin/'.$row->id)}}" class="btn btn-info">view</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</x-app-layout>