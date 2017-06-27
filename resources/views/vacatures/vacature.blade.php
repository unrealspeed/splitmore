@extends('layouts.app')

@section('content')
      <div class="container">
            <link rel="stylesheet" href="{{ URL::asset('css/css.css') }}" />
            <div class="row">
                  <div class="panel panel-default">
                  <div class="panel-heading custom-heading" align="center"><h3>Vacature: {{ $vacs->vacnaam }} bij {{ $vacs->vacbedrijf }}</div>
                  <div class="panel-body">
                    <div class="panel-heading">
                          <span>
                            <h4><b>INFORMATIE</b></h4>
                            <span class="pullright clearfix"><b>Bedrijf:</b> {{ $vacs->vacbedrijf }}</span>
                            <span class="pullright clearfix"><b>Functie:</b> {{ $vacs->vacnaam }}</span>
                            <span class="pullright clearfix"><b>Werklocatie:</b> {{ $vacs->vacplaats }}</span>
                            <span class="pullright clearfix"><b>Provincie:</b> {{ $vacs->vacprov }}</span>
                            <span class="pullright clearfix"><img height=80 width=120 src="../images/{{$vacs->logo}}"></span>
                          </span>
                          <h4><b>BESCHRIJVING</b></h4>
                          <span>
                            {{ $vacs->info }}
                          </span>
                    </div>
                  </div>
                </div>
                <div>
                <center>
                  <input type="button" class="btn btn-xs customvacbutton" style="font-size: 16px" value="Terug" onclick="history.back(-1)" />
                  <input type="button" class="btn btn-xs customvacbutton" style="font-size: 16px" value="Solliciteer" onclick="#" />
                  {!! Form::open([
                      'method' => 'DELETE',
                      'route' => ['vacs.destroy', $vacs->id]
                  ]) !!}
                      {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'margin-top: 5px']) !!}
                  {!! Form::close() !!}
                </center>
                </div>
              </div>
            </div>
@endsection
