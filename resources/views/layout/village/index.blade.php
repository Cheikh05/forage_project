@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <h6 class="card-category"> Liste des villages enrégistrer</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tableVillage" class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                            Chef de village
                        </th>
                        <th>
                            Commune
                        </th>
                        <th>
                          Info
                        </th>
                      </thead>
                      <tbody>
                          @foreach ($villages as $village)
                              
                          

                        <tr>
                          <td>
                            {{$village->id}} 
                          </td>
                          <td>
                            {{$village->nom}}<br>
                            Region de {{$village->commune->arrondissement->departement->region->nom}}<br>
                            Commune de {{$village->commune->nom}}

                          </td>
                          <td>
                                {{$village->chef->user->name."  ".$village->chef->user->firstname}}
                          </td>
                          <td>
                            {{$village->commune->nom}}
                          </td>
                          <td>
                              <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit </a>
                              {{-- href={{route('villages.show',['village'=>$village->id])}} --}}
                          </td>
                   
                        </tr>
                        @endforeach
                      </tbody>
                     
                    </table>
                    {{-- {{ $villages->links() }} --}}
                  </div>
                </div>
              </div>
            </div>
          @push('layout.scripts')
            <script src="{{ asset('assets/js/jquery.dataTables.min.js')  }}"></script>
              <script>
                $(document).ready( function () {
                    $('#tableVillage').DataTable();
                } );
            </script>
          @endpush
            <div class="col-md-12">
              {{-- <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
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
                            $36,738
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
                            $23,789
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
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
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
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
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
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>

   
      @endsection