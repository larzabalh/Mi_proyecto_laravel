@extends('template.main')

@section('title','titulo')

@section('content')
  <div id="page-wrapper">
      <div class="row">
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
          </div>

          <div class="row">
              <div class="col-lg-6">
                  <h2>BANCOS</h2>
                  <ul class="list-group">
                    @foreach ($bancos as $key => $value)
                      <li>{{$value->banco}}</li>
                    @endforeach
                  </ul>
              </div>
              <!-- /.col-lg-12 -->
          </div>



          <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->
@endsection
