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
                <form method="post" action =" {{route('ingresos.muchos', $value->id)}}">
                  <input type="hidden" name="_method" value="" />
                  {{ csrf_field() }}
                  {{ method_field('POST') }}
                  <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
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
                    <td>

                          <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>

                    </td>
                    <td>{{$value->cliente}}</td>
                    <form class="" action="index.html" method="post">

                    </form>
                    <td>

                          <input type="hidden" name="_method" value="delete" />
                          {{ csrf_field() }}
                      <input type="hidden" name="cliente[{{$value->id}}]" value="{{$value->id}}">
                      <input type="decimal" class="form-control" name="honorario[{{$value->id}}]" value="{{number_format($value->honorario,2)}}">
                    </td>
                  </tr>
                    @endforeach

                  </tbody>
                </table>
                <div class="">

                </form>
                </div>
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
