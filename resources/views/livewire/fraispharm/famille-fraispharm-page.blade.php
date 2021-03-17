<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Frais Pharmaceutique
                            </h4>
                        </div>
        <div>
    <form action="{{ url('fraispharm-store') }}" method="POST"> 

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

           

            

            
        </div>
        
    </div>
    <hr>
    
    <table class="table table-bordered table-form">
        <thead>
            <tr>
                <th>Nom Medicament</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Montant</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="text" name="nom[]" class="form-control" required="" /></td>
                <td> <input type="number" name="prix[]" class="form-control prix" required/> </td>
                <td> <input type="number" name="qt[]" class="form-control qt" required="" /> </td>
                <td> <input type="number" name="montant[]" class="form-control montant" required="" readonly/> </td>
                <td> <a href="#" class="btn btn-danger remove">delete</a>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <a href="#" class="btn btn-success addRow">add</a>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Total</td>
                <td><input name="sub_total" class="sub_total" type="number" readonly min="0"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Prise en charge</td>
                <td><input name="prise_charge" class="prise_charge" type="number" readonly value="80"> %</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Total à payer</td>
                <td><input name="total" class="total" type="number" readonly></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Total IPM</td>
                <td><input name="totalIPM" class="totalIPM" type="number" readonly></td>
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


