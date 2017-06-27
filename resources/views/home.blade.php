@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/css.css') }}" />

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
              @include('search',['url'=>'home','link'=>'home'])
                <div class="panel-heading custom-heading" align="right"><h3>{{ $vacs->total() }} vacature(s) gevonden</div>
                <div class="panel-body">
                    <ul class="list-group">
                      @foreach ($vacs as $vac)
                        <li class="list-group-item" style="margin-top:20px">
                          <span>
                            <div id="userphoto" style="float:left"><img height=60 width=80 src="images/{{$vac->logo}}" alt="default avatar"></div>
                          </span>
                          <span style="margin-left:10px">
                            {{ $vac->vacbedrijf }}
                          </span><br>
                          <span style="margin-left:10px">
                            {{ $vac->vacplaats }}
                          </span>
                          <span style="margin-left:10px"><br>
                              {{ $vac->vacnaam }}
                              <a href="{{ url('vacatures/'.$vac->id) }}">
                              <button class="btn btn-xs custombutton">
                                Bekijk vacature
                              </button>
                              </a>
                          </span>
                        </li>
                      @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
