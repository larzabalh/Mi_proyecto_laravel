@extends('template.main')

@section('title','titulo')

@section('content')
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">

  <!-- /.ACA COMIENZA EL CALCULO DEL GASTO!!!!!! -->
      @php
        $saldo=0
      @endphp
            @foreach ($clientes as $value)

      @php
        $saldo += $value->honorario
      @endphp
            @endforeach
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  TOTAL DE INGRESOS:
              </div>
              <div class="panel-body text-center">
                  <h3>$ {{number_format($saldo,2)}}</h3>
              </div>
          </div>
      </div>


          <div class="panel-body">
              <div class="col-lg-12">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                     <th>EDITAR</th>
                     <th>BORRAR</th>
                     <th>CLIENTE</th>
                     <th>HONORARIO</th>
                  </tr>
                  <tr>
                    @foreach ($clientes as $value)
                    <td><a class="btn btn-info" href="{{ route('clientes.edit', $value->id)}}"><i class="fa fa-pencil"></i></a></td>
                    <td><form method="POST" action =" {{route('clientes.destroy', $value->id)}}">
                          <input type="hidden" name="_method" value="delete" />
                          {{ csrf_field() }}
                          <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                    <td>{{$value->cliente}}</td>
                    <form class="" action="index.html" method="post">

                    </form>
                    <td>
                      <form method="POST" action =" {{route('ingresos.destroy', $value->id)}}">
                          <input type="hidden" name="_method" value="delete" />
                          {{ csrf_field() }}
                      <input type="decimal" class="form-control" name="fecha" value="{{number_format($value->honorario,2)}}">
                      </form>
                    </td>
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>



          <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->

</div>
@endsection


@section('java')

{{-- <script>
  $(document).ready(function(){
      $('#mitabla').DataTable()
    });
</script> --}}
@endsection
