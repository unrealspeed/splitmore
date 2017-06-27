<div class="col-md-5">
    <div class="panel-heading">
      {!! Form::open(['method'=>'GET','url'=>'home','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
  </div>
    <div class="input-group custom-search-form">
      <input type="text" name="search" class="form-control">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
          Zoeken
        </button>
      </span>
    </div>
  </div>
  {!! Form::close() !!}
