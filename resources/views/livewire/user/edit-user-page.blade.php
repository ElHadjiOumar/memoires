<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Modification des informations de l'utilisateur</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="{{ url('role-register-update/'.$users->id)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                        <label>Matricule</label>
                                    <input type="text" name="matricule" value="{{ $users->matricule }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nom</label>
                                    <input type="text" name="nom" value="{{ $users->nom }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Prenom</label>
                                    <input type="text" name="prenom" value="{{ $users->prenom }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Statut Matrimonial</label>
                                        <select name="statut" class="form-control">
                                            <option value=""></option>
                                            <option value="marié">Marié</option>
                                            <option value="celibataire">Célibataire</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Date Embauche </label>
                                            <input type="date" name="date_embauche" value="{{ $users->date_embauche }}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Date Fin Contrat </label>
                                            <input type="date" name="date_fincontrat" value="{{ $users->date_fincontrat }}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Date de Naissance </label>
                                            <input type="date" name="date_nais" value="{{ $users->date_nais }}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Poste </label>
                                            <input type="text" name="poste" class="form-control" value="{{ $users->poste }}" placeholder="Entrez son poste de travail sur l'entreprise">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="usertype" class="form-control">
                                                <option value="Employe">Employe</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Pharmacie">Pharmacie</option>
                                                <option value="Medecin">Medecin</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Email </label>
                                            <input type="email" name="email" class="form-control" value="{{ $users->email }}" placeholder="Entrez son email">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ url('role-register')}}" class="btn btn-danger">Cancel</a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>