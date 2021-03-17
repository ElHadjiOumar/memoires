<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Liste des pharmacies
                            @if (Auth::user()->usertype == 'Admin'  )
                        <a href="{{ url('pharmacie-create')}}" class="btn btn-primary float-right py-2">Ajouter</a>
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>ADRESSE</th>
                                    <th>NUMERO</th>
                                    @if (Auth::user()->usertype == 'Admin'  )
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach ($pharmacie as $row)
                                    
                                    <tr>
                                        <input type="hidden" class="pharmadelete_val_id" value="{{$row->id}}">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->pharmacie_nom}}</td>
                                        <td>{{$row->pharmacie_adress}}</td>
                                        <td>{{$row->pharmacie_numero}}</td>
                                        @if (Auth::user()->usertype == 'Admin'  )
                                            <td>
                                                <a href="{{ url('./pharmacie-edit/'.$row->id)}}" class="btn btn-info">EDIT</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger pharmaciedeletebtn" >DELETE</button>
                                            </td>
                                        @endif
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

</x-app-layout>