@extends('layouts.app')

@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vacature toevoegen</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('vacnaam') ? ' has-error' : '' }}">
                            <label for="vacnaam" class="col-md-4 control-label">Functie</label>

                            <div class="col-md-6">
                                <input id="vacnaam" type="text" class="form-control" name="vacnaam" value="{{ old('vacnaam') }}" required autofocus>

                                @if ($errors->has('vacnaam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacnaam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vacbedrijf') ? ' has-error' : '' }}">
                            <label for="vacbedrijf" class="col-md-4 control-label">Bedrijf</label>

                            <div class="col-md-6">
                                <input id="vacbedrijf" type="text" class="form-control" name="vacbedrijf" value="{{ old('vacbedrijf') }}" required autofocus>

                                @if ($errors->has('vacbedrijf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacbedrijf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vacplaats') ? ' has-error' : '' }}">
                            <label for="vacplaats" class="col-md-4 control-label">Plaats</label>

                            <div class="col-md-6">
                                <input id="vacplaats" type="text" class="form-control" name="vacplaats" value="{{ old('vacplaats') }}" required autofocus>

                                @if ($errors->has('vacplaats'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacplaats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vacprov') ? ' has-error' : '' }}">
                            <label for="vacprov" class="col-md-4 control-label">Provincie</label>

                            <div class="col-md-6">
                                <input id="vacprov" type="text" class="form-control" name="vacprov" value="{{ old('vacprov') }}" required autofocus>

                                @if ($errors->has('vacprov'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vacprov') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label for="logo" class="col-md-4 control-label">Logo</label>

                            <div class="col-md-6">
                                <input id="logo" type="text" class="form-control" name="logo" value="{{ old('logo') }}" required autofocus>

                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <center><label for="info">Beschrijving</label></center>
                        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                          <script src="{{asset('/editor/ckeditor.js')}}"></script>
                        </head>
                        <body>

                          <textarea id="info" class="ckeditor" name="info"></textarea>

                          <script type="text/javascript">
                             CKEDITOR.replace( 'editor1' );
                          </script>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Opslaan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
