@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Liste de tous les Consommations 
                    <a href="{{ route('consommations.create') }}" class="col-md-6">
                      <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-user-times"></i> Ajouter une nouvelles consommation</button>
                  </a>
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-consommation">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Valeur
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                            Compteur
                          </th>
                        <th>
                          Agent
                        </th>
                        <th>
                          Date Limite Facture
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
        $(document).ready(function() {
            $('#table-consommation').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('consommations.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'valeur',
                        name: 'valeur'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'compteur.numero_serie',
                        name: 'compteur.numero_serie'
                    },
                  
                    {
                        data: 'agent.user.firstname',
                        name: 'agent.user.firstname'
                    },
                    {
                        data: 'facture.date_limite',
                        name: 'facture.date_limite'
                    }, 
                    {
                        data: null,
                        orderable: false,
                        searchable: false
                    }
    
                ],
                "columnDefs": [{
                        "data": null,
                        "render": function(data, type, row) {
                            url_e = "{!! route('consommations.edit',':id')!!}".replace(':id', data.id);
                            url_d = "{!! route('consommations.destroy',':id')!!}".replace(':id', data.id);
                            return '<a href=' + url_e + '  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>' +
                                ' <a class="btn btn-danger" href=' + url_d + '><i class="fa-trash"></i></a>';
                        },
                        "targets": 6
                    },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
    
            });
        });
    </script>

          
      @endpush