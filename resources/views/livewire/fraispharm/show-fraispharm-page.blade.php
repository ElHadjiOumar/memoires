<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Liste des Structures Hospitalieres
                        <a href="{{url('fraispharm-index')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>PRIX</th>
                                    <th>QUANTITE</th>
                                    <th>Montant </th>
                                </thead>
                                <tbody>
                                    @foreach ($show as $row)
                                    
                                    <tr>
                                        
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->nom}}</td>
                                        <td>{{$row->prix}}</td>
                                        <td>{{$row->qt}}</td>
                                        <td>{{$row->montant}}</td>               
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


