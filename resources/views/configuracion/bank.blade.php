@extends('template.main')

@section('title','titulo')

@section('content')


  <div id="page-wrapper">
      {{-- <div class="row">
          <div class="col-lg-6">
              <h1 class="page-header">FORMULARIO</h1>
          </div>
          <div class="col-lg-6">
              <h1 class="page-header">BANCOS</h1>
          </div>
          <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
          <div class="col-lg-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      FORMULARIO DE ALTA
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-6">


                              {!! Form::open ()!!}

                              {!! Form::close ()!!}

                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
          </div> --}}

          {{-- <div class="row">
              <div class="col-lg-6">
                  <h2>BANCOS</h2>
                  <ul class="list-group">
                    @foreach ($bancos as $key => $value)
                      <li>{{$value->id}}</li>
                      <li>{{$value->banco}}</li>
                      <li>{{$value->condicion}}</li>
                    @endforeach
                  </ul>
              </div>
              <!-- /.col-lg-12 -->
          </div> --}}

          <div class="panel-body">
              <div class="col-lg-12">
                  <table class="table table-bordered" id="mitabla">
                    <thead>
                      <th>OPCIONES</th>
                      <th>BANCO</th>
                      <th>CONDICION</th>
                    </thead>
                      <tbody>
                        @foreach ($bancos as $key => $value)
                          <tr>
                            <td>
                              <button class="btn btn-warning"><a href="{{ route('editarbank', $value->id)}}"><i class="fa fa-pencil"></i></a></button>
                              <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </td>
                            <td>{{$value->banco}}</td>
                            <td>{{$value->condicion}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- /.col-lg-12 -->
          </div>



          <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->
@endsection


@section('java')
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function(){
      $('#mitabla').DataTable(
{
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdf'
                ],
        "bDestroy": true,
        "iDisplayLength": 10,//Paginación
        "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
      }
    );
  });
</script>
@endsection
