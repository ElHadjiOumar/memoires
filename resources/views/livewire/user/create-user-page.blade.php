<x-app-layout>
    <x-slot name="header">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript"></script>
    </x-slot>

    <style>
        body {
            input[required] {
    border-color: #f00;
}
        }
    </style>
    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ajouter un utilisateur 
                        <a href="{{ url('role-register')}}" class="btn btn-primary float-right py-2">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('save-user')}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="usertype" class="form-control" id="model">
                                            <option value="Admin">Admin</option>
                                            <option value="Employe">Employe</option>
                                            <option value="Pharmacie">Pharmacie</option>
                                            <option value="Medecin">Medecin</option>
                                        </select>
                                    </div>
                                </div> 
                                
                                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Matricule </label>
                                        <input type="text" name="matricule" class="form-control" placeholder="Entrez le matricule de l'utilisateur" required>
                                    </div>
                                </div><br>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nom </label>
                                        <input type="text" name="nom" class="form-control " placeholder="Entrez le nom de l utilisateur" required>
                                    </div>
                                </div><br>
                                <div class="col-md-8 required medecin" style="display:none">
                                    <div class="form-group">
                                        <label>Prenom </label>
                                        <input type="text" name="prenom" class="form-control require" placeholder="Entrez le prenom de l'utilisateur" >
                                    </div>
                                </div><br>
                                <div class="col-md-8 required" style="display:none">
                                    <div class="form-group" >
                                        <label>Statut Matrimonial</label>
                                        <select name="statut" class="form-control">
                                            <option value=""></option>
                                            <option value="Marié">Marié</option>
                                            <option value="celibataire">Célibataire</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8 required" style="display:none">
                                    <div class="form-group">
                                        <label>Date Embauche </label>
                                        <input type="date" name="date_embauche"  class="form-control require">
                                    </div>
                                </div>
                                <div class="col-md-8 required" style="display:none">
                                    <div class="form-group">
                                        <label>Date Fin Contrat </label>
                                        <input type="date" name="date_fincontrat" class="form-control require">
                                    </div>
                                </div>
                                <div class="col-md-8 required" style="display:none">
                                    <div class="form-group">
                                        <label>Date de Naissance </label>
                                        <input type="date" name="date_nais" class="form-control require" >
                                    </div>
                                </div>
                                <div class="col-md-8 required" style="display:none">
                                    <div class="form-group">
                                        <label>Poste </label>
                                        <input type="text" name="poste" class="form-control require" placeholder="Entrez son poste de travail sur l'entreprise" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="email" name="email" class="form-control" placeholder="Entrez son email" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Mot de passe </label>
                                        <input type="password" name="password" class="form-control" placeholder="Entrez son mot de passe" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="btn_submit" class="btn btn-info"> Sauvegarder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
             $(document).ready(function() {
					$('#model').change(function() {
                        var sel = $(this).val();
                        var index = this.selectedIndex;
                        if (sel == 'Employe') $(' .required').show()
                        else if (sel == 'Medecin') $(' .Medecin').show()
                        else $(' .required').hide()
                        $('.require').prop('required', function(){
                            return index == 1;
                        });
					});
	
					
				});

    </script>

</x-app-layout>