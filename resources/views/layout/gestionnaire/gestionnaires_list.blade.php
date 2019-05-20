
@extends('layout.default')

@Section('title')
    <title>Liste des Gestionnaires</title>
@endSection

{{-- Partie qui traite le formulaire pour l'ajout d'un Gestionnaire --}}

@section('page')
<a class="navbar-brand" href="#">Liste des Gestionnaires</a>
@endsection

@section('content')

 <div class="container">
     <a href="{{ asset('user/gestionnaire') }}" class="col-md-6">
          <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-user-times"></i> Ajouter un nouvel gestionnaire</button>
     </a>
  </div>
          <div class="col-md-12">
        <div class="card">
          <div class="card-header">

            <h4 class="card-title"> Liste des Gestionnaires</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th>
                     N°
                  </th>
                  <th>
                    Nom
                  </th>
                  <th>
                    Prenom
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Opérations
                  </th>
                </thead>
                <tbody>
                  <tr>
                      <td>
                          1
                        </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
  
                    <td>
                        <a class="btn btn-danger"><i class="fas fa-user-times"></i></a>
                        <div class="btn btn-light btn-mod-user" > <i class="fa fa-edit"></i></div>
                   </td>
                  </tr>
                  <tr>
                      <td>
                          2
                        </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
 
                    <td>
                        <a class="btn btn-danger"><i class="fas fa-user-times"></i></a>
                        <div class="btn btn-light btn-mod-user"> <i class="fa fa-edit"></i></div>
                   </td>
                  </tr>
                  <tr>
                      <td>
                          3
                        </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>

                    <td>
                        <a class="btn btn-danger"><i class="fas fa-user-times"></i></a>
                        <div class="btn btn-light btn-mod-user"> <i class="fa fa-edit"></i></div>
                   </td>
                  </tr>
                  <tr>
                      <td>
                          4
                        </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>

                    <td>
                        <a class="btn btn-danger"><i class="fas fa-user-times"></i></a>
                        <div class="btn btn-light btn-mod-user"> <i class="fa fa-edit"></i></div>
                   </td>
                  </tr>
                  <tr>
                      <td>
                          5
                        </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>

                    <td>
                        <a class="btn btn-danger"><i class="fas fa-user-times"></i></a>
                        <div class="btn btn-light btn-mod-user"> <i class="fa fa-edit"></i></div>
                   </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
          
@endsection