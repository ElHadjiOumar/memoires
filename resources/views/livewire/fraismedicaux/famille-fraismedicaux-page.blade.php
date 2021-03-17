<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Frais medicaux 
                            </h4>
                        </div>
        <div>
        <form action="{{ url('fraismedicaux-store') }}" method="POST"> 
    
            {{ csrf_field() }}
        <div class="row">
                <div class="col-sm-4">
                    
                    <input type="hidden" name="famille_id" class="form-control" id="famille_id" value="{{ $famille->user_id}}">
                     <div class="form-group {{ $errors->has('nom_user') ? 'has-error' : '' }}">
                        nom Beneficiaire
                        <input type="text" name="nom_user" class="form-control"
                               value="{{ $famille->nom }}" required readonly>
                        @if($errors->has('nom_user'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nom_user') }}
                            </em>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('prenom_user') ? 'has-error' : '' }}">
                        Prenom Beneficiaire
                        <input type="text" name="prenom_user" class="form-control"
                               value="{{ $famille->prenom }}" required readonly>
                        @if($errors->has('prenom_user'))
                            <em class="invalid-feedback">
                                {{ $errors->first('prenom_user') }}
                            </em>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
        
                    <div class="form-group {{ $errors->has('nom_prestataire') ? 'has-error' : '' }}">
                        Nom Prestataire
                        <input type="text" name="nom_prestataire" class="form-control"
                               value=" {{ Auth::user()->nom}}" required readonly>
                        @if($errors->has('nom_prestataire'))
                            <em class="invalid-feedback">
                                {{ $errors->first('nom_prestataire') }}
                            </em>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('prenom_prestataire') ? 'has-error' : '' }}">
                        Prenom Prestataire
                        <input type="text" name="prenom_prestataire" class="form-control"
                               value=" {{ Auth::user()->prenom}}" required readonly>
                        @if($errors->has('prenom_prestataire'))
                            <em class="invalid-feedback">
                                {{ $errors->first('prenom_prestataire') }}
                            </em>
                        @endif
                    </div>
    
                    
        
                    
                </div>
                
            </div>
        <hr>
        
        <table class="table table-bordered table-form">
            <thead>
                <tr>
                    <th>Nom Frais</th>
                    <th colspan="2">Montant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"> <input type="text" name="nom[]" class="form-control" required="" /></td>
                    <td> <input type="number" name="montant[]" class="form-control montantv" required="" /> </td>
                    <td> <a href="#" class="btn btn-danger removev">delete</a>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="#" class="btn btn-success addRowv">add</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Total</td>
                    <td><input name="sub_total" class="sub_totalv" type="number" readonly ></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Prise en charge</td>
                    <td><input name="prise_charge" class="prise_chargev" type="number" readonly value="80"> %</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Montant Total</td>
                    <td><input name="total" class="totalv" type="number" readonly></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Total IPM</td>
                    <td><input name="totalIPM" class="totalIPMv" type="number" readonly></td>
                </tr>
            </tfoot>
        </table>
    
        <div>
            <input type="submit" name="" value="Submit" class="btn btn-success">
        </div>
    </form>
        
</div>
                        
                    </div>
        </div>
    </div>

</x-app-layout>


