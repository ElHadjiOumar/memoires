<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Liste des Frais Pharmaceutiques
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-primary">
                                    @if (Auth::user()->usertype != 'Employe'  )
                                    <th>ID</th>
                                    @endif
                                    <th>NOM</th>
                                    <th>Prenom</th>
                                    <th>Nom Prestataire</th>
                                    <td>Montant Total</td>
                                    <td>Prise en Charge</td>
                                    <td>Total à payer</td>
                                    <td>Total IPM</td>
                                    <th>Date Création </th>
                                    <th>DETAILS</th>
                                </thead>
                                <tbody>
                                    @foreach ($pharm as $row)
                                    @if (($row->user_id == Auth::user()->id) || Auth::user()->usertype == 'Admin' || ($row->famille_id == Auth::user()->id))
                                    <tr>
                                        @if (Auth::user()->usertype != 'Employe'  )
                                        <td>{{$row->id}}</td>
                                        @endif
                                        <td>{{$row->nom_user}}</td>
                                        <td>{{$row->prenom_user}}</td>
                                        <td>{{$row->nom_prestataire}}</td>
                                        <td>{{$row->sub_total}}</td>
                                        <td>{{$row->prise_charge}}%</td>
                                        <td>{{$row->total}}</td>
                                        <td>{{$row->totalIPM}}</td>
                                        <td>{{$row->created_at->diffForHumans()}}</td>
                                        
                                        <td>
                                        <a href="{{ url('fraispharm/'.$row->id)}}" class="btn btn-info ">Afficher</a>
                                        </td>
                                        
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


