@extends('template.main')

@section('title','titulo')

@section('content')



  <div id="page-wrapper">

      <div class="row">

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ALTA DE GASTOS
                </div>
                <div class="panel-body" id="formularioregistros">
                    <form name="" id="" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="gasto" maxlength="50" placeholder="Nombre del gasto">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Tipo de Gastos:</label><br>
                        <select class="form-control" name="tipo">
                          <option selected></option>
                          @foreach ($tipos as $key => $value)
                            <option value={{$value->id}}>{{$value->tipo}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
                      </div>
                    </form>
                    @if (count($errors)>0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>

                    @endif
                  </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>



          <div class="panel-body">
              <div class="col-lg-12">
                  <table id="mitabla" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>EDITAR</th>
                      <th>BORRAR</th>
                      <th>GASTO</th>
                      <th>TIPO DE GASTO</th>
                      <th>CONDICION</th>
                    </thead>
                      <tbody>
                        @foreach ($gastos as $key => $value)
                          <tr>
                            <td><a class="btn btn-info" href="{{ route('gasto.edit', $value->id)}}"><i class="fa fa-pencil"></i></a></td>
                            <td><form method="POST" action =" {{route('gasto.destroy', $value->id)}}">
                                  <input type="hidden" name="_method" value="delete" />
                                  {{ csrf_field() }}
                                  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                </form>

                            </td>
                            <td>{{$value->gasto}}</td>
                            <td>{{$value->tipo_de_gasto->tipo}}</td>
                            <td>{{$value->condicion}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
                        <th>GASTO</th>
                        <th>TIPO DE GASTO</th>
                        <th>CONDICION</th>
                      </tfoot>
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

{{-- <script>
  $(document).ready(function(){
      $('#mitabla').DataTable()
    });
</script> --}}

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
        "iDisplayLength": 5,//Paginación
        "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
      }
    );
  });
</script>
@endsection
